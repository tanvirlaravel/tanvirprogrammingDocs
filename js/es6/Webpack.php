<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Webpack</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>In JavaScript, a module is a piece of code that is executed within its own scope, rather than in the global scope. This means that variables, functions, and objects defined within the module are not accessible from outside the module, unless they are explicitly exported using the export keyword. Modules are commonly used in JavaScript to organize and reuse code, and to help keep the global namespace clean.</p>
           <pre>
// myModule.js

const myFunction = () => {
  console.log('This function is defined within the module');
}

export { myFunction };

To use this module in another file, you can import it using the import keyword:

// main.js

import { myFunction } from './myModule';

myFunction(); // Output: "This function is defined within the module"


           </pre>
            <hr>
            <hr>

            <h3>JavaScript Script attribute</h3>
           
            <pre>
            <script type="module" src="./app.js"></script>
            </pre>
           
            <hr>
            <hr>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


