<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>Access modifiers: public vs. private</h1> 

            <h3>Introduction</h3>
            <div>
                <p>While the public access modifier allows a code from outside or inside the class to access the class’s methods and properties, the private modifier prevents access to a class’s methods or properties from any code that is outside the class</p>
              
            </div>
            <hr>
            <hr>


            <h3>The public access modifier</h3>
            <div>
                <p>the class’s property and method are defined as public, so the code outside the class can directly interact with them</p>              
            </div>
            <hr>
            <hr>


            <h3>The private access modifier</h3>
            <div>
                <p>We can prevent access to the properties and methods inside our classes if we define them with the private access modifier instead of the public access modifier.
                </p>              
            </div>
            <hr>
            <hr>


            <h3>How to access a private property?</h3>
            <div>
                <p>We saw that we have no access to private properties from outside the class, but we still have to somehow set and get the properties’ values. In order to interact with private properties, we use public methods because they can interact with both the code outside of the class’s scope as well as the code inside the class. The public methods that can interact in this manner are commonly divided into two kinds of methods</p>
                <ol>
                    <li>Setters that set the values of the private properties.</li>
                    <li>Getters that get the values of the private properties</li>
                </ol>
                <pre>
class Car {
    
    // The private access modifier denies access to the method
    // from outside the class’s scope
    private $model;

    // The public access modifier allows the access to the method
    // from outside the class
    public function setModel($model)
    {
        $this -> model = $model;
    }

    public function getModel()
    {
        return "The car model is " . $this -> model;
    }
}


$mercedes = new Car();
// Set the car’s model

$mercedes -> setModel("Mercedes");
// Get the car’s model

echo $mercedes -> getModel();
Result:The car model is Mercedes
                </pre>
                <p></p>
            </div>
            <hr>
            <hr>


            <h3>Why do we need access modifiers?</h3>
            <div>
                <p>We need access modifiers in order to limit the modifications that code from outside the classes can do to the classes’ methods and properties. Once we define a property or method as private, only
methods that are within the class are allowed to approach it. So, in order to interact with private methods and properties, we need to provide public methods. Inside these methods, we can put logic that can validate and restrict data that comes from outside the class</p>
                
            </div>
            <hr>
            <hr>


            <h3>Conclusion</h3>
            <div>
                <p>So far, we have learned about two access modifiers: public, which allows outside functions to modify
the code inside a class, and private, that prevents any code from outside the class to change the
properties and methods which it protects. We saw that, in order to modify private methods and
properties, we can use public methods that have the privilege to interact with the code outside the
scope of the class.</p>
              
            </div>
            <hr>
            <hr>


           

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>