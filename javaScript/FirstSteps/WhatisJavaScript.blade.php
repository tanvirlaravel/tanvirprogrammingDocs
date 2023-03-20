@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">What is JavaScript?</h1>

<div class="row">
    <div class="col-4">
       <ul class="list-group position-fixed" id="sidebar_menu">    
       </ul>
    </div>
    <div class="col-8">
    <a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/What_is_JavaScript" target="_blank">MDN Link</a>

           
           <h2 class="text-success">A high-level definition</h2>
         
           <p>every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved</p>

           <p>JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else.</p>          
           
           <hr>


           <h2 class="text-success">So what can it really do</h2>
          
           <ul>
               <li>Store useful values inside variables. </li>
               <li>Operations on pieces of text (known as "strings" in programming). </li>
               <li>Running code in response to certain events occurring on a web page. </li>
               <li>And much more!</li>
           </ul>
           <hr>

           <h2 class="text-success">API</h2>
           
           <p>What is even more exciting however is the functionality built on top of the client-side JavaScript language.
            </p>
            <p>So-called Application Programming Interfaces (APIs) provide you with extra superpowers to use in your JavaScript code.</p>
            <p>APIs are ready-made sets of code building blocks that allow a developer to implement programs that would otherwise be hard or impossible to implement. They do the same thing for programming that ready-made furniture kits do for home building — it is much easier to take ready-cut panels and screw them together to make a bookshelf than it is to work out the design yourself, go and find the correct wood, cut all the panels to the right size and shape, find the correct-sized screws, and then put them together to make a bookshelf.

They generally fall into two categories.</p>

        <h5>Browser APIs</h5>
        <p>Browser APIs are built into your web browser, and are able to expose data from the surrounding computer environment, or do useful complex things</p>
        <ul>
            <li>The DOM (Document Object Model) API allows you to manipulate HTML and CSS, creating, removing and changing HTML, dynamically applying new styles to your page, etc. Every time you see a popup window appear on a page, or some new content displayed for example, that's the DOM in action.</li>
            <li>
            The Geolocation API retrieves geographical information. This is how Google Maps is able to find your location and plot it on a map.
            </li>
            <li>The Canvas and WebGL APIs allow you to create animated 2D and 3D graphics. People are doing some amazing things using these web technologies —see Chrome Experiments and webglsamples.</li>
            <li>
            Audio and Video APIs like HTMLMediaElement and WebRTC allow you to do really interesting things with multimedia, such as play audio and video right in a web page, or grab video from your web camera and display it on someone else's computer 
            </li>
        </ul>

        <h5>Third party APIs</h5>
        <p>Third party APIs are not built into the browser by default, and you generally have to grab their code and information from somewhere on the Web.</p>
        <ul>
            <li>The Twitter API allows you to do things like displaying your latest tweets on your website.</li>
            <li>
            The Google Maps API and OpenStreetMap API allows you to embed custom maps into your website, and other such functionality.
            </li>
           
        </ul>
        <hr>


       <h2 class="text-success">What is JavaScript doing on your page</h2>
       
        <p>When you load a web page in your browser, you are running your code (the HTML, CSS, and JavaScript) inside an execution environment (the browser tab). This is like a factory that takes in raw materials (the code) and outputs a product (the web page).</p>
        <img src="{{ asset("/img/firstSteps/execution.png") }}" height="200" alt="">
        <p>A very common use of JavaScript is to dynamically modify HTML and CSS to update a user interface, via the Document Object Model API </p>
        <hr>

        <h2 class="text-success">Browser security</h2>       
        <p>Each browser tab has its own separate bucket for running code in (these buckets are called "execution environments" in technical terms) — this means that in most cases the code in each tab is run completely separately, and the code in one tab cannot directly affect the code in another tab — or on another website. This is a good security measure — if this were not the case, then pirates could start writing code to steal information from other websites, and other such bad things.</p>
        <p>There are ways to send code and data between different websites/tabs in a safe manner</p>
                <hr>


        <h2 class="text-success">JavaScript running order</h2>       
        <p>When the browser encounters a block of JavaScript, it generally runs it in order, from top to bottom.</p>

        <p class="my-5">.</p>
      
    </div>
</div>

@endsection