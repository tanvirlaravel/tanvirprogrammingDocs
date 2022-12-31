<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Spread operator</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>In JavaScript, the spread operator (denoted by three dots: ...) is a way to expand an array or an iterable object into a list of elements. It is often used in combination with the rest parameter (which collects multiple elements into an array) to allow functions to accept an indefinite number of arguments.</p>
           <pre>
// Expanding an array into a list of elements
const myArray = [1, 2, 3];
console.log(...myArray); // Output: 1 2 3

// Concatenating arrays
const array1 = [1, 2, 3];
const array2 = [4, 5, 6];
const newArray = [...array1, ...array2];
console.log(newArray); // Output: [1, 2, 3, 4, 5, 6]

// Spreading an array into a function call
function myFunction(a, b, c) {
  console.log(a); // Output: 1
  console.log(b); // Output: 2
  console.log(c); // Output: 3
}

const myArray = [1, 2, 3];
myFunction(...myArray);

// Spreading an object into a new object
const myObject = {a: 1, b: 2};
const newObject = {...myObject, c: 3};
console.log(newObject); // Output: {a: 1, b: 2, c: 3}


           </pre>
           <p>As you can see, the spread operator is a powerful and versatile tool that can be used in a variety of contexts to expand arrays and objects into lists of elements or properties. It is often used in combination with other features such as the rest parameter and destructuring assignments to make working with collections of data easier and more flexible.</p>
   
            <hr>
            <hr>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


