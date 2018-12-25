<template>
            <div class="">
                <h2>Add</h2>
                <form enctype="multipart/form-data" method="post" action="/api/gallery">
                    <div class="form-group">
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" id="description" placeholder="Describe the image">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tags" id="tags" placeholder="fashion, (separate each tag with a comma)">
                    </div>
                    <div class="form-group">
                        <input type="submit">
                    </div>
                </form>
            </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

