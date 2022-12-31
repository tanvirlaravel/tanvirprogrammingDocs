<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
           <div class="col-8">
           <h1 class="text-danger">Single file components</h1>
          
            <h3>Introduction</h3>
            <p>Single-file components are a feature of some modern web development frameworks and libraries that allow developers to define a component in a single file, rather than splitting the component's logic and template into separate files. This can make it easier to organize and maintain components, especially in larger applications.</p>
            <pre>
            &lt;template>
            &lt;div>
                {{ message }}
            &lt;/div>
            &lt;/template>

            &lt;script>
            export default {
            data() {
                return {
                message: 'Hello, world!',
                };
            },
            };
            &lt;/script>

            &lt;style>
            div {
            color: red;
            }
            &lt;/style>

            </pre> 
            <p>In this example, the component's template, script, and styles are all defined in a single file, using special tags to distinguish between the different parts of the component. This makes it easy to see all of the component's logic and styles in a single place, which can be helpful for maintaining and debugging the component.</p>           
            <p>Single-file components are a convenient way to organize and maintain components in Vue.js and other frameworks that support them, and can be particularly useful for building larger, more complex applications.</p>
            <hr>
            <hr>

          

          

           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>