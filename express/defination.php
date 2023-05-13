<?php include_once '../inc/header.php'; ?>
<div class="container">

    <?php include_once 'nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <a href="#c" class="p-2 display-4 d-inline-block bg-dark text-warning ">C</a>
            <a href="#r" class="p-2 display-4 d-inline-block bg-dark text-warning ">R</a>
           </div>
           <div class="col-8">

           <!
            ================
            ccccccccccccccccccccccccccccccccc
            ================
            -->
            <section class="eager load">
            <h1 id="c">C</h1> <a href="#ref">computed properties</a>   

            <h3>computed properties</h3>
            <p>computed properties are reactive data properties that are derived from other reactive data properties. Computed properties are used to calculate a value based on other data properties, and they are updated automatically when their dependencies change.</p>
            <p>To define a computed property, you can use the computed() function provided by Vue. The function takes an object where the keys are the names of the computed properties and the values are the corresponding getter functions.</p>
            <pre>
            import { computed } from 'vue'

            computed(() => {
              message: {
                get() {
                  return this.message.length
                }
              }
            })

            &lt;template>
              &lt;div>
                Message length: {{ message }}
              &lt;/div>
            &lt;/template>
            </pre>
            <p>It's worth noting that computed properties are read-only by default, which means that you cannot set their value directly. You can make a computed property writable by providing a setter function.</p>

            <pre>
            computed(() => {
              message: {
                get() {
                  return this.message.length
                },
                set(val) {
                  this.message = val
                }
              }
            })

            </pre>
            <p>Also, computed properties are cached based on their dependencies, which means that their value is only recalculated when one of their dependencies changes. This can lead to better performance, since the computed property does not need to be recalculated on every render.</p>
            <p>In Vue 4, you can use the computed function to create a computed property, as well as the computedRef function to create computed properties that are also refs, this way you can use them as a reactive source.</p>
            

            <a href="#c" class="p-1 d-inline-block bg-dark text-warning  float-right">C Top</a>
            </section>
            <hr>
            <hr>


           <!
            ================
            rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr
            ================
            -->
            <section class="eager load">
            <h1 id="r">R</h1> <a href="#ref">ref()</a>
            |  <a href="#reactive">reactive()</a>

            <hr>
            <h5>reactive data</h5>           
            <p>In Vue.js, reactive data is data that can be used in the templates and can be updated automatically when its underlying value changes. Vue uses a system called reactivity to track changes in reactive data and updates the components that use it accordingly.</p>  
          </hr>

            <h3 id="ref">ref()</h3>
            <p>a ref is a way to create a reactive reference to a value or a piece of data. It can be used to access the underlying value of a reactive data property, or to create a new reactive data property. To create a ref, you can use the ref() function provided by Vue. Once created, you can use the .value property to access the underlying value of the ref.</p>           
            <pre>
            created() {
              this.messageRef = ref('Hello World')
            }

            setup() {
              const messageRef = ref('Hello World')
              return {
                messageRef
              }
            }


            &lt;template>
              &lt;div>
                {{ messageRef.value }}
              &lt;/div>
            &lt;/template>
            </pre>
            <hr>         
            
            
            <h3>reactive()</h3>
            <p>In Vue.js, the reactive() function is used to create a reactive object that can be used as data for a component. It is available in Vue 3 and later versions. The reactive() function takes an object as an argument, and returns a reactive version of that object.</p>
            <pre>
            import { reactive } from 'vue'
            const state = reactive({ count: 0 })

            </pre>
            <p>The returned object will be reactive, meaning that any changes made to its properties will be tracked by Vue, and any components that depend on those properties will be updated accordingly.</p>
            <pre>
            &lt;template>
              &lt;div>
                {{ state.count }}
              &lt;/div>
            &lt;/template>

            state.count++
            or 
            set(state, 'count', state.count + 1)


            </pre>

            <a href="#r" class="p-1 d-inline-block bg-dark text-warning  float-right">R Top</a>
            </section>
            <hr>
            <hr>



           </div>
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>
