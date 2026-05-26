import { createApp } from "vue";
import ReactDOM from "react-dom/client";

import AppReact from "./react/AppReact";
import AppVue from "./vue/AppVue.vue";

let el;

el = document.getElementById("vue");
if (el) {
  const all = JSON.parse(el.dataset.all!);
  console.log("vue", { all });
  createApp(AppVue, { sampleData: all.sampleData }).mount(el);
}

el = document.getElementById("react");
if (el) {
  const all = JSON.parse(el.dataset.all!);
  console.log("react", { all });
  ReactDOM.createRoot(el).render(<AppReact sampleData={all.sampleData} />);
}
