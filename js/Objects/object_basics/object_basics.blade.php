@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">JavaScript object basics</h1>
<p class="text-center"><a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Basics" target="_blank">MDN Document</a></p>

<div class="row">
    <div class="col-4">
    <ul class="list-group position-fixed" id="sidebar_menu">         
    </ul>
    </div>
    <div class="col-8"> 
          
           <h2 class="text-success">Object basics</h2>
           <p>An object is a <code>collection</code> of related data and/or functionality (which usually consists of several variables and functions — which are called properties and methods when they are inside objects.) </p>

           <pre class="bg-dark text-white py-3">
           const objectName = {
                member1Name: member1Value,
                member2Name: member2Value,
                member3Name: member3Value
            };
           </pre>

           <p>An object like this is referred to as an object literal — we've literally written out the object contents as we've come to create it. This is in contrast to objects instantiated from classes</p>
           <p>It is very common to create an object using an object literal when you want to transfer a series of structured, related data items in some manner, for example sending a request to the server to be put into a database. Sending a single object is much more efficient than sending several items individually, and it is easier to work with than an array, when you want to identify individual items by name.</p>
           <hr>

          
            <h2 class="text-success">What is this?</h2>
            <p>The this keyword refers to the current object the code is being written inside</p>
            <hr>

            <h2 class="text-success">You've been using objects all along</h2>
            <p> Every time we've been working through an example that uses a built-in browser API or JavaScript object, we've been using objects</p>
            <p>For each webpage loaded, an instance of Document is created, called document, which represents the entire page's structure, content, and other features such as its URL. Again, this means that it has several common methods and properties available on it.</p>
            <p>The same is true of pretty much any other built-in object or API you've been using — Array, Math, and so on.</p>
            <p>Note that built in objects and APIs don't always create object instances automatically. As an example, the Notifications API — which allows modern browsers to fire system notifications — requires you to instantiate a new object instance using the constructor for each notification you want to fire</p>
            <p>It is useful to think about the way objects communicate as message passing — when an object needs another object to perform some kind of action often it sends a message to another object via one of its methods, and waits for a response, which we know as a return value.</p>

            <p class="my-5">.</p>

            
          
    </div>
</div>

@endsection


