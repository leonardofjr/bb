<template>
            <div class="">
                <h2>Add</h2>
                <form name="addToGalleryForm" id="addToGalleryForm">
                    <div class="form-group">
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" id="description" placeholder="Describe the image">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tags" id="tags" placeholder="makeup, (separate each tag with a comma)">
                    </div>
                    <div class="form-group">
                        <button v-on:click.prevent="submit($event)">Add</button>
                    </div>
                </form>
            </div>
</template>

<script>
    export default {
        mounted() {
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
                    console.log(err);
                })
            },

            back() {
                window.history.back();
            }
        }

    }
</script>

