<template>
            <div class="">
                <router-link to="/gallery/add">Add</router-link>
                <div v-for="post of posts"  class="row">
                    <div class="col-sm-5 portfolio-item">
                            <img :src='"storage/" + post.basename' :alt="post.description" class="img-fluid">

                    </div>
                    <div class="col-sm-7">
                            <textarea :value="post.description" ></textarea>
                            <form :action='"api/gallery/" + post.id' method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="delete">
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
            deleteItem(id) {
                  this.$http.delete("gallery/" + id)
                    .then((response) => {
                        console.log(response);
                    });
            }
        }
    }
</script>

