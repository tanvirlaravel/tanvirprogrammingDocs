@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">Arrow Function</h1>
<p class="text-center"><a href="https://www.w3schools.com/js/js_arrow_function.asp" target="_blank">Web Link</a></p>

<div class="row">
    <div class="col-4">
       <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>
    <div class="col-8"> 


    <h2>Structure</h2>
    <pre class="bg-dark pt-2 text-warning">
    let myFunction = (a, b) => a * b;

    // Before 
    hello = function() {
        return "Hello World!";
    }

    // With Arrow Function:
    hello = () => {
    return "Hello World!";
    }
    </pre>
    <hr>

    <h2>What About this?</h2>
    <p>In regular functions the <code>this</code> keyword represented the object that <strong><code>called</code></strong> the function, which could be the window, the document, a button or whatever.</p>

    <p>With arrow functions the <code>this</code> keyword always represents the object that <strong><code>defined</code></strong> the arrow function.</p>
          
         
    <p class="my-5">.</p>
    </div>
</div>

@endsection




