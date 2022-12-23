<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h1>Data</h1>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
         
           <div class="col-8">
           <h3>Introduction</h3>
           <p>In programming, a variable is a storage location in a computer's memory that is used to store a value. Variables are given a name, and the value that is stored in a variable can be accessed and modified using that name.</p>

           <p>Variables are an essential part of programming, as they allow you to store and manipulate data in your programs. They are used to store values that may change during the course of a program, such as user input or the result of a calculation.</p>

           <p>Once a variable has been declared, you can use it to store and manipulate data in your program. For example, you might use a variable to store a user's name, an account balance, or the result of a calculation.</p>


    
        <p>The assignment operator (=) used to assign value to a variable.</p>
        <pre class="text-warning bg-dark py-2">
                $txt = "Hello World!";
                $number = 10;
        </pre>

        <p> when you assign an expression to a variable, the entire value of the original expression is copied into the destination variable. This means, for instance, that after assigning one variable's value to another, changing one of those variables will have no effect on the other.</p>

        <p>PHP also offers another way to assign values to variables: assign by reference. This means that the new variable simply references (in other words, "becomes an alias for" or "points to") the original variable. Changes to the new variable affect the original, and vice versa. </p>

    <pre class="text-warning bg-dark py-2">
                $foo = 'Bob';                   // Assign the value 'Bob' to $foo
                $bar = &$foo;                   // Reference $foo via $bar.
                $bar = "My name is $bar";       // Alter $bar...
                echo $bar;                      // "My name is Bob"
                echo $foo;                      // $foo is altered too. "My name is Bob"
    </pre>
    <hr>
    <hr>

    <h3>Default values</h3>
    <ul>
        <li>booleans default to false</li>
        <li>integers and floats default to zero</li>
        <li>strings (e.g. used in echo) are set as an empty string</li>
        <li>arrays become to an empty array.</li>
    </ul> 


    <p>In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.</p>  
    <hr>
    <hr>

    <h3>Variable Lifecycle</h3>
    <p>The life cycle of a variable refers to the time frame during which a variable exists and can be accessed in a program. The life cycle of a variable begins when it is declared and initialized with a value, and it ends when the variable goes out of scope or is no longer needed.</p>
    
    <p>There are several factors that can affect the life cycle of a variable, including the type of variable, the scope of the variable, and the duration of the program.</p>
    <ol>
        <li><strong><span class="text-danger">Type of variable</span></strong>: The life cycle of a variable can be affected by the type of variable it is. For example, local variables are variables that are defined within a function and are only accessible within that function. Local variables are created when the function is called and are destroyed when the function returns. On the other hand, global variables are variables that are defined outside of any function and are accessible from anywhere in the program. Global variables are created when the program starts and are destroyed when the program ends.</li>
        <li><strong><span class="text-danger">Scope of the variable</span></strong>: The scope of a variable refers to the part of the program where the variable is visible and can be accessed. In some programming languages, variables can have different levels of scope, such as local, global, or static. The life cycle of a variable is often tied to its scope, with variables that have a wider scope having a longer life cycle.</li>

        <li><strong><span class="text-danger">Duration of the program: </span></strong>The duration of a program can also affect the life cycle of a variable. For example, in a web application, variables may be created and destroyed with each request made by a user. This means that the life cycle of a variable in a web application may be relatively short, lasting only for the duration of a single request. On the other hand, variables in a standalone program may have a longer life cycle, lasting for the duration of the entire program. </li>
        
    </ol>
    <p>Understanding the life cycle of variables is important for managing the memory and resources of a program, and for ensuring that variables are used correctly and efficiently.</p>
    <hr>
    <hr>

    <h3>Destroing variables</h3>
    <p> In PHP, you can destroy a variable by using the unset() function. This function removes the variable from memory and makes it unavailable for use in your program. Setting an existing variable to null is a way of unsetting a variable.</p>

    <pre class="text-warning bg-dark py-2">
        print isset($a); // $a is not set. Prints false. (Or more accurately prints ''.)
        $b = 0; // isset($b) returns true (or more accurately '1')
        $c = array(); // isset($c) returns true
        $b = null; // Now isset($b) returns false;
        unset($c); // Now isset($c) returns false;
    </pre>
    <p>It's important to note that destroying a variable does not necessarily mean that the value it was storing is deleted or erased. The value may still be stored in other variables or in other parts of the program, depending on how it was used. Destroying a variable simply means that the variable itself is no longer accessible.</p>
    <hr>
    <hr>

    <h3>Variable scope</h3>
    <p>In PHP, the scope of a variable refers to the part of the program where the variable is visible and can be accessed. PHP supports three types of variable scope: local, global, and static.</p>

    <ol>
        <li><strong><span class="text-danger">Local variables</span></strong>: Local variables are variables that are defined within a function and are only accessible within that function. Local variables are created when the function is called and are destroyed when the function returns.</li>
        <li><strong><span class="text-danger">Global variables</span></strong>: Global variables are variables that are defined outside of any function and are accessible from anywhere in the program. Global variables are created when the program starts and are destroyed when the program ends.</li>
        <li><strong><span class="text-danger">Static variables</span></strong>: Static variables are variables that are defined within a function and retain their value between function calls. This means that the value of a static variable is preserved when the function is called multiple times, and it is only destroyed when the program ends.</li>
    </ol>  

    
    <p>Scope can be defined as the range of availability a variable has to the program in which it is declared.</p>

   
    <h5>PHP The static Keyword</h5>
    <p>A static variable exists only in a local function scope, but it does not lose its value when program execution leaves this scope</p>
    <pre class="text-warning bg-dark py-2">
            function myTest() {
            static $x = 0;
            echo $x;
            $x++;
            }

            myTest();       // $x = 0
            myTest();       // $x = 1
            myTest();       // $x = 2
    </pre>
    <p>Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.</p>
    <p>The variable is still local to the function.</p>

        <h5>Function parameters</h5>
        <p>function is a small unit of program which can take some input in the form of parameters and does some processing and may return a some value.</p>
        <p>Function parameters are declared after the function name and inside parentheses</p>

        <pre class="text-warning bg-dark py-2">
            function multiply ($value) {
                $value = $value * 10;
                return $value;
            }
           
           $retval = multiply (10);
        </pre>
        <hr>
        <hr>

        <h3>Predefined Variables</h3>

    <p>
    PHP provides a large number of predefined variables to any script which it runs. Many of these variables, however, cannot be fully documented as they are dependent upon which server is running, the version and setup of the server, and other factors.</p>

    <p>PHP also provides an additional set of predefined arrays containing variables from the web server (if applicable), the environment, and user input. These arrays are rather special in that they are automatically global - i.e., automatically available in every scope. For this reason, they are often known as "superglobals". (There is no mechanism in PHP for user-defined superglobals.)</p>

    <ul class="list-group">
        <li><strong>Superglobals</strong>— Superglobals are built-in variables that are always available in all scopes</li>
        <li><strong>$GLOBALS</strong>References all variables available in global scope</li>
        <li><strong>$_SERVER </strong>— Server and execution environment information</li>
        <li><strong>$_GET </strong>— HTTP GET variables</li>
        <li><strong>$_POST</strong>— HTTP POST variables</li>
        <li><strong>$_FILES </strong>— HTTP File Upload variables</li>
        <li><strong>$_REQUEST </strong>— HTTP Request variables</li>
        <li><strong>$_SESSION </strong>— Session variables</li>
        <li><strong>$_ENV </strong>— Environment variables</li>
        <li><strong>$_COOKIE </strong> — HTTP Cookies</li>
        <li><strong>$php_errormsg </strong> — The previous error message</li>
        <li><strong>$http_response_header </strong> — HTTP response headers</li>
        <li><strong>$argc </strong>— The number of arguments passed to script</li>
        <li><strong>$argv </strong>— Array of arguments passed to script</li>
    </ul>

    <p><a href="https://www.php.net/manual/en/reserved.variables.php" class="text-danger" target="_blank">Link</a></p>
    <hr>
    <hr>

    <h3>Variables From External Sources </h3>

    <h5>HTML Forms (GET and POST) </h5>
    <p>When a form is submitted to a PHP script, the information from that form is automatically made available to the script. </p>
    <p>In <code>POST methods</code> There are only two ways to access data from your HTML forms.</p>
    <pre class="text-warning bg-dark py-2">
        echo $_POST['username'];
        echo $_REQUEST['username'];
</pre>

<p class="text-dark bg-info px-5 py-1">
Dots and spaces in variable names are converted to underscores. For example &lt;input name="a.b" /&gt; becomes $_REQUEST["a_b"].</p>

<h5>HTTP Cookies</h5>
<p>Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. </p>
<ul class="list-group">
   <li><code> setcookie()</code></li>
   <li><code> $_COOKIE</code></li>
   <li><code> $_REQUEST</code></li>
</ul>




           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>