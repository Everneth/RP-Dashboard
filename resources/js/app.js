import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import Layout from "./Shared/Layout";
import halfmoon from "halfmoon";

createInertiaApp({
  resolve: name => {
    let page = require(`./Pages/${name}`).default;

    /*
  Or,
  Include the following (no variables, supports IE11):*/
  require("halfmoon/css/halfmoon.min.css");


// Import JS library
//let halfmoon = require("halfmoon");

;

    if (page.layout === undefined) {
      page.layout = Layout;
    }

    return page;
  },

  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Link", Link)
      .component("Head", Head)
      .mount(el);
  },

  title: title => `My App - ${title}`
});

InertiaProgress.init();
