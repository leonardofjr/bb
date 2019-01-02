<template>
            <div class="">
                <div class="text-right mb-3">
                    <router-link to="/gallery/add" class="btn btn-primary mb-3">Add Image</router-link>
                </div>
                <div class="row" v-if="posts.length !== 0">
                    <div class="col-12 col-sm-4 col-md-3 mb-3"  v-for="post of posts" :key="post.id" >
                        <div class="portfolio-item d-flex justify-content-center">
                                <img :src='"/storage/" + post.basename' :alt="post.description" class="img-fluid">
                                <!--<p style="font-size: 12px">{{post.description}}</p>-->
                        </div>
                        <div class="d-flex justify-content-center">
                            <form name="deleteFromGalleryForm" id="deleteFromGalleryForm" class="d-inline">
                                <input type="hidden" name="_method" value="DELETE">
                                <i class="far fa-trash-alt btn" v-on:click.prevent="deleteItem(post.id, $event)"></i>
                            </form>
                            <form name="editGalleryItem" id="editGalleryItem" class="d-inline">
                                <input type="hidden" name="_method" value="PUT">
                                <router-link :to='"/gallery/edit/" + post.id' tag="i" class="btn fas fa-edit"></router-link>
                                <!--<i class="far fa-edit" v-on:click.prevent="updateItem(post.id, $event)"></i>-->
                            </form>
                        </div>
                    </div>

                    
                </div>

                   <div class="d-flex justify-content-center"  v-else>
                        <span class="h2 py-3">No Results</span>
                   </div>

                <div class="d-flex justify-content-center ">
                    <a class="mr-2 btn" v-on:click="getPrevious()">Previous</a>
                    <a class="ml-2 btn" v-on:click="getNext()"   v-if="posts.length !== 0">Next</a>
                    <a class="ml-2 btn" v-else>Next</a>
                </div>
            </div>
</template>

<script>
    export default {
         data() {
            return {
             posts: [],
             limit: 12,
             offset: 0,
            }
        },
        mounted() {
            this.getItemsFromGallery();
        },
        methods: {
        
            getItemsFromGallery: function () {
                 // GET request for remote image
                this.$http.get('gallery/' + this.limit + '/' + this.offset,)
                .then(function (response) {
                     this.posts = response.body;
                });
            },
            getNext: function() {
                this.offset += 12;
                this.getItemsFromGallery();

            },
            getPrevious: function() {
                if (!this.offset <= 0) {
                    this.offset -= 12;
                    this.getItemsFromGallery();
                }


            },
            deleteItem: function (id, e) {
                  let formData = new FormData(document.getElementById('deleteFromGalleryForm'));
                  this.$http.post("gallery/" + id, formData)
                    .then((response) => {
                     // Check if response is 200
                        if (response.status === 200) {
                            // If response is successful then we will send the user to the previous page
                            this.back();
                        }        
                    });
            },
            back() {
                window.history.back();
            },
        }
    }
</script>

