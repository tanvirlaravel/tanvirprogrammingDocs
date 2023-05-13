<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
           <div class="col-8">
           <h1 class="text-danger">Vue</h1>
          
            <h3>Introduction</h3>
            <p>Vue.js is a popular JavaScript framework for building interactive user interfaces. It is designed to be lightweight, easy to learn, and easy to use, and provides a number of features and tools that make it well-suited for building modern web applications.</p>            
            <hr>
            <hr>


            <h3>Declarative Rendering</h3>
            <p>Declarative rendering is a concept in Vue.js that refers to the way the framework uses templates to declaratively specify the structure of a view. In Vue.js, templates are written in HTML, and use special directives to bind data and control the flow of the application.</p>
            <pre>
            &lt;template>
            &lt;div>
                {{ message }}
            &lt;/div>
            &lt;/template>

            </pre>
            <p>In this template, the {{ message }} directive is used to bind the value of the message data property to the view. When the value of message changes, the view updates automatically to reflect the new value.</p>
            <p>Declarative rendering makes it easy for developers to build interactive, data-driven user interfaces because it separates the structure of the view from the underlying logic of the application. This makes it easy to update the view as data changes, and helps to keep the codebase organized and maintainable.</p>
            <p>Vue.js also provides a number of directives that can be used to control the flow of the application, such as v-if and v-for, which allow developers to conditionally render elements and iterate over arrays, respectively. These directives make it easy to build dynamic, interactive user interfaces without the need to write a lot of boilerplate code.</p>
           
            <hr>
            <hr>

            <h3>Reactivity / Reactive components</h3>
            <p>Vue automatically tracks JavaScript state changes and efficiently updates the DOM when changes happen.</p>
            <p>Reactive components are a type of software component that automatically updates their state and behavior in response to changes in data. In the context of web development, reactive components are often used to build interactive, data-driven user interfaces, and are typically implemented using a reactive programming library or framework.</p>
            <p>One example of a reactive programming library is Vue.js, which uses a reactive data model to automatically update the view when data changes. In Vue.js, reactive components are implemented using a template and a script, with the template defining the structure of the view and the script defining the data and behavior of the component.</p>
            <p>Vue.js uses a reactive data model, which means that when data in a component changes, the view updates automatically. This makes it easy to build dynamic, interactive user interfaces without the need to write a lot of boilerplate code.</p>
           
            <hr>
            <hr>
            
            <h3>Virtual DOM</h3>
            <p>Virtual DOM: Vue.js uses a virtual DOM (Document Object Model) to optimize rendering performance. This means that it only updates the parts of the view that have changed, rather than re-rendering the entire view every time data changes.</p>
            <hr>
            <hr>

            <h3>Single-file components</h3>
            <p>Single-file components: Vue.js allows developers to define components using single-file components, which include the template, script, and style for a component in a single .vue file. This makes it easy to organize and maintain large-scale applications.
            </p>
            <hr>
            <hr>


            <h3>Ecosystem</h3>
            <p>Ecosystem: Vue.js has a large and active community, and a number of libraries and tools that are designed to work seamlessly with Vue.js. This includes libraries for routing, state management, and more.</p>
            <hr>
            <hr>

            <h3>Progressive Framework</h3>
            <p>Vue is a framework and ecosystem that covers most of the common features needed in frontend development. But the web is extremely diverse - the things we build on the web may vary drastically in form and scale. With that in mind, Vue is designed to be flexible and incrementally adoptable. Depending on your use case, Vue can be used in different ways:</p>
            <ul>
                <li>Enhancing static HTML without a build step</li>
                <li>Embedding as Web Components on any page</li>
                <li>Single-Page Application (SPA)</li>
                <li>Fullstack / Server-Side Rendering (SSR)</li>
                <li>Jamstack / Static Site Generation (SSG)</li>
                <li>Targeting desktop, mobile, WebGL, and even the terminal</li>
            </ul>
           <hr>
           <hr>

           <h3>API Styles</h3>
           <h5>Options API</h5>
           <p>With Options API, we define a component's logic using an object of options such as data, methods, and mounted. Properties defined by options are exposed on this inside functions, which points to the component instance:</p>
           <pre>
&lt;script>
export default {
  // Properties returned from data() become reactive state
  // and will be exposed on `this`.
  data() {
    return {
      count: 0
    }
  },

  // Methods are functions that mutate state and trigger updates.
  // They can be bound as event listeners in templates.
  methods: {
    increment() {
      this.count++
    }
  },

  // Lifecycle hooks are called at different stages
  // of a component's lifecycle.
  // This function will be called when the component is mounted.
  mounted() {
    console.log(`The initial count is ${this.count}.`)
  }
}
&lt;/script>

&lt;template>
  &lt;button @click="increment">Count is: {{ count }}&lt;/button>
&lt;/template>

           </pre>
           <h5>Composition API</h5>
           <p>With Composition API, we define a component's logic using imported API functions. In SFCs, Composition API is typically used with &lt;script setup>. The setup attribute is a hint that makes Vue perform compile-time transforms that allow us to use Composition API with less boilerplate. For example, imports and top-level variables / functions declared in &lt;script setup> are directly usable in the template.</p>
           <pre>
&lt;script setup>
import { ref, onMounted } from 'vue'

// reactive state
const count = ref(0)

// functions that mutate state and trigger updates
function increment() {
  count.value++
}

// lifecycle hooks
onMounted(() => {
  console.log(`The initial count is ${count.value}.`)
})
&lt;/script>

&lt;template>
  &lt;button @click="increment">Count is: {{ count }}&lt;/button>
&lt;/template>

           </pre>

           
            <p>The Composition API is centered around declaring reactive state variables directly in a function scope and composing state from multiple functions together to handle complexity. It is more free-form and requires an understanding of how reactivity works in Vue to be used effectively. In return, its flexibility enables more powerful patterns for organizing and reusing logic.</p>

          

           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>