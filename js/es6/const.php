<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Const</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>In JavaScript, const is a keyword that is used to declare a constant variable. A constant variable is a variable whose value cannot be reassigned.</p>
            <p>It is good practice to use const for variables that do not need to be reassigned, as it helps to prevent accidental reassignment and can improve code readability.</p>
            <hr>
            <hr>

            <h3>JavaScript const and Objects</h3>
            <p> if you declare an array or object as a constant, you can still modify the contents of the array or object.</p>
            
            <pre>
            const arr = [1, 2, 3];

            // This is allowed because we are not reassigning the value of the `arr` variable,
            // we are simply modifying the contents of the array
            arr.push(4);

            console.log(arr); // Output: [1, 2, 3, 4]

            </pre>
            <p>The const keyword ensures that the variable it creates is read-only. However, it doesn’t mean that the actual value to which the const variable reference is immutable.</p>
            <pre>
            const person = { age: 20 };
            person.age = 30; // OK
            console.log(person.age); // 30

            However, you cannot reassign a different value to the person constant like this:
            person = { age: 40 }; // TypeError    

            </pre>
            <p>If you want the value of the person object to be immutable, you have to freeze it by using the Object.freeze() method:</p>
            <pre>
            const person = Object.freeze({age: 20});
            person.age = 30; // TypeError
            </pre>
            <p>Object.freeze() is shallow, meaning that it can freeze the properties of the object, not the objects referenced by the properties.</p>
            <pre>
            const company = Object.freeze({
                name: 'ABC corp',
                address: {
                    street: 'North 1st street',
                    city: 'San Jose',
                    state: 'CA',
                    zipcode: 95134
                }
            });
            
But the company.address object is not immutable, you can add a new property to the company.address object as follows:

            company.address.country = 'USA'; // OK
            </pre>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


