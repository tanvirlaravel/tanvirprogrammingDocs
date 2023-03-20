@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">Storing the information you need — Variables</h1>

<div class="row">
    <div class="col-4">
       <ul class="list-group position-fixed" id="sidebar_menu">    
       </ul>
    </div>
    <div class="col-8">
    <a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/Variables" target="_blank">MDN Link</a>

          <h2>What is a variable?</h2> 
          <p>A variable is a container for a value</p>
          <p>One special thing about variables is that they can contain just about anything — not just strings and numbers. Variables can also contain complex data and even entire functions to do amazing things. </p>
          <img src="{{ asset('img/firstSteps/boxes.png') }}" class="img-fluid" alt="">
          <hr>

          <h2>Variable types</h2>

          <ul>
              <li><strong>Numbers: </strong> <code>let myAge = 17;</code></li>
              <li><strong>Strings: </strong> <code>let dolphinGoodbye = 'So long and thanks for all the fish';</code></li>
              <li><strong>Booleans: </strong> <code>let iAmAlive = true; -----  let test = 6 < 3;</code></li>
              <li><strong>Arrays: </strong> <code>let myNameArray = ['Chris', 'Bob', 'Jim'];</code></li>
              <li><strong>Objects: </strong> <code>let dog = { name : 'Spot', breed : 'Dalmatian' };</code></li>
              
          </ul>
          <hr>

          <h2>Dynamic typing</h2>
          <p>JavaScript is a "dynamically typed language", which means that, unlike some other languages, you don't need to specify what data type a variable will contain (numbers, strings, arrays, etc).</p>
          <pre class="bg-dark py-2 text-warning">
            let myNumber = '500'; 
            typeof myNumber;   // String
            myNumber = 500; 
            typeof myNumber; // Number
          </pre>
          <hr>


          <h2>Constants in JavaScript</h2>
          <p>As well as variables, you can declare constants. These are like variables, except that:</p>
          <ul>
              <li>you must initialize them when you declare them</li>
              <li>you can't assign them a new value after you've initialized them.</li>
          </ul>
          <hr>

          <h2>When to use const and when to use let</h2>
          <p>Use const when you can, and use let when you have to.</p>
         
         
         
           

        <p class="my-5">.</p>
      
    </div>
</div>

@endsection