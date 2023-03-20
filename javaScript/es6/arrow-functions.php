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
                <li>First, in the arrow function, the <code>this</code>, <code>arguments</code>, <code>super</code>, <code>new.target</code> are lexical. It means that the arrow function uses these variables (or constructs) from the enclosing lexical scope.</li>
                <li>Second, an arrow function cannot be used as a function constructor. If you use the new keyword to create a new object from an arrow function, you will get an error.</li>
            </ol>
            <hr>
            <hr>

            <h3>JavaScript arrow functions and this value</h3>
            <p>In JavaScript, a new function defines its own this value. However, it is not the case for the arrow function.</p>
            <p>One key difference between arrow functions and traditional functions is the way that the this keyword is handled. In traditional functions, the value of this is determined by how the function is called. In arrow functions, however, the value of this is lexically scoped, which means that it is determined by the surrounding context.</p>
            <pre>
            const obj = {
            x: 10,
            y: 20,
            foo: function() {
                console.log(this.x + this.y);
            },
            bar: () => console.log(this.x + this.y)
            };

            obj.foo(); // Outputs: 30
            obj.bar(); // Outputs: NaN (this.x and this.y are undefined in the global scope)

            </pre>
            <p>In this example, the foo function logs the sum of x and y because this refers to the obj object inside the function. The bar function, however, logs NaN because this refers to the global object inside the arrow function, and x and y are not defined in the global scope.</p>
            <p>Arrow functions can be useful in situations where you want to preserve the value of this from the surrounding context, but they can also be confusing if you are not familiar with the way they handle this. It is important to understand how arrow functions behave in order to use them effectively in your code.</p>

            <h3>Code</h3>
            <pre class="p-3 text-white bg-dark">
            console.log(typeof add); // function
            console.log(add instanceof Function); // true
            </pre>
            <hr><hr>

            <h3>When You Should Not Use Arrow Functions</h3>
            <p>An arrow function doesn’t have its own this value and the arguments object. Therefore, you should not use it as an <code>event handler</code>, <code>a method of an object literal</code>, <code>a prototype method</code>, or when you have a function that uses the arguments object.</p>
            <h5>1) Event handlers</h5>
            <pre>
            username.addEventListener('keyup', () => {
                greeting.textContent = 'Hello ' + this.value;
            });

            Hello undefined
            </pre>
            <p>In the above example, the this in arrow function references the global object.In the web browser, the global object is window. The window object doesn’t have the value property. Therefore, the JavaScript engine adds the value property to the window object and sets its values to undefined.</p>

            <h5>1) Event handlers</h5>
            <pre>
            username.addEventListener('keyup', () => {
                greeting.textContent = 'Hello ' + this.value;
            });

            Hello undefined
            </pre>
            <p>In the above example, the this in arrow function references the global object.In the web browser, the global object is window. The window object doesn’t have the value property. Therefore, the JavaScript engine adds the value property to the window object and sets its values to undefined.</p>

            <h5>1) Event handlers</h5>
            <pre>
            username.addEventListener('keyup', () => {
                greeting.textContent = 'Hello ' + this.value;
            });

            Hello undefined
            </pre>
            <p>In the above example, the this in arrow function references the global object.In the web browser, the global object is window. The window object doesn’t have the value property. Therefore, the JavaScript engine adds the value property to the window object and sets its values to undefined.</p>

            <h2>Later</h2>
            <a href="https://www.javascripttutorial.net/es6/when-you-should-not-use-arrow-functions/">Doc</a>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


