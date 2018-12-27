<template>
            <div class="">
                <router-link to="/gallery/add">Add</router-link>
                <div v-for="post of posts" class="row" :key="post.id">
                    <div class="col-sm-5 portfolio-item">
                            <img :src='"storage/" + post.basename' :alt="post.description" class="img-fluid">
                    </div>
                    <div class="col-sm-7">
                            <p>{{post.description}}</p>
                            <form name="deleteFromGalleryForm" id="deleteFromGalleryForm">
                                <input type="hidden" name="_method" value="DELETE">
                                <i class="far fa-trash-alt" v-on:click.prevent="deleteItem(post.id, $event)"></i>
                            </form>
                            <form name="editGalleryItem" id="editGalleryItem">
                                <input type="hidden" name="_method" value="PUT">
                                <router-link :to='"/gallery/edit/" + post.id'>Edit</router-link>
                                <!--<i class="far fa-edit" v-on:click.prevent="updateItem(post.id, $event)"></i>-->
                            </form>
                    </div>
                </div>
            </div>
</template>

<script>
    export default {
         data() {
            return {
             posts: [],
            }
        },
        mounted() {
            this.getItemsFromGallery();
        },
        methods: {
        
            getItemsFromGallery: function () {
                 // GET request for remote image
                this.$http.get('gallery',)
                .then(function (response) {
                    this.posts = response.body;
                });
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

