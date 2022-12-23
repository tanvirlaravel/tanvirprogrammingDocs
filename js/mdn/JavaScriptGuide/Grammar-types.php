<?php include_once '../../inc/header.php' ?>
<?php include_once '../../inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Grammar and types</h2>


<hr>

<h3 class="text-success pb-2">What is JavaScript?</h3>

<p>JavaScript contains a standard library of objects, such as Array, Date, and Math, and a core set of language elements such as operators, control structures, and statements.</p>
<ul>
    <li>Client-side JavaScript extends the core language by supplying objects to control a browser and its Document Object Model (DOM). For example, client-side extensions allow an application to place elements on an HTML form and respond to user events such as mouse clicks, form input, and page navigation.</li>
    <li>
        Server-side JavaScript extends the core language by supplying objects relevant to running JavaScript on a server. For example, server-side extensions allow an application to communicate with a database, provide continuity of information from one invocation to another of the application, or perform file manipulations on a server.
    </li>
</ul>
<p>This means that in the browser, JavaScript can change the way the webpage (DOM) looks. And, likewise, Node.js JavaScript on the server can respond to custom requests from code written in the browser.</p>

<p>JavaScript supports a runtime system based on a small number of data types representing numeric, Boolean, and string values. JavaScript has a prototype-based object model instead of the more common class-based object model. The prototype-based model provides dynamic inheritance; that is, what is inherited can vary for individual objects. JavaScript also supports functions without any special declarative requirements. Functions can be properties of objects, executing as loosely typed methods.</p>
<hr>

<h3 class="text-info">JavaScript and the ECMAScript specification</h3>
<p>JavaScript is standardized at Ecma International — the European association for standardizing information and communication systems (ECMA was formerly an acronym for the European Computer Manufacturers Association) to deliver a standardized, international programming language based on JavaScript. This standardized version of JavaScript, called ECMAScript, behaves the same way in all applications that support the standard. Companies can use the open standard language to develop their implementation of JavaScrip</p>

<hr>
<h3 class="text-info">JavaScript documentation versus the ECMAScript specification</h3>
<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Introduction" target="_blank">later</a>


<pre class="bg-dark text-white py-3">

     // create a couple of elements in an otherwise empty HTML page
     const heading = document.createElement("h1");
     const heading_text = document.createTextNode("Big Head!");
     heading.appendChild(heading_text);
     document.body.appendChild(heading);
     
      &lt;div class="parent"&gt;
        &lt;div class="child">&lt;/div&gt;
        &lt;!-- --&gt;
        &lt;div class="child">&lt;/div&gt;
        &lt;div class="child">&lt;/div&gt;
        &lt;div class="child">&lt;/div&gt;
        &lt;div class="child">&lt;/div&gt;
    &lt;/div&gt;
    &lt;script&gt;
        var parent = document.querySelector('.parent')
        console.log(parent.childNodes) // returns all child nodes list
        console.log(parent.children) // returns child element nodes list

    &lt;/script&gt;
</pre>









<?php include_once '../../inc/footer.php' ?>
