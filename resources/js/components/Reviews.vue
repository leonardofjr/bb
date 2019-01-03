<template>
            <div class="">
                <div class="text-right mb-3">
                    <router-link to="/reviews/add" class="btn btn-primary mb-3">Add Review</router-link>
                </div>
                <div class="row" v-if="posts.length !== 0" >
                    <div class="col-12 col-sm-4 col-md-3 mb-3"  v-for="post of posts" :key="post.id">
                        <div class="review-item">
                            <div class="d-flex justify-content-center">
                                    <p style="font-size: 12px">{{post.review}}</p>
                            </div>

                            <div class="d-flex justify-content-center">
                                    <p style="font-size: 12px">{{post.fname}} {{post.lname}}</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <form name="deleteReviewForm" id="deleteReviewForm" class="d-inline">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <i class="far fa-trash-alt btn" v-on:click.prevent="deleteItem(post.id, $event)"></i>
                                </form>
                                <form name="editReviewItem" id="editGalleryItem" class="d-inline">
                                    <input type="hidden" name="_method" value="PUT">
                                    <router-link :to='"/review/edit/" + post.id' tag="i" class="btn fas fa-edit"></router-link>
                                    <!--<i class="far fa-edit" v-on:click.prevent="updateItem(post.id, $event)"></i>-->
                                </form>
                           
                        </div>
                         <div class="d-flex justify-content-center">
                                <div v-if="post.confirmed">
                                    <span class="text-success">Validated</span>
                                </div>
                                <div v-else>
                                    <span class="text-danger">Not Validated</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center"  v-else>
                    <span class="h2 py-3">No Results</span>
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
                this.$http.get('reviews',)
                .then(function (response) {
                    this.posts = response.body;
                    console.log(this.posts);
                });
            },
            deleteItem: function (id, e) {
                  let formData = new FormData(document.getElementById('deleteReviewForm'));
                  this.$http.post("review/" + id, formData)
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

