<template>
    <div class="container">
        <div class="row">
            <ul class="nav flex-column col-sm-2">
                <li class="nav-item">
                    <router-link to="/gallery">Gallery</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/reviews">Reviews</router-link>
                </li>
            </ul>
            <section class="col-sm-10">
                <router-view></router-view>
            </section>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
