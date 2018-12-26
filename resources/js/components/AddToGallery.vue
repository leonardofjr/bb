<template>
            <div class="">
                <h2>Add</h2>
                <form name="addToGalleryForm" id="addToGalleryForm">
                    <div class="form-group">
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>
                    <div class="my-3 d-none alert alert-warning error error-image" role="alert">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="description" id="description" placeholder="Describe the image"></textarea>
                    </div>
                    <div class="my-3 d-none alert alert-warning error error-description" role="alert">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tags" id="tags" placeholder="makeup, (separate each tag with a comma)">
                    </div>
                    <div class="my-3 d-none alert alert-warning error error-tags" role="alert">
                    </div>
                    <div class="form-group">
                        <button v-on:click.prevent="submit($event)">Add</button>
                    </div>
                </form>
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
            submit: function(e) {

                // Getting Data From Form
                let addToGalleryForm = document.getElementById("addToGalleryForm");
                let formData = new FormData(addToGalleryForm)
                // Posting To Server
                this.$http.post('gallery', formData)
                .then(function (response) {
                    // Check if response is 200
                    if (response.status === 200) {
                        // If response is successful then we will send the user to the previous page
                         this.back();
                    }                  
                }, function (err) {
                    let validation = new BasicValidation();
                    validation.addField('.error-image', err.body.errors.image);
                    validation.addField('.error-description', err.body.errors.description);
                    validation.addField('.error-tags', err.body.errors.tags);
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

