<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div><!-- cold-4 end -->

           <div class="col-8">
           <h2 class="text-info">Template Syntax</h2>

           <div>
               <h3>Text Interpolation</h3>
               <pre>
                   &lt;span>Message: {{ msg }}&lt;/span>
               </pre>
              
           </div>
           <hr>
           <hr>


            <div>
               <h3>Raw HTML</h3>
               <pre>
                   &lt;p>Using text interpolation: {{ rawHtml }}&lt;/p>
                    &lt;p>Using v-html directive: &lt;span v-html="rawHtml">&lt;/span>&lt;/p>
               </pre>
               <p>Directives are prefixed with v- to indicate that they are special attributes provided by Vue, and as you may have guessed, they apply special reactive behavior to the rendered DOM. Here, we're basically saying "keep this element's inner HTML up-to-date with the rawHtml property on the current active instance."</p>
              
           </div>
           <hr>
           <hr>



            <div>
               <h3>Attribute Bindings</h3>
               <pre>
                   &lt;div v-bind:id="dynamicId">&lt;/div>
                   &lt;div :id="dynamicId">&lt;/div>
               </pre>
              
           </div>
           <hr>
           <hr>


            <div>
               <h3>Boolean Attributes</h3>
               <p>Boolean attributes are attributes that can indicate true / false values by their presence on an element.</p>
               <pre>
                   &lt;button :disabled="isButtonDisabled">Button&lt;/button>
               </pre>
              
           </div>
           <hr>
           <hr>

            <div>
               <h3>Dynamically Binding Multiple Attributes</h3>
               <pre>
                   const objectOfAttrs = {
                      id: 'container',
                      class: 'wrapper'
                    }

                    &lt;div v-bind="objectOfAttrs">&lt;/div>
               </pre>
              
           </div>
           <hr>
           <hr>


            <div>
               <h3>Using JavaScript Expressions</h3>
               <pre>

                   {{ number + 1 }}

                    {{ ok ? 'YES' : 'NO' }}

                    {{ message.split('').reverse().join('') }}

                    &lt;div :id="`list-${id}`">&lt;/div>

               </pre>

               <h5>Expressions Only</h5>
               <pre>
                   the following will NOT work:
                   <!-- this is a statement, not an expression: -->
                    {{ var a = 1 }}

                    <!-- flow control won't work either, use ternary expressions -->
                    {{ if (ok) { return message } }}
               </pre>

               <h5>Calling Functions</h5>
               <pre>
           It is possible to call a component-exposed method inside a binding expression:
           &lt;span :title="toTitleDate(date)">
              {{ formatDate(date) }}
            &lt;/span>
               </pre>
              
           </div>
           <hr>
           <hr>

            <div>
               <h3>Directives</h3>
               <ul>
                <li>&lt;a :href="url"> ... &lt;/a></li>
               
                   <li>v-if: Conditionally render an element based on a provided expression.</li>
                   <li>v-show: Toggle the visibility of an element based on a provided expression.</li>
                   <li>v-for: Render a list of items based on an array or object.</li>
                   <li>v-bind: Bind HTML attributes to a component or element.</li>
                   <li>v-model: Create a two-way binding between a form input and a data property.</li>
                   <li>v-on: Attach event listeners to an element or component.</li>
                   <li>v-text: Set the element's text content.</li>
                   <li>v-html: Render HTML content inside an element.</li>
                   <li>v-slot: Define named slots for content insertion in components.</li>
                   <li>v-once: Render an element or component only once.</li>
                   <li>v-pre: Skip compilation for an element or component.</li>
                   <li>v-cloak: Hide the element until the component has finished compiling.</li>
                  
               </ul>
              
           </div>
           <hr>
           <hr>

           <div>
               <h3>Dynamic Arguments</h3>
               <p>It is also possible to use a JavaScript expression in a directive argument by wrapping it with square brackets:</p>
               <pre>

&lt;a v-bind:[attributeName]="url"> ... &lt;/a>

<!-- shorthand -->
&lt;a :[attributeName]="url"> ... &lt;/a>

Here, attributeName will be dynamically evaluated as a JavaScript expression, and its 
evaluated value will be used as the final value for the argument. 

               </pre>

               <h5>Dynamic Argument Value Constraints</h5>
               <h1>Later</h1>
           </div>
           




           </div><!-- cold-8 end -->
    </div><!-- row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>
