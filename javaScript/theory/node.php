<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>js Theory | Node</h1> 

            <h3>Introduction</h3>
            <div>
                <img src="./images/nodes.jpg" alt="">
                <p>In JavaScript, a node refers to an object that represents an element of the Document Object Model (DOM). Each element of an HTML or XML document is represented as a node in the DOM tree, which can be accessed and manipulated using JavaScript.</p>
                <p>A node can be an element, an attribute, or a piece of text, and it has properties and methods that can be used to access and modify its content, attributes, and relationships with other nodes.</p>
                <pre>
                let newDiv = document.createElement("div");
                newDiv.id = "myDiv";
                document.body.appendChild(newDiv);
                </pre>
                <p>In this example, newDiv is a node that represents the new element, and createElement and appendChild are methods of the document object that are used to create and add the node to the web page.</p>
                <p>Each node in the DOM tree has a parent and child nodes, and can be accessed using properties such as parentNode, childNodes, firstChild, lastChild, previousSibling, nextSibling.</p>
                <p>In summary, In JavaScript, a node refers to an object that represents an element of the Document Object Model (DOM). Each element</p>

                <p>Nodes can have event handlers attached to them. Once an event is triggered, the event handlers get executed.</p>
                            

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