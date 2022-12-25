<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    
    <h1><a href="<?= $rool_url ?>defination/defination.php">Defination</a>/A</h1>     
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">

           <!-- 
                ##########################################################################  
            -->
           <div class="hide show">
           <h3>Anonymous function (php)</h3>
            <p> In PHP, anonymous functions, also known as closures, are functions without a name. They can be stored as variables, passed as arguments to other functions, and returned as values from functions.</p>
            <pre>
            $plusTwo = function($x) {
                return $x + 2;
            };

            echo $plusTwo(3); // prints 5

            </pre>
            <p>Anonymous functions can also be created using the use keyword to bind variables from the parent scope to the anonymous function:</p>
            <pre>
            $plusNum = 2;

            $plusTwo = function($x) use ($plusNum) {
                return $x + $plusNum;
            };

            echo $plusTwo(3); // prints 5

            </pre>
            <p>Anonymous functions are often used in PHP as callbacks, for example with array functions such as array_map and array_filter.</p>
            <pre>
            $numbers = [1, 2, 3, 4, 5];

            $filtered = array_filter($numbers, function($x) {
                return $x % 2 == 0;
            });

            print_r($filtered); // prints [2, 4]
            </pre>
            <hr>
            <hr>
           </div>
             <!-- 
                ##########################################################################  
            -->

             <!-- 
                ##########################################################################  
            -->
           <div class="hide show">
           <h3>Anonymous function (js)</h3>
            <p> In JavaScript, an anonymous function is a function without a name. It can be stored as a variable, passed as an argument to other functions, and returned as a value from functions.</p>
        
            <pre>
            const plusTwo = function(x) {
                return x + 2;
            };

            console.log(plusTwo(3)); // prints 5
            </pre>
            <p>Anonymous functions can also be created using the arrow function syntax, which is a shorter way to define a function:</p>
            <pre>
            const plusTwo = (x) => x + 2;

            console.log(plusTwo(3)); // prints 5
            </pre>
            <p>Anonymous functions are often used in JavaScript as callbacks, for example with array methods such as map and filter.</p>            
            <hr>
            <hr>
           </div>
             <!-- ###########################################################       -->
             <h3>Aggregate functions</h3>
             <p>In database management, aggregate functions are functions that perform a calculation on a set of values and return a single result. Aggregate functions are often used to perform statistical analysis or to generate summary information about a dataset.</p>
             <pre>
             AVG(): Calculates the average of a set of values.
            COUNT(): Counts the number of rows in a table or the number of non-NULL values in a set of values.
            MAX(): Finds the maximum value in a set of values.
            MIN(): Finds the minimum value in a set of values.
            SUM(): Calculates the sum of a set of values.
             </pre>

           
        
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>