<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>

      
    <div class="row">
           <div class="col-3">
            <a href="#f" class="p-2 display-4 d-inline-block bg-dark text-warning">F</a>
            <a href="#h" class="p-2 display-4 d-inline-block bg-dark text-warning">H</a>
            <a title="Scope" href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">S</a>
            <a href="#v" class="p-2 display-4 d-inline-block bg-dark text-warning">V</a>
           </div> 
           <div class="col-9">
            <! 
            ================
            Facade 
            ================ 
            -->
            <section class="Facade">
            <h1 id="f">F</h1> <a href="#facade">Facade</a>
            <hr><hr>
            <h3 id="Hoisting">Facade</h3>
            <p>In Laravel, a facade is a class that provides a <strong><span class="text-danger">static interface</span></strong> to a service or functionality in the application's underlying container. Facades are used to provide a simple, intuitive interface for interacting with complex systems in the application, such as the database, cache, or logging systems.</p>
            <pre class="bg-dark text-white p-2">
                use Illuminate\Support\<span class="text-danger">Facades</span>\DB;

                DB::table('users')->get();
            </pre>
           


            
            <a href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">Top</a>
            </section>


           <! 
            ================
            Hoisting 
            ================ 
            -->
            <section class="Hoisting">
            <h1 id="h">H</h1> <a href="#variable">Hoisting</a>
            <hr><hr>
            <h3 id="Hoisting">Hoisting</h3>
           


            
            <a href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">Top</a>
            </section>
            
           <! 
           ================
                Scope 
            ================ 
            -->
            <section class="scope">
            <h1 id="s">S</h1> <a href="#scope">Scope</a>
            <hr><hr>
            <h3 id="scope">Scope</h3>
           
            <p>Scope determines the accessibility (visibility) of variables.</p>
            <p>The scope is the current context of execution in which values and expressions are "visible" or can be referenced. If a variable or expression is not in the current scope, it will not be available for use. Scopes can also be layered in a hierarchy, so that child scopes have access to parent scopes, but not vice versa.</p>
            <p>Scope refers to the availability of variables and functions in certain parts of the code.</p>

            <p>JavaScript types of scope:</p>

            <ul>   
                <li>Global scope: The default scope for all code running in script mode.</li>
                <li>Module scope: The scope for code running in module mode.</li>
                <li>Function scope: The scope created with a function.</li>
                <span>...In addition, variables declared with let or const can belong to an additional scope:</span>
                <li> Block scope: The scope created with a pair of curly braces (a block). </li>
            </ul>

            <p>In JavaScript, objects and functions are also variables.</p>
            <p>Scope determines the accessibility of variables, objects, and functions from different parts of the code.</p>

            <h5>Global Scope</h5>
            <p>Variables declared Globally (outside any function) have Global Scope.</p>
            <p>Global variables can be accessed from anywhere in a JavaScript program.</p>
            <p>Variables declared with var, let and const are quite similar when declared outside a block.</p>

            <h5>Function or Local scope</h5>
            <p>A variable can also have a local scope, i.e it can only be accessed within a function.</p>
            <p>A function creates a scope, so that (for example) a variable defined exclusively within the function cannot be accessed from outside the function or within other functions.</p>

            <h5>Block Scope</h5>
            Blocks only scope let and const declarations, but not var declarations.
            <pre class="text-white bg-dark p3">
            {
                var x = 1;
            }
            console.log(x); // 1
            {
                const x = 1;
            }
            console.log(x); // ReferenceError: x is not defined
            </pre>

            <h5>Module scope</h5>
            <p>Later</p>

            <p>Points to Remember</p>
            <ol>
                <li>JavaScript has global scope and local scope.</li>
                <li>Variables declared and initialized outside any function become global variables.</li>
                <li>Variables declared and initialized inside function becomes local variables to that function.</li>
                <li>Variables declared without var keyword inside any function becomes global variables automatically.</li>
                <li>Global variables can be accessed and modified anywhere in the program.</li>
                <li>Local variables cannot be accessed outside the function declaration.</li>
                <li>Global variable and local variable can have same name without affecting each other.</li>
                <li>JavaScript does not allow block level scope inside { } brackets.</li>
                
            </ol>

            <a href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">Top</a>
            </section>

            <! 
            ================
                Variable 
            ================ 
            -->
            <section class="variable">
            <h1 id="v">V</h1> <a href="#variable">Variable</a>
            <hr><hr>
            <h3 id="variable">Variable</h3>
            <p>A variable is a container for a value, like a number we might use in a sum, or a string that we might use as part of a sentence.</p>


            
            <a href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">Top</a>
            </section>
           




           </div>     
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>