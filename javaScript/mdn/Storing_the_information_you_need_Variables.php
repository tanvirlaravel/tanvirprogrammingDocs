<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>Storing the information you need — Variables</h1> 

            
            <h3>What is a variable?</h3>
            <div>
               <p>A variable is a container for a value</p>
               <p>One special thing about variables is that they can contain just about anything — not just strings and numbers. Variables can also contain complex data and even entire functions to do amazing things</p>

               <p>Note: We say variables contain values. This is an important distinction to make. Variables aren't the values themselves; they are containers for values. You can think of them being like little cardboard boxes that you can store things in.</p>
               <img src="../img/boxes.png" width="100%">

               <p>Note: Don't confuse a variable that exists but has no defined value with a variable that doesn't exist at all — they are very different things. In the box analogy you saw above, not existing would mean there's no box (variable) for a value to go in. No value defined would mean that there is a box, but it has no value inside it.</p>
            
            </div>  
            <hr>
            <hr>            


             <h3>Updating a variable</h3>
            <div>              
                <p>Once a variable has been initialized with a value, you can change (or update) that value by giving it a different value.</p>
            </div>
             <hr>
            <hr>


             <h3>Variable types</h3>
            <div>              
                <h5>Numbers</h5>
                <p>You can store numbers in variables, either whole numbers like 30 (also called integers) or decimal numbers like 2.456 (also called floats or floating point numbers).</p>

                <h5>Strings</h5>
                <h5>Booleans</h5>
                <h5>Arrays</h5>
                <h5>Objects</h5>

            </div>
             <hr>
            <hr>

             <h3>Dynamic typing</h3>
            <div>              
           <p>JavaScript is a "dynamically typed language", which means that, unlike some other languages, you don't need to specify what data type a variable will contain (numbers, strings, arrays, etc.).</p>
           <pre>
               let myNumber = '500'; // oops, this is still a string
                typeof myNumber;
                myNumber = 500; // much better — now this is a number
                typeof myNumber;
           </pre>
            </div>
             <hr>
            <hr>


             <h3>Constants in JavaScript</h3>
            <div>              
            <p>As well as variables, you can declare constants. These are like variables, except that:</p>
            <ul>
                <li>you must initialize them when you declare them</li>
                <li>you can't assign them a new value after you've initialized them.</li>
            </ul>
            <p>You can update, add, or remove properties of an object declared using const, because even though the content of the object has changed, the constant is still pointing to the same object:</p>
            </div>
             <hr>
            <hr>

             <h3>When to use const and when to use let</h3>
            <div>              
           <p>If you can't do as much with const as you can with let, why would you prefer to use it rather than let? In fact const is very useful. If you use const to name a value, it tells anyone looking at your code that this name will never be assigned to a different value. Any time they see this name, they will know what it refers to.</p>

           <p>Use const when you can, and use let when you have to.</p>
           <p>This means that if you can initialize a variable when you declare it, and don't need to reassign it later, make it a constant.</p>
            </div>
             <hr>
            <hr>

             <h3>Updating a variable</h3>
            <div>              
           
            </div>
             <hr>
            <hr>
            
            
           
           
           
           


            

          

            <!-- <h3>sadsadas</h3>
            <div>
               
            <hr>
            <hr>
            </div> -->

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>