<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>js Theory | Document</h1> 

            <h3>Introduction</h3>
            <div>
                <p>"document" Object</p>
                <p>The document object in JavaScript represents the web page that is currently loaded in the browser. It is a part of the Document Object Model (DOM), which is a tree-like structure that represents the elements of a web page and their relationships. The document object provides a way to access and manipulate the elements of a web page, such as the HTML and CSS, using JavaScript.</p>
                <p>The document object has several properties and methods that can be used to access and manipulate the elements of a web page. Some of the most commonly used properties and methods include:</p>
                <ul>
                    <li>document.createElement(tag): Creates a new element with the specified tag name.</li>
                    <li>document.body: Returns the &lt;body> element of the web page.</li>
                    <li>document.head: Returns the &lt;head> element of the web page.</li>
                    <li>document.title: Returns the title of the web page.</li>
                    <li>document.URL: Returns the URL of the web page.</li>
                   
                </ul>
                <p>For example, you can use the document.getElementById method to get a reference to an element on the web page with a specific ID and then modify its content or style:</p>
                <pre>
                let heading = document.getElementById("myHeading");
                heading.innerHTML = "Hello World!";
                heading.style.color = "red";

                </pre>
                <p>In summary, the document object in JavaScript represents the web page that is currently loaded in the browser, it is part of the Document Object Model (DOM) and it provides a way to access and manipulate the elements of a web page using JavaScript, such as the HTML and CSS. It has several properties and methods like document.getElementById, document.getElementsByTagName and document.createElement that can be used to access and manipulate the elements of a web page.</p>
                
              

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