import Vue from 'vue'
import {createInertiaApp} from '@inertiajs/inertia-vue'
import {InertiaProgress} from '@inertiajs/progress'
import {BootstrapVue, IconsPlugin} from 'bootstrap-vue'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({el, App, props}) {
        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
})
InertiaProgress.init()

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
