<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Rest parameter</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>In JavaScript, the rest parameter (also known as the spread operator) is a way to represent an indefinite number of arguments as an array. It is denoted by three dots (...) followed by a variable name.:</p>
           <pre>
function myFunction(a, b, ...rest) {
  console.log(a); // Output: 1
  console.log(b); // Output: 2
  console.log(rest); // Output: [3, 4, 5]
}

myFunction(1, 2, 3, 4, 5);

           </pre>
           <p>In this example, the function myFunction takes three arguments: a, b, and rest. a and b are normal arguments, while rest is the rest parameter. When the function is called with five arguments, a and b are set to the first two arguments (1 and 2), and the rest parameter rest is set to an array containing the remaining three arguments (3, 4, and 5).</p>
           <p>The rest parameter must always be the last parameter in the function definition, and you can only use one rest parameter per function</p>
           <pre>
const myArray = [1, 2, 3, 4, 5];
const [a, b, ...rest] = myArray;

console.log(a); // Output: 1
console.log(b); // Output: 2
console.log(rest

           </pre>
          
            <hr>
            <hr>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


