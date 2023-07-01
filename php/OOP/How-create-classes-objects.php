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

            <h3>How to create objects from a class?</h3>
            <div>
                <p>The process of creating an object is also known as <code>instantiation</code>.</p>
                <p>we can create as many objects as we like from the same class, and then give each object its <code>own set of properties</code>.
</p>
            
            </div>
            <hr>
            <hr>


            <h3>Objects, what are they good for?</h3>
            <div>
                <p>While in the procedural style of programming, all of the functions and variables sit together in the global scope in a way that allows their use just by calling their name, the use of classes makes anything inside the classes hidden from the global scope. That’s because the code inside the classes is encapsulated within the class scope, outside the reach of the global scope. So, we need a way to allow the code from the global scope to use the code within the class, and we do this by creating objects from a class.</p> 
                <img src="./../img/class_and_obj.png" alt="">
                <p>I say objects, and not object, because we can create as many objects as we would like from the same class and they all will share the class’s methods and properties. 
</p>
<p>From the same Car class, we created three individual objects with the name of: Mercedes, Bmw, and Audi. .</p>
<p>Although all of the objects were created from the same class and thus have the class’s methods and properties, they are still different. This is not only, because they have different names, but also because they may have different values assigned to their properties. For example, in the image above, they differ by the color property - the Mercedes is green while the Bmw is blue and the Audi is orange</p>
              
            <hr>
            </div>


            <h3>How to get an object’s properties?</h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>

            <h3>How to set an object property</h3>
            <div>
                <pre>
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";
                </pre>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>

            <h3>How to add methods to a class</h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>

            <!-- <h3></h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr> -->
            



        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>