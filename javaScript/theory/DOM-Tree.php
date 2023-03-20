<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>js Theory | DOM Tree</h1> 

            <h3>Introduction</h3>
            <div>
                <p>The Document Object Model (DOM) is a tree-like structure that represents the elements of an HTML or XML document and their relationships. It is an object-oriented representation of the web page, which can be modified with a scripting language such as JavaScript.</p>
                <p>The tree structure of the DOM is composed of nodes, where each node represents an element of the web page, such as a tag, an attribute, or a piece of text. The topmost node is the document object, which represents the entire web page. Each element of the web page is represented as a node in the tree, with its child nodes representing the element's children, and so on.</p>
                <pre>
                &lt;html>
                    &lt;head>
                        &lt;title>My Web Page&lt;/title>
                    &lt;/head>
                    &lt;body>
                        &lt;h1 id="myHeading">Welcome to my Web Page&lt;/h1>
                        &lt;p>This is my first web page.&lt;/p>
                    &lt;/body>
                &lt;/html>

                </pre>
                <p>The DOM tree for this HTML would be represented as follows:</p>
                <pre>
                document
                |
                +-- html
                |
                    +-- head
                    |  |
                    |  +-- title
                    |
                    +-- body
                        |
                        +-- h1
                        |
                        +-- p

                </pre>
                <p>The document object is the root node of the tree and has two child nodes, html and head. The html node has two child nodes, head and body, and so on.</p>
                <p>Using JavaScript, you can access and manipulate the elements of the web page by navigating the DOM tree. For example, you can use the document.getElementById method to get a reference to the h1 element and change its text content:</p>
                
                <pre>
                let heading = document.getElementById("myHeading");
                heading.innerHTML = "Hello World!";
                </pre>
                <p>In summary, The Document Object Model (DOM) is a tree-like structure that represents the elements of an HTML or XML document and their relationships, it can be modified with a scripting language such as JavaScript, Each element of the web page is represented as a node in the tree, with its child nodes representing the element's children, and so on. Using JavaScript, you can access and manipulate the elements of the web page by navigating the DOM tree.</p>                
              

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