
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Bootstrap from './bootstrap.js';

import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

Vue.use(VueRouter)
Vue.use(VueResource)

import Gallery from './components/Gallery'
import AddToGallery from './components/AddToGallery'
import EditGalleryItem from './components/EditGalleryItem'
import Reviews from './components/Reviews'
import AddReview from './components/AddReview'
import EditReview from './components/EditReview'

const router = new VueRouter({
   // mode: 'history',
    routes: [
        {
            path: '/gallery',
            name: 'home',
            component: Gallery
        },
        {
            path: '/gallery/add',
            name: 'Add Image',
            component: AddToGallery
        },
        {
            path: '/gallery/edit/:id',
            name: 'Edit Image',
            component: EditGalleryItem
        },
        {
            path: '/reviews',
            name: 'Reviews',
            component: Reviews
        },
        {
            path: '/reviews/add',
            name: 'Add Review',
            component: AddReview
        },
        {
            path: '/review/edit/:id',
            name: 'Edit Review',
            component: EditReview
        },

    ],
});
Vue.url.options.root = "http://localhost:8000/api/"

const app = new Vue({
    el: '#app',
    router,
});
