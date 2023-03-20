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
            <h1>js Theory | window vs document</h1> 

            <h3>Introduction</h3>
            <div>
                
            <p>In JavaScript, the window object represents the current web page or browser window, while the document object represents the HTML or XML document that is currently loaded in the browser window.</p>
            <p>The window object provides access to various properties and methods that can be used to manipulate the web page and interact with the browser, such as window.open(), window.close(), window.setTimeout(), window.alert(), etc. It also includes the DOM elements as properties and provide methods to interact with the elements of the web page.</p>
            <p>On the other hand, the document object provides access to the HTML or XML structure of the web page, and allows you to manipulate the contents of the page using the DOM (Document Object Model). For example, you can use methods like document.getElementById(), document.querySelector(), document.createElement() etc to access and manipulate the elements of the web page.</p>
            <p>It is worth noting that window.document is the same as document, and document is a property of the window object.</p>
            <p>In short, window is the global object in the browser and gives access to the browser's functionality, while the document object gives access to the web page's structure and content.</p>
           
           

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