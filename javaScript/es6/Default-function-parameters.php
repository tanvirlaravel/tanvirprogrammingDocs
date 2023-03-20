<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Const</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>In JavaScript, a parameter has a default value of undefined. It means that if you don’t pass the arguments into the function, its parameters will have the default values of undefined.</p>
            <p>In JavaScript, you can use default function parameters to specify a default value for one or more parameters of a function. If the caller of the function does not provide a value for the parameter, the default value will be used.</p>
            <pre>
            function greet(name = 'user') {
                console.log(`Hello, ${name}!`);
            }

            greet(); // Output: "Hello, user!"
            greet('Alice'); // Output: "Hello, Alice!"


            function add(a, b = a * 2) {
            return a + b;
            }

            console.log(add(1)); // Output: 3
            console.log(add(1, 5)); // Output: 6

            </pre>          
            <p>Default function parameters can be useful for setting default values for optional arguments and for providing backward compatibility when adding new parameters to a function.</p>

            <hr>
            <pre>
            function createDiv(height = '100px', width = '100px', border = 'solid 1px red') {
                let div = document.createElement('div');
                div.style.height = height;
                div.style.width = width;
                div.style.border = border;
                document.body.appendChild(div);
                return div;
            }
            </pre>
            <p>Suppose you want to use the default values for the height and width parameters and specific border style. In this case, you need to pass undefined values to the first two parameters as follows:</p>
            <pre>
            createDiv(undefined,undefined,'solid 5px blue');

            function add(x = 1, y = x, z = x + y) {
                return x + y + z;
            }

            console.log(add()); // 4
            </pre>
            <p
            <hr>
            <hr>

            <h3>Using functions</h3>            
            <pre>
            let taxRate = () => 0.1;
            let getPrice = function( price, tax = price * taxRate() ) {
                return price + tax;
            }

            let fullPrice = getPrice(100);
            console.log(fullPrice); // 110
            </pre>
            <hr>
            <hr>


            <h3>The arguments object</h3>
            <pre>
            function add(x, y = 1, z = 2) {
                console.log( arguments.length );
                return x + y + z;
            }

            add(10); // 1
            add(10, 20); // 2
            add(10, 20, 30); // 3
            </pre>
           
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


