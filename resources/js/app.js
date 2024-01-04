import { createApp, h } from "vue";
import { createInertiaApp, Link } from "@inertiajs/vue3";
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import Layout from "/resources/js/Shared/Layout.vue";
import "halfmoon/css/halfmoon.min.css";

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || Layout
    return page
  },
  progress: {
    color: '#29d'
  },

  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Link", Link)
      .mount(el);
  },

  title: title => `My App - ${title}`
});

