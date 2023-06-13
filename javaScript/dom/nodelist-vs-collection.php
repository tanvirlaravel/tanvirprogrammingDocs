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
            <h1>js Theory | nodelist vs collection</h1> 

            <h3>Introduction</h3>
            <div>                
            
             <p>In JavaScript, both NodeList and HTMLCollection are objects that represent a collection of elements in a web page. However, there are some key differences between the two.</p>
             <p>A NodeList is a collection of nodes, which can be elements, text, comments, etc. It is similar to an array and can be used to access and manipulate the elements of a web page using the DOM (Document Object Model). Some of the most common methods to create a NodeList are:</p>
             <ul>
                <li>document.querySelectorAll(): Returns a NodeList of elements that match a CSS selector.</li>
                <li>node.childNodes: Returns a NodeList of child nodes of a specific element.</li>
             </ul>
             <pre>
             let elements = document.querySelectorAll('.my-class');
            console.log(elements.length); // number of elements
            console.log(elements[0]); // first element
             </pre>
             <p>On the other hand, an HTMLCollection is a collection of HTML elements in a web page. It is similar to an array and can be used to access and manipulate the elements of a web page using the DOM (Document Object Model). Some of the most common methods to create an HTMLCollection are:</p>
             <ul>
                <li>document.getElementsByTagName(): Returns an HTMLCollection of elements with a specific tag name.</li>
                <li>document.getElementsByClassName(): Returns an HTMLCollection of elements with a specific class name.</li>
             </ul>
             <pre>
             let divs = document.getElementsByTagName("div");
            console.log(divs.length); // number of divs
            console.log(divs[0]); // first div
             </pre>
             <p>In summary, the main difference between NodeList and HTMLCollection is that NodeList is a collection of all types of nodes, whereas HTMLCollection is a collection of only HTML elements.</p>
             <p>It is worth noting that, unlike arrays, the elements in a NodeList or HTMLCollection are not numbered, but they can be accessed using their index like an array. However, NodeList is live, which means that if the page is updated, the NodeList will also be updated, and vice versa.</p>
             <p>It is always recommended to use the latest APIs like document.querySelector() and document.querySelectorAll() which returns a NodeList, for better performance and modern features support.</p>
             

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