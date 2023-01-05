<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
           <div class="col-8">
           <h1 class="text-danger">State</h1>
          
            <h3>Defination</h3>
            <p>In Vue.js, the "state" of a component refers to the data or variables that determine the component's behavior and render the component's view. The state of a component is often referred to as the component's "data model."</p> 
            
            <p>In Vue.js, you can define the state of a component by declaring data properties on the component's instance. For example:.</p>
            <pre>
            new Vue({
                data: {
                    message: 'Hello, world!',
                    count: 0
                }
            });

            </pre>

            <p>In this example, the component has two state properties: message and count. These properties can be accessed and modified within the component's template, methods, and computed properties.</p>
            <p>It's important to note that the state of a component should only be modified through the component's methods, and not directly. This helps to ensure that the component's view is always in sync with its state and that any changes to the state are properly tracked and can be reactive.</p>
            <hr>
            <hr>




           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>