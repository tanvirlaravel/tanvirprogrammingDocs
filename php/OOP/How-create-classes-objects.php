<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>OOP | How to create classes and objects?</h1> 

            <h3>Introduction</h3>
            <div>
                <p>Object-oriented programming is a programming style in which it is customary to group all of the variables and functions of a particular topic into a single class.</p> 
                
                <ol>
                    <li>Set Properties</li>
                    <li>Get Properties</li>
                    <li>Call Methods</li>
                </ol>

            <hr>
            <hr>
            </div>

            <h3>How to create classes?</h3>
            <div>
                <p>In order to create a class, we group the code that handles a certain topic into one place. For example, we can group all of the code that handles the users of a blog into one class, all of the code that is involved with the publication of the posts in the blog into a second class, and all the code that is devoted to comments into a third class.</p> 
            <hr>
            <hr>
            </div>


            <h3>How to add properties to a class?</h3>
            <div>
                <p>We call properties to the variables inside a class. Properties can accept values like strings, integers, and booleans (true/false values), like any other variable</p>
               
            <hr>
            <hr>
            </div>


            <h3>Objects, what are they good for?</h3>
            <div>
                <p>While in the procedural style of programming, all of the functions and variables sit together in the global scope in a way that allows their use just by calling their name, the use of classes makes anything inside the classes hidden from the global scope. That’s because the code inside the classes is encapsulated within the class scope, outside the reach of the global scope. So, we need a way to allow the code from the global scope to use the code within the class, and we do this by creating objects from a class.</p> 
                <img src="./../img/class_and_obj.png" alt="">
            <hr>
            <hr>
            </div>

            



        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>