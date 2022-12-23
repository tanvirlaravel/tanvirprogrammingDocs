@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">E</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

        <div class="col-md-9">
         
            <h2>Execution context (EC)</h2>          
            <p>Execution context (EC) is defined as the environment in which the JavaScript code is executed. By environment, I mean the value of this, variables, objects, and functions JavaScript code has access to at a particular time.</p>
<hr>
            

<h2>Global execution context (GEC)</h2>
            <p>This is the default execution context in which JS code start its execution when the file first loads in the browser. All of the global code i.e. code which is not inside any function or object is executed inside the global execution context. GEC cannot be more than one because only one global environment is possible for JS code execution as the JS engine is single threaded.</p>

            <hr>
            <h2>Functional execution context (FEC)</h2>
           
            <p> Functional execution context is defined as the context created by the JS engine whenever it finds any function call. Each function has its own execution context. It can be more than one. Functional execution context has access to all the code of the global execution context though vice versa is not applicable. While executing the global execution context code, if JS engine finds a function call, it creates a new functional execution context for that function. In the browser context, if the code is executing in strict mode value of this is undefined else it is window object in the function execution context.</p>

            <hr>
            <h2 id="Eval">Eval</h2>
           
            <p> Eval: Execution context inside eval function.</p>

            <p class="my-5">.</p>
          </div>
      </div>
</div>
@endsection