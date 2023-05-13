<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div><!-- cold-4 end -->

           <div class="col-8">
           <h2 class="text-info">Creating a Vue Application</h2>


           
            <div>
               <h3>Listening to Events</h3>
               <p>The handler value can be one of the following:</p>
               <ol>
                   <li>Inline handlers: Inline JavaScript to be executed when the event is triggered (similar to the native onclick attribute).</li>
                   <li>Inline handlers: Inline JavaScript to be executed when the event is triggered (similar to the native onclick attribute).</li>
               </ol>
           </div>
           <hr>
           <hr>

            <div>
               <h3>Inline Handlers</h3>
               <pre>
                   const count = ref(0)

                   &lt;button @click="count++">Add 1&lt;/button>
                    &lt;p>Count is: {{ count }}&lt;/p>
               </pre>
           </div>
           <hr>
           <hr>

            <div>
               <h3>Method Handlers</h3>
               <p>A method handler automatically receives the native DOM Event object that triggers it - in the example above, we are able to access the element dispatching the event via event.target.tagName.</p>
           </div>
           <hr>
           <hr>

           <div>
               <h3>Method vs. Inline Detection</h3>
               <p>The template compiler detects method handlers by checking whether the v-on value string is a valid JavaScript identifier or property access path. For example, foo, foo.bar and foo['bar'] are treated as method handlers, while foo() and count++ are treated as inline handlers.</p>
           </div>
           <hr>
           <hr> 

            <div>
               <h3>Calling Methods in Inline Handlers</h3>
               <p><a href="https://vuejs.org/guide/essentials/event-handling.html#calling-methods-in-inline-handlers" target="_blank">Doc's</a></p>
           </div>
           <hr>
           <hr>

            <div>
               <h3>Accessing Event Argument in Inline Handlers</h3>
               <pre>
&lt;!-- using $event special variable -->
&lt;button @click="warn('Form cannot be submitted yet.', $event)">
  Submit
&lt;/button>

&lt;!-- using inline arrow function -->
&lt;button @click="(event) => warn('Form cannot be submitted yet.', event)">
  Submit
&lt;/button>


function warn(message, event) {
  // now we have access to the native event
  if (event) {
    event.preventDefault()
  }
  alert(message)
}

               </pre>
           </div>
           <hr>
           <hr>
           <div>
               <h3>Event Modifiers</h3>
               <p><a href="https://vuejs.org/guide/essentials/event-handling.html#event-modifiers" target="_blank">Doc's</a></p>
           </div>
           <hr>
           <hr>

            <div>
               <h3>Key Modifiers</h3>
               <p><a href="https://vuejs.org/guide/essentials/event-handling.html#key-modifiers" target="_blank">Doc's</a></p>
           </div>
           <hr>
           <hr>

            <div>
               <h3>Mouse Button Modifiers</h3>
               <p><a href="https://vuejs.org/guide/essentials/event-handling.html#mouse-button-modifiers" target="_blank">Doc's</a></p>
           </div>
           <hr>
           <hr>



           </div><!-- cold-8 end -->
    </div><!-- row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>
