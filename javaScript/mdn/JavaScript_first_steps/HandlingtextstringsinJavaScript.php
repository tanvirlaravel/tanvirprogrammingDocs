<?php include_once '../../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>Handling text — strings in JavaScript</h1> 

                      

            <h3>Intro</h3>
            <p> strings — this is what pieces of text are called in programming.</p>
            <p>common things that you really ought to know about strings, such as creating strings, escaping quotes in strings, and joining strings together.</p>
            <div>
               
            <hr>
            <hr>
            </div>

             <h3>The power of words</h3>
             <p><a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/Strings#the_power_of_words" target="_blank">MDN Docs</a></p>
            <div>
               
            <hr>
            <hr>
            </div>

             <h3>Strings — the basics</h3>
             <code>const badString1 = This is a test;</code>
             <p>These lines don't work because any text without quotes around it is assumed to be a variable name, property name, a reserved word, or similar. If the browser can't find it, then an error is raised (e.g. "missing; before statement"). If the browser can see where a string starts, but can't find the end of the string, as indicated by the 2nd quote, it complains with an error (with "unterminated string literal"). If your program is raising such errors, then go back and check all your strings to make sure you have no missing quote marks.</p>
            <div>
               
            <hr>
            <hr>
            </div>

             <h3>Concatenating strings</h3>
             <p>Concatenate just means "join together".</p>
             <code>const greeting = `Hello, ${name}`;</code>
             <pre>
                 const greeting = "Hello";
                const name = "Chris";
                console.log(greeting + ", " + name); // "Hello, Chris"


However, template literals usually give you more readable code:


                const greeting = "Hello";
                const name = "Chris";
                console.log(`${greeting}, ${name}`); // "Hello, Chris"

             </pre>
            <div>
               
            <hr>
            <hr>
            </div>

             <h3>Numbers vs. strings</h3>
             <pre>  
const myNum2 = 123;
const myString2 = myNum2.toString();
console.log(typeof myString2);

             </pre>
            <div>
               
        

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../../inc/footer.php'; ?>