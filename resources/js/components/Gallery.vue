<template>
            <div class="">
                <router-link to="/gallery/add">Add</router-link>
                <div v-for="post of posts"  class="row">
                    <div class="col-sm-5 portfolio-item">
                            <img :src='"storage/" + post.basename' :alt="post.description" class="img-fluid">

                    </div>
                    <div class="col-sm-7">
                            <textarea :value="post.description" ></textarea>
                            <form name="deleteFromGalleryForm" id="deleteFromGalleryForm">
                                <input type="hidden" name="_method" value="DELETE">
                                <i class="far fa-trash-alt" v-on:click.prevent="deleteItem(post.id, $event)"></i>
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
           // GET request for remote image
             this.$http.get('gallery',)
            .then(function (response) {
                this.posts = response.body;
            });
        },
        methods: {
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

