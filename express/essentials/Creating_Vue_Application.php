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
               <h3>The application instance</h3>
               <p>Every Vue application starts by creating a new application instance with the createApp function:</p>
               <pre>
                   import { createApp } from 'vue'
                    // import the root component App from a single-file component.
                    import App from './App.vue'

                    const app = createApp(App)

               </pre>


           </div>
            <hr>
           <hr>

            <div>
               <h3>The Root Component</h3>
               <p>The object we are passing into createApp is in fact a component. Every app requires a "root component" that can contain other components as its children.</p>
               <p>most real applications are organized into a tree of nested, reusable components. </p>
               <pre>
                   App (root component)
                    ├─ TodoList
                    │  └─ TodoItem
                    │     ├─ TodoDeleteButton
                    │     └─ TodoEditButton
                    └─ TodoFooter
                       ├─ TodoClearButton
                       └─ TodoStatistics

               </pre>


           </div>
            <hr>
           <hr>

            <div>
               <h3>Mounting the App</h3>
               <p>An application instance won't render anything until its .mount() method is called.</p>
               <pre>
                   &lt;div id="app">&lt;/div> 
                   app.mount('#app')
               </pre>
               <p>The .mount() method should always be called after all app configurations and asset registrations are done</p>


           </div>
            <hr>
           <hr>

            <div>
               <h3>App Configurations</h3>
               <p>The application instance exposes a <code>.config</code> object that allows us to configure a few app-level options</p>
               <p>The application instance also provides a few methods for registering app-scoped assets.</p>
               <pre>
                   app.component('TodoDeleteButton', TodoDeleteButton)

               </pre>
               <p>This makes the TodoDeleteButton available for use anywhere in our app</p>


           </div>
            <hr>
           <hr>

            <div>
               <h3>Multiple application instances</h3>
               <p>The createApp API allows multiple Vue applications to co-exist on the same page, each with its own scope for configuration and global assets:</p>
               <pre>
                   const app1 = createApp({
                      /* ... */
                    })
                    app1.mount('#container-1')

                    const app2 = createApp({
                      /* ... */
                    })
                    app2.mount('#container-2')

               </pre>


           </div>
            <hr>
           <hr>

           




           </div><!-- cold-8 end -->
    </div><!-- row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>
