<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Destructuring Array & Object</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>In JavaScript, destructuring is a way to extract values from arrays or objects and assign them to variables. It is a concise and convenient syntax that allows you to extract multiple values in a single statement.</p>
           
            <hr>
            <hr>

            <h3>Array Destructuring</h3>
           
            <pre>
const myArray = [1, 2, 3];
const [a, b, c] = myArray;

console.log(a); // Output: 1
console.log(b); // Output: 2
console.log(c); // Output: 3
            </pre>
            <p>In this example, the destructuring assignment extracts the values from the myArray array and assigns them to the variables a, b, and c. The destructuring syntax uses square brackets to indicate that the values are being extracted from an array.</p>
            <p>You can also use the spread operator (...) in destructuring assignments to extract the remaining elements of an array:
</p>
  <pre>
  const myArray = [1, 2, 3, 4, 5];
const [a, b, ...rest] = myArray;

console.log(a); // Output: 1
console.log(b); // Output: 2
console.log(rest); // Output: [3, 4, 5]

  </pre>
           
            <hr>
            <hr>            
           

            <h3>object destruction</h3>
            <div>
              <pre>
              const myObject = {a: 1, b: 2, c: 3};
              const {a, b, c} = myObject;

              console.log(a); // Output: 1
              console.log(b); // Output: 2
              console.log(c); // Output: 3




              const myObject = {
                innerObject: {
                  a: 1,
                  b: 2,
                  c: 3
                }
              };
              const {a, b, c} = myObject.innerObject;

              console.log(a); // Output: 1
              console.log(b); // Output: 2
              console.log(c); // Output: 3


              const myObject = {a: 1, b: 2, c: 3, d: 4};
              const {a, b, ...rest} = myObject;

              console.log(a); // Output: 1
              console.log(b); // Output: 2
              console.log(rest); // Output: {c: 3, d: 4}



              </pre>
             
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


