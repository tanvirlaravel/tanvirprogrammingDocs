<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>OOP | Chaining methods and properties</h1> 

            <h3>Introduction</h3>
            <div>
                <p>when a class’s methods return the $this keyword, they can be chained together to create much more streaming code</p>
                <p>In order for us to be able to perform the chaining, the methods should return the object and, since we are inside the class, the methods should return the $this keyword</p>
                <pre>
                    
        class Car {
            public $tank;

            // Add gallons of fuel to the tank when we fill it
            public function fill($float)
            {
                $this-> tank += $float;
                return $this;
            }

            // Subtract gallons of fuel from the tank as we ride the car
            public function ride($float)
            {
                $miles = $float;
                $gallons = $miles/50;
                $this-> tank -= $gallons;
                return $this;
            }
        }

        // Create an object from the Car class
        $bmw = new Car();

        // Add 10 gallons of fuel, then ride 40 miles
        // and get the number of gallons in the tank
        $tank = $bmw -> fill(10) -> ride(40) -> tank;

        // Print the results to the screen
        echo "The number of gallons left in the tank: " . $tank . " gal.";

                </pre>
            </div>
            <hr>
            <hr>


            <h3></h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>


            <h3></h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>


            <h3></h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>


            <h3></h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>


            <h3></h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>


            <h3></h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>

            <h3></h3>
            <div>
                <p></p>
                <p></p>
                <p></p>
            </div>
            <hr>
            <hr>

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>