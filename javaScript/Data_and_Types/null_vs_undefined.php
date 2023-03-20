<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>js | null vs undefined</h1> 

            <h3>Introduction</h3>
            <div>
                <p>In JavaScript, both null and undefined represent the absence of a value. However, they are used in slightly different ways.</p>
                <ul>
                    <li>undefined: A variable that has been declared but has not been assigned a value is </li>
                    <li>undefined. It can also occur when a function is called with fewer arguments than it is defined to accept.</li>
                
                <pre>
                let myVariable;
                console.log(myVariable); // undefined
                </pre>
                <li>null: This value represents no value or no object. It can be assigned to a variable to indicate that it has no value. It is often used to indicate that a value is intentionally missing, as opposed to the variable simply not having been initialized yet.</li>
                <pre>
                let myVariable = null;
                console.log(myVariable); // null
                </pre>
                </ul>
                <p>In practice, undefined is typically used when a variable has not been assigned a value yet, whereas null is used to indicate that a variable has been deliberately set to have no value.</p>
                <p>You can also use typeof operator to check whether a variable is undefined or null.</p>
                <pre>
                console.log(typeof myVariable);  // "undefined"
                console.log(typeof myVariable2); // "object"
                </pre>
                <p>It will return undefined for variables that are undefined and object for variables that are null.</p>
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