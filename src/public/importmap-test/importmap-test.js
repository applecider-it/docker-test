console.log("importmap-test");

import { createApp } from "vue";

console.log("createApp", createApp);

const el = document.getElementById("app");

if (el) {
  console.log("el", el);

  const App = {
    data() {
      return { message: "Hello Vue!" };
    },
    template: `<div>{{ message }}</div>`,
  };

  console.log("App", App);

  createApp(App).mount(el);
}
