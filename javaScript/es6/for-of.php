<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | for of</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>In JavaScript, the for-of loop is a way to iterate over the values of an iterable object, such as an array or a string. It is similar to the for-in loop, but instead of iterating over the properties of an object, it iterates over the values of the object.</p>
            <pre>
            const myArray = [1, 2, 3, 4, 5];
          for (const element of myArray) {
            console.log(element);
          }

          // Output:
          // 1
          // 2
          // 3
          // 4
          // 5

            </pre>
            <p>In this example, the for-of loop iterates over the elements of the myArray array, and the variable element is set to the current element on each iteration.</p>
            <pre>
            const myString = 'hello';
            for (const character of myString) {
              console.log(character);
            }

            // Output:
            // h
            // e
            // l
            // l
// o

            </pre>
            <p>The for-of loop is a convenient and easy-to-use way to iterate over the values of an iterable object. It is often used in combination with destructuring assignments and the spread operator to make working with collections of data easier and more flexible.</p>
           
            <hr>
            <hr>

            <h3>for-of vs for-in</h3>
            <p>In JavaScript, the for-in loop is a way to iterate over the properties of an object. It is similar to the for-of loop, but instead of iterating over the values of an object, it iterates over the properties of the object.</p>
           
            <pre>
            const myObject = {a: 1, b: 2, c: 3};
            for (const property in myObject) {
              console.log(property);
            }

            // Output:
            // a
            // b
            // c
            </pre>
            <p>In this example, the for-in loop iterates over the properties of the myObject object, and the variable property is set to the current property on each iteration.</p>
            <p>On the other hand, the for-of loop is a way to iterate over the values of an iterable object, such as an array or a string. It is similar to the for-in loop, but instead of iterating over the properties of an object, it iterates over the values of the object.</p>
  <pre>
  const myArray = [1, 2, 3, 4, 5];
  for (const element of myArray) {
  console.log
  </pre>
           
            <hr>
            <hr>            
           

           
             
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


