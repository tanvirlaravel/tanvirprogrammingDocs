@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">Introduction to JavaScript</h1>
<p class="text-center"><a href="https://www.w3schools.com/js/js_arrow_function.asp" target="_blank">Web Link</a></p>

<div class="row">
    <div class="col-4">
       <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>
    <div class="col-8"> 


    <h2>What is JavaScript?</h2>
    <p>JavaScript was initially created to “make web pages alive”.</p>
    <p>Today, JavaScript can execute not only in the browser, but also on the server, or actually on any device that has a special program called the JavaScript engine.</p>
    <p>The browser has an embedded engine sometimes called a “JavaScript virtual machine”.</p>
    <p>Different engines have different “codenames”. For example:</p>
    <ul>
        <li>V8 – in Chrome, Opera and Edge.</li>
        <li>SpiderMonkey – in Firefox.</li>
        <li>…There are other codenames like “Chakra” for IE, “JavaScriptCore”, “Nitro” and “SquirrelFish” for Safari, etc.</li>
    </ul>
    <hr>

    <h2>How do engines work?</h2>
    <p>Engines are complicated. But the basics are easy.</p>
    <ol>
        <li>The engine (embedded if it’s a browser) reads (“parses”) the script.</li>
        <li>Then it converts (“compiles”) the script to the machine language.</li>
        <li>And then the machine code runs, pretty fast.</li>
    </ol>
    <p>The engine applies optimizations at each step of the process. It even watches the compiled script as it runs, analyzes the data that flows through it, and further optimizes the machine code based on that knowledge.</p>
    <hr>

    <h2>What can in-browser JavaScript do?</h2>
    <p>Modern JavaScript is a “safe” programming language. It does not provide low-level access to memory or CPU, because it was initially created for browsers which do not require it.</p>
    <p>JavaScript’s capabilities greatly depend on the environment it’s running in. For instance, Node.js supports functions that allow JavaScript to read/write arbitrary files, perform network requests, etc.</p>
    <p>In-browser JavaScript can do everything related to webpage manipulation, interaction with the user, and the webserver.</p>
    <p>For instance, in-browser JavaScript is able to:</p>
    <ul>
        <li>Add new HTML to the page, change the existing content, modify styles.</li>
        <li>React to user actions, run on mouse clicks, pointer movements, key presses.</li>
        <li>Send requests over the network to remote servers, download and upload files (so-called AJAX and COMET technologies).</li>
        <li>Get and set cookies, ask questions to the visitor, show messages.</li>
        <li>Remember the data on the client-side (“local storage”).</li>
    </ul>
    <hr>

    <h2>What CAN’T in-browser JavaScript do?</h2>
    <p><a href="https://javascript.info/intro#what-can-t-in-browser-javascript-do" target="_blank">Read Doc</a></p>
    <hr>

    <h2>What makes JavaScript unique?</h2>
    <p>There are at least three great things about JavaScript:</p>
    <ul>
        <li>Full integration with HTML/CSS.</li>
        <li>Simple things are done simply.</li>
        <li>Supported by all major browsers and enabled by default.</li>
    </ul>
    <p>JavaScript is the only browser technology that combines these three things.</p>
    <p>That’s what makes JavaScript unique. That’s why it’s the most widespread tool for creating browser interfaces.</p>
    <p>That said, JavaScript also allows to create servers, mobile applications, etc.</p>
    <hr>

   

    <h2>Languages “over” JavaScript</h2>
    <p><a href="https://javascript.info/intro#languages-over-javascript" target="_blank">Read Doc</a></p>
          
         
    <p class="my-5">.</p>
    </div>
</div>

@endsection




