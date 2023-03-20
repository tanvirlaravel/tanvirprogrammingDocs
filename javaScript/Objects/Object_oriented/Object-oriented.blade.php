@extends('inc.layout')

@section('content')

<h1 class="my-4 text-info text-center">Object-oriented JavaScript for beginners</h1>
<p class="text-center"><a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Object-oriented_JS" target="_blank">MDN Document</a></p>

<div class="row">
    <div class="col-4">
       <ul class="list-group position-fixed" id="sidebar_menu">         
        </ul>
    </div>
    <div class="col-8"> 
          
           <h2 class="text-success">Defining an object template</h2>
           <p>There are lots of things you could know about a person (their address, height, shoe size, DNA profile, passport number, significant personality traits ...) , but in this case we are only interested in showing their name, age, gender, and interests, and we also want to be able to write a short introduction about them based on this data, and get them to say hello. This is known as abstraction — creating a simple model of a more complex thing, which represents its most important aspects in a way that is easy to work with for our program's purposes.</p>
           <p><img src="{{ asset('img/objects/person-diagram.png') }}" alt=""></p>
           <hr>

           <h2 class="text-success">Creating actual objects</h2>
           <p><img src="{{ asset('img/objects/mdn-graphics-instantiation-2-fixed.png') }}" alt=""></p>
           <p>When an object instance is created from a class, the class's constructor function is run to create it. This process of creating an object instance from a class is called instantiation — the object instance is instantiated from the class.</p>
           <p><strong>instance</strong>: an example or single occurrence of something.</p>
          
            <p class="my-5">.</p>

            
          
    </div>
</div>

@endsection


