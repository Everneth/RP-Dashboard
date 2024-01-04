import { createApp, h } from "vue";
import { createInertiaApp, Link } from "@inertiajs/vue3";
import Layout from "./Shared/Layout";
import halfmoon from "halfmoon";

createInertiaApp({
  resolve: name => {
    require("halfmoon/css/halfmoon.min.css");
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

