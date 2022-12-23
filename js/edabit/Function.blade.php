@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">Function</h1>
<p class="text-center"><a href="https://javascript.info/function-basics" target="_blank">Web Link</a></p>

<div class="row">
    <div class="col-4">
       <ul class="list-group " id="sidebar_menu">         
        </ul>
    </div>
    <div class="col-8"> 

    <h2>What is function</h2>
    <p>function allow the code which written inside of function to be called</p>
    <p>Functions are the main “building blocks” of the program</p>
    <hr>

    <h2>Purpuse of function</h2>
    <p>They allow reduce repetition. remove duplication of the same code in my diffrent place or script</p>
    <hr>

    <h2>Local variables</h2>
    <p>A variable declared inside a function is only visible inside that function.</p>
    <hr>

    <h2>Outer variables</h2>
    <p>A function can access an outer variable as well, for example:</p>
    <p>The function has full access to the outer variable. It can modify it as well.</p>
    <p>The outer variable is only used if there’s no local one.</p>
    <hr>

    <h2>Global variables</h2>
    <p>Variables declared outside of any function, such as the outer userName in the code above, are called global.</p>
    <p>Global variables are visible from any function (unless shadowed by locals).</p>
    <p>It’s a good practice to minimize the use of global variables. Modern code has few or no globals. Most variables reside in their functions. Sometimes though, they can be useful to store project-level data.</p>
    <hr>

    <h2>Parameters</h2>
    <p>We can pass arbitrary data to functions using parameters.</p>
    <pre class="bg-dark text-warning pt-3">
    function showMessage(from, text) { // parameters: from, text
        alert(from + ': ' + text);
    }

    showMessage('Ann', 'Hello!'); // Ann: Hello! (*)
    showMessage('Ann', "What's up?"); // Ann: What's up? (**)
    </pre>
    <p>When the function is called in lines (*) and (**), the given values are copied to local variables from and text. Then the function uses them.</p>
    <hr>

    <h2>Returning a value</h2>
    <p>If a function is called, but an argument is not provided, then the corresponding value becomes undefined.</p>
    <hr>

    <h2>Returning a value</h2>
    <p>The directive return can be in any place of the function. When the execution reaches it, the function stops, and the value is returned to the calling code (assigned to result above).</p>
    <p>A function with an empty return or without it returns undefined</p>
    <hr>

    <h2>Naming a function</h2>
    <p>Functions are actions. So their name is usually a verb. It should be brief, as accurate as possible and describe what the function does, so that someone reading the code gets an indication of what the function does.</p>
    <pre class="bg-dark text-warning pt-3">
    showMessage(..)     // shows a message
    getAge(..)          // returns the age (gets it somehow)
    calcSum(..)         // calculates a sum and returns the result
    createForm(..)      // creates a form (and usually returns it)
    checkPermission(..) // checks a permission, returns true/false
    </pre>
    <p>A function should do exactly what is suggested by its name, no more.</p>
    <p>Two independent actions usually deserve two functions, even if they are usually called together (in that case we can make a 3rd function that calls those two).</p>
    <h4>Ultrashort function names</h4>
    <p>Functions that are used very often sometimes have ultrashort names.</p>
    <p>For example, the jQuery framework defines a function with $. The Lodash library has its core function named _.</p>
    <p>These are exceptions. Generally function names should be concise and descriptive.</p>
    <hr>

    <h2>Functions == Comments</h2>
    <p><a href="https://javascript.info/function-basics#functions-comments" target="_blank">Read this</a></p>



  



          
         
    <p class="my-5">.</p>
    </div>
</div>

@endsection




