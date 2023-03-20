<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        <!--                   &lt;                       -->
        <div class="col-8">
            <h1>js Theory | collection</h1> 

            <h3>Introduction</h3>
            <div>
                
              <p>In JavaScript, an HTMLCollection is an object that represents a collection of HTML elements in a web page. It is similar to an array and can be used to access and manipulate the elements of a web page using the DOM (Document Object Model).</p>
              <p>There are several ways to create an HTMLCollection in JavaScript. Some of the most common methods are:</p>
              <ul>
                <li>document.getElementsByTagName(): Returns an HTMLCollection of elements with a specific tag name.</li>
                <li>document.getElementsByClassName(): Returns an HTMLCollection of elements with a specific class name.</li>
                <li>document.querySelectorAll(): Returns an HTMLCollection of elements that match a CSS selector.</li>
              </ul>
              <pre>
                let divs = document.getElementsByTagName("div");
                console.log(divs.length); // number of divs
                console.log(divs[0]); // first div
              </pre>
              <p>It is worth noting that, unlike arrays, the elements in an HTMLCollection are not numbered, but they can be accessed using their index like an array. However, HTMLCollection is live, which means that if the page is updated, the HTMLCollection will also be updated, and vice versa.</p>
              <p>Also, HTMLCollection is not a true array, it does not have all the array's method, such as forEach(),map() etc. However, you can use Array.from() to convert it into an array and use the array's method.</p>
              <pre>
               let divs = document.getElementsByTagName("div");
                let divsArray = Array.from(divs);
                console.log(divsArray); // an array

              </pre>
              <p>It is always recommended to use the latest APIs like document.querySelector() and document.querySelectorAll() for better performance and modern features support.</p>

            <hr>
            <hr>
            </div> 
           


          

            <!-- <h3>sadsadas</h3>
            <div>
               
            <hr>
            <hr>
            </div> -->

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>