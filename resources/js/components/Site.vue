<template>
    <div>
        <form  name="siteForm" id="siteForm">
           <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email"  v-bind:value="data[0].email">
            </div>
            <div class="my-3 d-none alert alert-warning error error-email" role="alert">
            </div>

            <div class="form-group">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" v-bind:value="data[0].phone">
            </div>
            <div class="my-3 d-none alert alert-warning error error-phone" role="alert">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="facebook-url" id="facebook-url" placeholder="Facebook Url" v-bind:value="data[0].facebook_url">
            </div>
            <div class="my-3 d-none alert alert-warning error error-facebook-url" role="alert">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="instagram-url" id="instagram-url" placeholder="Instagram Url" v-bind:value="data[0].instagram_url">
            </div>
            <div class="my-3 d-none alert alert-warning error error-instagram-url" role="alert">
            </div>
            <div class="form-group">
                <button v-on:click.prevent="submit($event)">Save</button>
            </div>
        </form>   
    </div>
</template>

<script>
import {BasicValidation} from './BasicValidation.js';

    export default {
            data() {
                return {
                data: [],
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getSiteData();
        },

        methods: {
            getSiteData: function () {
                 // GET request for remote image
                this.$http.get('site',)
                .then(function (response) {
                    this.data = response.body;
                    console.log(this.data);
                }, function(err) {
                    console.log(err);
                });
            },

            submit: function(e) {

                // Getting Data From Form
                let siteForm = document.getElementById("siteForm");
                let formData = new FormData(siteForm)
                // Posting To Server
                this.$http.post('site', formData)
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
                    validation.addField('.error-email', err.body.errors.email);
                    validation.addField('.error-phone', err.body.errors.phone);
                     validation.addField('.error-facebook-url', err.body.errors.facebookUrl);
                     validation.addField('.error-instagram-url', err.body.errors.instagramUrl);
                   // Passing Class Attached To All Errors
                     validation.init('.error');
                })
            },

            back() {
                window.history.back();
            },
        }
    }


</script>
