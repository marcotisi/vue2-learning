/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('task-list', {
  template: `
    <div>
        <task v-for="task in tasks">{{ task.description }}</task>
    </div>
   `,

  data() {
    return {
      tasks: [
        {description: 'Take the dog out', completed: true},
        {description: 'Wash the dishes', completed: true},
        {description: 'Finish this lesson', completed: false},
        {description: 'Cook the dinner', completed: false}
      ]
    }
  }
});

Vue.component('task', {
  template: '<li><slot></slot></li>'
});

Vue.component('message', {
  props: ['title', 'body'],
  template: `
    <article class="message">
        <div class="message-header">
            <p>{{ title }}</p>
            <button class="delete" aria-label="delete"></button>
        </div>
        <div class="message-body">
            {{ body }}
        </div>
    </article>
  `
});

const app = new Vue({
  el: '#app'
});
