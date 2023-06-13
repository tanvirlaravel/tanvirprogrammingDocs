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
            <h1>js Theory | NodeList</h1> 

            <h3>Introduction</h3>
            <div>
                
                <p>In JavaScript, a NodeList is a collection of nodes that can be accessed and manipulated using the Document Object Model (DOM). Nodes in a NodeList can be elements, text nodes, comments, or other types of nodes. NodeLists are similar to arrays, but have some differences in terms of the properties and methods that are available.</p>
                <p>NodeLists can be obtained by using methods such as document.getElementsByTagName, document.getElementsByClassName, or document.querySelectorAll. These methods return a NodeList of elements that match a certain criteria. For example, the following code would return a NodeList of all the &lt;p> elements on a page:</p>
                <pre>
                    let paragraphs = document.getElementsByTagName("p");
                </pre>
                <p>You can access individual elements in a NodeList using the index, like an array. For example, to change the text of the first paragraph:</p>
                <pre>
                paragraphs[0].innerHTML = "New text for the first paragraph";
                </pre>
                <p>Also, NodeList doesn't have all the array methods, like .map(), .filter(), etc.</p>
                <p>It's worth noting that the NodeList object is live, meaning that when the structure of the document changes, the NodeList will reflect those changes.</p>
                

            <hr>
            <hr>
            </div> 
            
            <h3>NodeList live</h3>
            <div>
                <p>A NodeList object in JavaScript is considered "live" because it automatically updates to reflect any changes made to the elements in the DOM that it represents. This means that if new elements are added or existing elements are removed from the DOM, the NodeList will automatically update to include or exclude those elements as appropriate.</p>
                <p>For example, if you have a NodeList of all the <p> elements on a page and then add a new <p> element to the page, the NodeList will automatically include the new element, and you can access it using the index. Similarly, if you remove an element from the page that is represented in the NodeList, it will no longer be included in the NodeList.</p>
                <p>This behavior is different from a static array, where you would need to manually update the array with any changes to the elements it represents. The live nature of NodeList makes it useful in situations where the structure of the document is frequently changing and you need to respond to those changes.</p>
              
            <hr>
            <hr>
            </div>

            <h3>Static NodeLists</h3>
            <div>
                <p>A static NodeList is a type of NodeList object that does not automatically update to reflect changes in the DOM. This means that if new elements are added or existing elements are removed from the DOM, the static NodeList will not include or exclude those elements. The elements in the NodeList will stay the same, regardless of any changes made to the DOM.</p>
                <p>You can convert a live NodeList to a static one by using the Array.from() method or the [...NodeList] spread operator. For example, the following code will create a static copy of a live NodeList:</p>
                <pre>
                let liveNodeList = document.getElementsByTagName("p");
                let staticNodeList = Array.from(liveNodeList);
                </pre>
                <p>This is useful if you want to work with a NodeList without having to worry about it changing unexpectedly, and you don't need the live updating feature.</p>
                <p>It's worth noting that some methods that work on live NodeList may not work on static NodeList, since they are not an instance of the class NodeList, but an array.</p>
                
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