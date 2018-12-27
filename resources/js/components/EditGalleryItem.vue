<template>
            <div class="">
                <h2>Edit</h2>
                <form name="EditGalleryItem" id="EditGalleryItem">
                    <img :src='"/storage/" + post.basename' :alt="post.description" id="imgPreview" class="img-fluid">
                    <div class="form-group">
                        <input type="file" id="image" name="image" accept="image/*" v-on:change="previewImageToUpload()">                    </div>
                    <div class="my-3 d-none alert alert-warning error error-image" role="alert">
                    </div>
                    <div class="form-group">
                        <textarea type="text" :value="this.post.description" class="form-control" name="description" id="description" placeholder="Describe the image"></textarea>
                    </div>
                    <div class="my-3 d-none alert alert-warning error error-description" role="alert">
                    </div>
                     <div class="form-group">
                        <select name="tags" id="tags" class="form-control">
                            <option disabled>--- Choose Category ---</option>
                            <option v-for="dropdownItem of this.dropdown" :key="dropdownItem.id" :value="dropdownItem.value" :selected="dropdownItem.value === post.tags"
 >{{dropdownItem.text}}</option>
                        </select>
                    </div>
                    <div class="my-3 d-none alert alert-warning error error-tags" role="alert">
                    </div>
                    <div class="form-group">
                        <button v-on:click.prevent="submit($event)">Update</button>
                    </div>
                </form>
            </div>
</template>

<script>
import {BasicValidation} from './BasicValidation.js';
import {ImagePreview} from './ImagePreview.js';



    export default {
        data() {
            return {
                post: [],
                dropdown: this.createDropdown(),
                errors: []
            }
            
        },
        mounted() {
            // Importing Validation Class
            this.getItemFromGalleryById(this.$route.params.id);
            console.log('Component mounted.')
        },


        methods: {

            // This function will run when changes occur on image input
            previewImageToUpload: function() {

                let imagePreview = new ImagePreview($('#image')[0], '#imgPreview');
                imagePreview.init();
 
            },
            getItemFromGalleryById: function (id) {
                 // GET request for remote image
                this.$http.get('gallery/' + id)
                .then(function (response) {
                    this.post = response.body[0];
                    console.log(this.post);

                });
            },
            updateItem: function (id, e) {
                  let formData = new FormData(document.getElementById('editGalleryItem'));
                  this.$http.post("gallery/" + id, formData)
                    .then((response) => {
                     // Check if response is 200
                        if (response.status === 200) {
                            // If response is successful then we will send the user to the previous page
                            this.back();
                        }        
                    });
            },

            createDropdown: function() {
                return [
                    {
                        value: 'makeup',
                        text: 'Makeup',
                    },
                    {
                        value: 'hair',
                        text: 'Hair',
                    },
                    {
                        value: 'fashion',
                        text: 'Fashion',
                    },
                ];
            },
            back() {
                window.history.back();
            }
        }

    }
</script>

