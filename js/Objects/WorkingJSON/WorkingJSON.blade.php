@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">Working with JSON</h1>
<p class="text-center"><a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/JSON" target="_blank">MDN Document</a></p>

<div class="row">
    <div class="col-4">
       <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>
    <div class="col-8"> 
          
          <h2 class="text-success">Introduction</h2>
          <p>JavaScript Object Notation (JSON) is a standard text-based format for representing structured data based on JavaScript object syntax. It is commonly used for transmitting data in web applications (e.g., sending some data from the server to the client, so it can be displayed on a web page, or vice versa).</p>
          <hr>
          
          <h2 class="text-success">what is JSON?</h2>
          <p><code>read (parse)</code></p>
          <p>JSON exists as a string — useful when you want to transmit data across a network. It needs to be converted to a native JavaScript object when you want to access the data. This is not a big issue —  JavaScript provides a global JSON object that has methods available for converting between the two.</p>
          <p><strong>Note</strong>: Converting a string to a native object is called deserialization, while converting a native object to a string so it can be transmitted across the network is called serialization.</p>
          <p>A JSON string can be stored in its own file, which is basically just a text file with an extension of .json, and a MIME type of application/json.</p>
          <hr>

          <h2 class="text-success">JSON structure</h2>
          <p>You can include the same basic data types inside JSON as you can in a standard JavaScript object — strings, numbers, arrays, booleans, and other object literals</p>
          <p><a href="https://github.com/mdn/learning-area/blob/master/javascript/oojs/json/JSONTest.html" target="_blank">Link of JSON string</a></p>
          <p><a href="https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json" target="_blank">Link 2 of JSON string</a></p>
          <p><a href="https://jsonlint.com/" target="_blank">Validate JSON</a></p>
          <hr>

          <h2 class="text-success">Active learning</h2>
          <p><a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/JSON#active_learning_working_through_a_json_example" target="_blank">Click to pactice</a></p>
          
            <p class="my-5">.</p>

            
          
    </div>
</div>

@endsection




