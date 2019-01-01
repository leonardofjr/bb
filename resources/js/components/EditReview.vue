<template>
            <div class="">
                <h2>Edit</h2>
                <form name="editReviewItem" id="editReviewItem">
                    <div class="form-group">
                        <input type="text" :value="this.post.fname" class="form-control" name="fname" id="fname" placeholder="First Name">
                    </div>
                    <div class="my-3 d-none alert alert-warning error error-fname" role="alert">
                    </div>
                    <div class="form-group">
                        <input type="text" :value="this.post.lname" class="form-control" name="lname" id="lname" placeholder="Last Name">
                    </div>
                    <div class="my-3 d-none alert alert-warning error error-lname" role="alert">
                    </div>
                    <div class="form-group">
                        <textarea type="text" :value="this.post.review" class="form-control" name="review" id="review" placeholder="Review"></textarea>
                    </div>
                    <div class="my-3 d-none alert alert-warning error error-review" role="alert">
                    </div>

                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <button v-on:click.prevent="updateReview(post.id, $event)">Update</button>
                    </div>
                </form>
            </div>
</template>

<script>
import {BasicValidation} from './BasicValidation.js';

    export default {
        data() {
            return {
                post: [],
                errors: []
            }
            
        },
        mounted() {
            // Importing Validation Class
            this.getReviewItemById(this.$route.params.id);
            console.log('Component mounted.')
        },


        methods: {

            // This function will run when changes occur on image input

            getReviewItemById: function (id) {
                 // GET request for remote image
                this.$http.get('review/' + id)
                .then(function (response) {
                    this.post = response.body[0];
                    console.log(this.post);

                });
            },
            updateReview: function (id, e) {
                  let formData = new FormData(document.getElementById('editReviewItem'));
                  this.$http.post("review/" + id, formData)
                    .then((response) => {
                     // Check if response is 200
                        if (response.status === 200) {
                            // If response is successful then we will send the user to the previous page
                            this.back();
                        }        
                    }, function(err) {
                        console.log(err);
                    });
            },

            back() {
                window.history.back();
            }
        }

    }
</script>

