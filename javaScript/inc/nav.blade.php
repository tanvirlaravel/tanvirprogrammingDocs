<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">Tavnir's JS Doc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          First Steps
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('WhatisJavaScript') }}">What is JavaScript</a>           
            <a class="dropdown-item" href="{{ route('A-first-splash-into-JavaScript') }}">A first splash into JavaScript</a>           
            <a class="dropdown-item" href="{{ route('What-went-wrong') }}">What went wrong? Troubleshooting JavaScript</a>           
            <a class="dropdown-item" href="{{ route('Storing-information—Variables') }}">Storing the information you need — Variables</a>           
            <a class="dropdown-item" href="{{ route('Basic-math') }}">Basic math in JavaScript — numbers and operators</a>           
            <a class="dropdown-item" href="{{ route('strings') }}">Handling text — strings in JavaScript</a>           
            <a class="dropdown-item" href="{{ route('string-methods') }}">Useful string methods</a>           
            <a class="dropdown-item" href="{{ route('Arrays') }}">Arrays</a>           
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Introducing JavaScript objects
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('Objects.intro') }}">Introducing JavaScript objects</a>           
            <a class="dropdown-item" href="{{ route('Objects.object.basics') }}">JavaScript object basics</a>           
            <a class="dropdown-item" href="{{ route('Objects.Object.oriented') }}">Object-oriented JavaScript for beginners</a>           
            <a class="dropdown-item" href="{{ route('Objects.WorkingJSON') }}">Working with JSON</a>           
            <a class="dropdown-item" href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Object_building_practice" target="_blank">Object building practice</a>           
          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Asynchronous JavaScript
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('Asynchronous.General-asynchronous-programming-concepts') }}">General asynchronous programming concepts</a>           
            <a class="dropdown-item" href="{{ route('Asynchronous.Introducing-asynchronous-JavaScript') }}">Introducing asynchronous JavaScript</a>           
          </div>
        </li>

       
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Defination
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('definations.a') }}">A</a>     
            <a class="dropdown-item" href="{{ route('definations.e') }}">E</a>     
            <a class="dropdown-item" href="{{ route('definations.m') }}">M</a>     
            <a class="dropdown-item" href="{{ route('definations.n') }}">N</a>     

          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Edabit
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('edabit.Arrow_Function') }}">Arrow Function</a>   
            <a class="dropdown-item" href="{{ route('edabit.Function') }}">Function</a>   
            <a class="dropdown-item" href="{{ route('edabit.Introduction_JavaScript') }}">Introduction to JavaScript</a>   

          </div>
        </li>

       
        
      </ul>
      
     
    </div>
  </nav>

  