<template>
            <div class="">
                <h2>Add Review</h2>
                   <form  name="addReviewForm" id="addReviewForm">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                        </div>
                        <div class="my-3 d-none alert alert-warning error error-fname" role="alert">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                        </div>
                        <div class="my-3 d-none alert alert-warning error error-lname" role="alert">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="review" id="review" placeholder="Review"></textarea>
                        </div>
                        <div class="my-3 d-none alert alert-warning error error-review" role="alert">
                        </div>
                        <div class="form-group">
                             <button v-on:click.prevent="submit($event)">Add Review</button>
                        </div>
                    </form>
                </div>
            </div>
</template>

<script>
import {BasicValidation} from './BasicValidation.js';

    export default {
        data() {
            return {
                errors: []
            }
            
        },
        mounted() {
            // Importing Validation Class

            console.log('Component mounted.')
        },


        methods: {
            // This function will run when changes occur on image input

            submit: function(e) {

                // Getting Data From Form
                let addReviewForm = document.getElementById("addReviewForm");
                let formData = new FormData(addReviewForm)
                // Posting To Server
                this.$http.post('review', formData)
                .then(function (response) {
                    // Check if response is 200
                    if (response.status === 200) {
                        // If response is successful then we will send the user to the previous page
                         this.back();
                    }                  
                }, function (err) {
                    console.log(err);
                    // Creating an instance of the BasicValidation Class
                    let validation = new BasicValidation();
                    // Adding Errors Of Fields
                    validation.addField('.error-fname', err.body.errors.fname);
                    validation.addField('.error-lname', err.body.errors.lname);
                    validation.addField('.error-review', err.body.errors.review);
                    // Passing Class Attached To All Errors
                    validation.init('.error');

                })
            },

            back() {
                window.history.back();
            }
        }

    }
</script>

