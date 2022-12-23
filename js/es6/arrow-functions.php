<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Arrow Function</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Rules</h3>
            <p>If the function body consists of multiple statements, you must use curly braces {} and the return keyword to return a value. </p>
            <pre class="p-3 text-white bg-dark">
            const sumAndMultiply = (x, y) => {
                const sum = x + y;
                const product = x * y;
                return [sum, product];
            }            

            ----------------------------------------------------------------
            let setColor = function (color) {
                return {value: color}
            };

            let backgroundColor = setColor('Red');
            console.log(backgroundColor.value); // "Red"

            let setColor = color => {value: color };

        Since both block and object literal use curly brackets, the JavasScript engine 
cannot distinguish between a block and an object.

To fix this, you need to wrap the object literal in parentheses as follows:

            let setColor = color => ({value: color });
            </pre>

            <p>Arrow functions are often used in combination with higher-order functions (functions that take other functions as arguments or return them as output) and with array methods such as map, filter, and reduce.</p>            
            <hr>
            <hr>

            <h3>Arrow function vs. regular function</h3>
            <ol>
                <li>First, in the arrow function, the <span class="text-danger">this</span>, arguments, super, new.target are lexical. It means that the arrow function uses these variables (or constructs) from the enclosing lexical scope.</li>
                <li></li>
            </ol>
            <hr>
            <hr>

            <h3>Code</h3>
            <pre class="p-3 text-white bg-dark">
            console.log(typeof add); // function
            console.log(add instanceof Function); // true
            </pre>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


