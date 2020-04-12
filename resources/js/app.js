window.Vue = require('vue');

//Vue Particles
import VueParticles from "vue-particles";
Vue.use(VueParticles);

//Bootstrap JS
require('./bootstrap');

//Vue Router 
require('./router');

$(document).ready(function() {
    $('#summernote').summernote({
        tabsize: 2,
        height: 400
    }); 
});
