@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">General asynchronous programming concepts</h1>



<div class="row">
    <div class="col-4">
       <ul class="list-group" id="sidebar_menu">    
       </ul>
    </div>
    <div class="col-8">
    <a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Asynchronous/Concepts" target="_blank">MDN Link</a>


   <h2>Asynchronous?</h2>
   <p>Normally, a given program's code runs straight along, with only one thing happening at once. If a function relies on the result of another function, it has to wait for the other function to finish and return, and until that happens, the entire program is essentially stopped from the perspective of the user.</p>
   <p>This is a frustrating experience and isn't a good use of computer processing power — especially in an era in which computers have multiple processor cores available. There's no sense sitting there waiting for something when you could let the other task chug along on another processor core and let you know when it's done. This lets you get other work done in the meantime, which is the basis of asynchronous programming. It is up to the programming environment you are using (web browsers, in the case of web development) to provide you with APIs that allow you to run such tasks asynchronously.</p>
   <hr>

   <h2>Blocking code</h2>
   <p>Asynchronous techniques are very useful, particularly in web programming. When a web app runs in a browser and it executes an intensive chunk of code without returning control to the browser, the browser can appear to be frozen. This is called blocking; the browser is blocked from continuing to handle user input and perform other tasks until the web app returns control of the processor.</p>
    <hr>

    <h2>Threads</h2>
    <p>A thread is basically a single process that a program can use to complete tasks. Each thread can only do a single task at once:</p>
    <p><code>Task A --> Task B --> Task C</code></p>
    <p>Each task will be run sequentially; a task has to complete before the next one can be started.</p>
    <p> many computers now have multiple cores, so can do multiple things at once. Programming languages that can support multiple threads can use multiple cores to complete multiple tasks simultaneously:</p>
    <p><code>
    Thread 1: Task A --> Task B<br>
Thread 2: Task C --> Task D 
    </code></p>
    <hr>

    <h2>JavaScript is single-threaded</h2>
    <p>JavaScript is traditionally single-threaded. Even with multiple cores, you could only get it to run tasks on a single thread, called the main thread.</p>
    <p><code>Main thread: Render circles to canvas --> Display alert()</code></p>
    <hr>

    <h2>Asynchronous code</h2>
    <p>browsers allow us to run certain operations asynchronously. Features like Promises allow you to set an operation running (e.g. the fetching of an image from the server), and then wait until the result has returned before running another operation:</p>
        
         
         
           

        <p class="my-5">.</p>
      
    </div>
</div>

@endsection