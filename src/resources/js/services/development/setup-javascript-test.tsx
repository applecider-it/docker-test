import { createApp } from "vue";
import ReactDOM from "react-dom/client";

import AppReact from "./react/AppReact";
import AppVue from "./vue/AppVue.vue";

import Swiper from 'swiper';
import 'swiper/css/bundle';
import { Autoplay, Pagination } from 'swiper/modules';

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

console.log('SlideShow setup');

const swiper = new Swiper('.swiper1', {
  modules: [Autoplay, Pagination],
  loop: true,
  speed: 1000,

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination1',
    clickable: true,
  },
});
