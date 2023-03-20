<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        <!--                   &lt;                       -->
        <div class="col-8">
            <h1>js Theory | Syntax</h1> 

            <h3>Whitespace</h3>
            <div>
                
               <p>Whitespace in JavaScript refers to any characters that are used to create spacing in the code, such as spaces, tabs, and newlines, Carriage return (carriage return means to return to the beginning of the current line without advancing downward)These characters do not have any effect on the functionality of the code, but they can be used to improve readability and organization.</p>
               <p>JavaScript ignores extra whitespace characters, so you can use them freely to format your code in a way that makes it easier to read and understand. However, it's important to be consistent with your use of whitespace, as inconsistent indentation and spacing can make code difficult to read and understand.</p> 

            <hr>
            <hr>
            </div> 
            
            <h3>Statements</h3>
            <div>
               <p>In JavaScript, a statement is a unit of code that performs a specific action or task. Statements are typically terminated with a semicolon (;) and can include assignments, function calls, control flow statements (e.g. if-else, for loops), and more.</p>
               <p>Here are a few examples of JavaScript statements:</p>
               <ul>
                <li>x = 10; (assignment statement)</li>
                <li>console.log("Hello, world!"); (function call statement)</li>
                <li>if (x > 0) { ... } (conditional statement)</li>
                <li>for (let i = 0; i < 10; i++) { ... } (loop statement)</li>
                
               </ul>
               <p>Statements can be grouped together to form a block of code, which is typically enclosed in curly braces {}. A block of code can contain multiple statements and can be used in control flow statements and functions.</p>
               <p>It's important to note that in JavaScript, not all expressions are statements, and not all statements are expressions. Expressions are any fragment of code that can be evaluated to a value, where as statement does something.</p>
              
              
            <hr>
            <hr>
            </div>

            <h3>Blocks</h3>
            <div>
                <p>JavaScript blocks are a way to group statements together in the language. They are defined by curly braces {} and can be used to create control structures such as loops and conditionals. For example, the following code creates a for loop that counts from 0 to 9:</p>
                <pre>
                for (var i = 0; i < 10; i++) {
                    console.log(i);
                }
                </pre>
                <p>In this example, the block of code between the curly braces {} is executed repeatedly while the variable i is less than 10.</p>
                <p>JavaScript also supports block scope, which means that variables declared within a block are not accessible outside of that block.</p>
                <pre>
                {
                    let x = 1;
                }
                console.log(x); // ReferenceError: x is not defined
                </pre>
                <p>In this example, the variable x is declared within a block and is not accessible outside of that block.</p>
                              
                <hr>
                <hr>
            </div>
           


          

            <!-- <h3>sadsadas</h3>
            <div>
               
            <hr>
            <hr>
            </div> -->

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>