<?php include_once '../../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>Functions — reusable blocks of code</h1> 

            
            <h3>intro</h3>
            <div>             
                <p>functions, which allow you to store a piece of code that does a single task inside a defined block, and then call that code whenever you need it using a single short command — rather than having to type out the same code multiple times.</p>
            
            </div>  
            <hr>
            <hr>  

             <h3>Invoking functions</h3>
            <div>             
                <p>actually use a function after it has been defined, you've got to run — or invoke — it. This is done by including the name of the function in the code somewhere, followed by parentheses.</p>
                <p>Note: This form of creating a function is also known as function declaration. It is always hoisted, so you can call function above function definition and it will work fine.</p>
            
            </div>  
            <hr>
            <hr>  

             <h3>Function parameters</h3>
            <div>             
                <p>Some functions require parameters to be specified when you are invoking them — these are values that need to be included inside the function parentheses, which it needs to do its job properly.</p>
                <p>The browser's built-in string replace() function however needs two parameters — the substring to find in the main string, and the substring to replace that string with:</p>
                <pre>
const myText = 'I am a string';
const newString = myText.replace('string', 'sausage');

                </pre>
                <h5>Optional parameters</h5>
                <p>Sometimes parameters are optional — you don't have to specify them. If you don't, the function will generally adopt some kind of default behavior. As an example, the array join() function's parameter is optional:</p>
                <pre>
                const myArray = ['I', 'love', 'chocolate', 'frogs'];
                const madeAString = myArray.join(' ');
                console.log(madeAString);
                // returns 'I love chocolate frogs'

                const madeAnotherString = myArray.join();
                console.log(madeAnotherString);
                // returns 'I,love,chocolate,frogs'

                </pre>
                <p></p>
            
            </div>  
            <hr>
            <hr>  

             <h3>Anonymous functions and arrow functions</h3>
            <div>             
                <p>you can also create a function that doesn't have a name:</p>
                <pre>
                    (function () {
                      alert('hello');
                    })

                </pre>
                <p>This is called an anonymous function, because it has no name. You'll often see anonymous functions when a function expects to receive another function as a parameter. In this case the function parameter is often passed as an anonymous function.</p>
                <p>Note: This form of creating a function is also known as function expression. Unlike function declaration, function expressions are not hoisted.</p>
                <h5>Anonymous function example</h5>
                <p>Instead of defining a separate logKey() function, you can pass an anonymous function into addEventListener():</p>
                <pre>
                    textBox.addEventListener('keydown', function(event) {
                      console.log(`You pressed "${event.key}".`);
                    });

                </pre>
            
            </div>  
            <hr>
            <hr>  

             <h3>Function scope and conflicts</h3>
            <div>             
                <p><a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Building_blocks/Functions#function_scope_and_conflicts" target="_blank">MDN Docs</a></p>
            
            </div>  
            <hr>
            <hr>  


            <!-- <h3>sadsadas</h3>
            <div>
               
            <hr>
            <hr>
            </div> -->

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../../inc/footer.php'; ?>