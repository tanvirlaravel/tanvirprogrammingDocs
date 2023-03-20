<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>js | Data Types</h1> 

            
            <h3>Introduction</h3>
            <div>
                <p>JavaScript has several built-in data types that can be used to store and manipulate data. These include:</p>
              

            <hr>
            <hr>
            </div>         
           
            
            
            
            
            <h3>Number</h3>
            <div>

            <p>Number: This data type includes both integers and floating-point numbers.</p>
            <p>In JavaScript, the Number type is used to represent numerical values. It can be used to represent both integers and floating-point numbers.</p>
            <pre>
            let num = 42;
            let pi = 3.14;
            </pre>
            <p>JavaScript uses the 64-bit floating-point format (IEEE 754) for all its numeric values, which means that it has a finite precision and can represent a wide range of numbers, but not all real numbers. The Number type can represent values between -(2^53 - 1) and 2^53 - 1.</p>
            <p>You can create a number in JavaScript using the Number constructor or by simply assigning a numerical value to a variable:</p>
            <pre>
            let myNumber = new Number(42);
            let myNumber2 = 42;
            </pre>
            <p>Both of these lines of code create a Number object with the value 42.</p>
            <p>In JavaScript, there are some special values in the Number type :</p>
            <ul>
                <li>Infinity: represents positive infinity</li>
                <li>-Infinity: represents negative infinity</li>
                <li>NaN: represents a value that is not a number</li>
            </ul>
            <pre>
            console.log(1 / 0);  // Infinity
            console.log(-1 / 0); // -Infinity
            console.log(0 / 0);  // NaN
            </pre>
            <p>You can also use various methods and properties like toFixed(), toExponential(), toPrecision() which are available for number type to format the numbers as per your requirement.</p>
           
               
            <hr>
            <hr>
            </div>

           
           
           
            <h3>String</h3>
            <div>

            <p>String: This data type is used to store sequences of characters. Strings are enclosed in single or double quotes.</p>
            <pre>
            let myString = "Hello World!";
            let myString2 = 'Hello World!';
            </pre>
            <p>strings are immutable. It means that if you modify a string, you will always get a new string. The original string doesn’t change.</p>
            <p>JavaScript also provides various built-in methods for manipulating strings, such as:</p>   
            <ul>
                <li>.length: returns the number of characters in a string</li>
                <li>.indexOf(substring): returns the index of the first occurrence of a substring within a string</li>
                <li>.slice(start, end): returns a new string containing a subset of the characters of the original string   </li>
                <li>.toUpperCase(): returns a new string with all characters in uppercase</li>
                <li>.replace(oldSubstring, newSubstring): replaces all occurrences of a substring with a new substring.</li>
            </ul>   
            <p>You can also use template literals (string literals enclosed by back-ticks) to embed expressions inside string using ${expression}.</p>    
            <pre>
            let a = 5;
            let b = 10;
            console.log(`Fifteen is ${a + b} and not ${2 * a + b}.`);
            </pre> 
            <p>To access the characters in a string, you use the array-like [] notation with the zero-based index. The following example returns the first character of a string with the index zero:</p>
            <pre>
            let str = "Hello";
            console.log(str[0]); // "H"
            </pre>
               
            <hr>
            <hr>
            </div>

            
            
            <h3>Boolean</h3>
            <div>
            <p>In JavaScript, a boolean is a data type that has two possible values: true and false. Booleans are often used to represent the truth or falsehood of a statement, and are commonly used in control structures like if-else statements and loops..</p>
            <pre>
            let isTrue = true;
            let isFalse = false;

            let a = 5;
            let b = 10;
            console.log(a < b); // Output: true
            console.log(a == b); // Output: false
            console.log(a === b); // Output: false
            </pre> 
            <hr>
            <hr>
            </div>



            <h3>Array</h3>
            <div>

            <p>Array: This data type is used to store a collection of values, which can be of any data type. Arrays are declared using square brackets [] and the values are separated by commas.</p>
            <pre>
                let myArray = [1, 2, 3, 'four', true];
            </pre>
            
               
            <hr>
            <hr>
            </div>

            <h3>Object</h3>
            <div>

            <p>Object: This data type is used to store collections of key-value pairs. Objects are declared using curly braces {} and the keys and values are separated by colons.</p>
            <pre>
            let myObject = {name: "John", age: 25};
            </pre>
            
            <hr>
            <hr>
            </div>

            <h3>Function</h3>
            <div>

            <p>Function: A function is a block of code that can be called by name and executed. Functions are declared using the function keyword or using arrow function () => {}</p>
            <pre>
            function myFunction() {
                console.log("Hello World!");
            }
            </pre>
           
               
            <hr>
            <hr>
            </div>

            <h3>Undefined</h3>
            <div>

            <p>In JavaScript, "undefined" is a special value that indicates that a variable has been declared, but has not been assigned a value. It is the default value of variables that are declared, but not initialized. For example, the following code declares a variable "x" but does not assign it a value:</p>
            <pre>
            let x;
            console.log(x); // Output: undefined
            </pre>
            <p>It's important to note that a variable that is declared but not assigned a value is undefined, while a variable that is assigned the value null is explicitly set to have no value.</p>            
           
               
            <hr>
            <hr>
            </div>

            <h3>Null</h3>
            <div>

            <p>Null: This data type represents no value or no object. It can be assigned to a variable to indicate that it has no value.</p>
            <p>In JavaScript, "null" is a special value that represents the absence of a value or an empty object reference. It is a primitve value, and is different from "undefined", which indicates that a variable has been declared but has not been assigned a value.</p>
            <pre>
            let myVariable = null;
            console.log(myVariable); // null
            </pre>
            <p>It's important to note that "null" is often used to indicate that an object is empty, or that a function does not return a value. It can be used in places where an object is expected, but no valid object is available.</p>
            <pre>
            let person = {name: "John", age: 25};
            person.address = null; //indicating address is not available
            </pre>
            <p>It's also used to initialize variables that will be used later to store an object.</p>
            <pre>
            let x = null;
            x = {name: "Jane", age: 30}; //later x will store an object
            </pre>
          
               
            <hr>
            <hr>
            </div>

            <h3>undefined vs null</h3>
            <div>
            <p>In JavaScript, "undefined" and "null" are both special values that have different meanings and use cases.</p>
            <p>"undefined" is a value that indicates that a variable has been declared, but has not been assigned a value. It is the default value of variables that are declared, but not initialized. For example:</p>
            <pre>
            let x;
            console.log(x); // Output: undefined
            </pre>
            <p>"null" is a value that represents the absence of a value or an empty object reference. It is a primitve value, and is often used to indicate that an object is empty, or that a function does not return a value. It can be used in places where an object is expected, but no valid object is available.</p>
            <pre>
            let person = {name: "John", age: 25};
            person.address = null; //indicating address is not available
            </pre>
            <p>It's important to differentiate between undefined and null, as they have different meanings and use cases.</p>
            <p>undefined is used when a variable is declared but not assigned any value, while null is used to indicate that a variable is intentionally empty or not present.</p>
            <p>undefined is a special value that indicates that a variable has not been assigned a value, while null is a special value that indicates that a variable has been assigned the value of null, which means it has been explicitly set to have no value.</p>
               
            <hr>
            <hr>
            </div>

            <h3>Symbol</h3>
            <div>

            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
               
            <hr>
            <hr>
            </div>

            <h3>BigInt</h3>
            <div>

            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
               
            <hr>
            <hr>        
            </div>

            <h3>dynamic data types (coercion)</h3>
            <div>

            <p>JavaScript is a loosely typed or dynamically typed language, which means that the data type of a variable can change during the execution of a program. This is known as type coercion. For example, the following code assigns a number to a variable, and then assigns a string to the same variable:</p>
            <pre>
            let myVariable = 42;
            console.log(typeof myVariable); // "number"

            myVariable = "Hello World!";
            console.log(typeof myVariable); // "string"
            </pre>
            <p>As you can see, the data type of myVariable changed from "number" to "string" during the execution of the program.</p>
            <p>JavaScript automatically converts between data types as needed, such as when performing operations or comparisons. For example, when a string and a number are added together, JavaScript will implicitly convert the string to a number:</p>
            <pre>
            let num = 42;
            let str = "Hello";
            let result = num + str;
            console.log(result); // "42Hello"
            </pre>
            <p>In the above example, JavaScript converts the string "Hello" to a number NaN and concatenates it with number 42 to produce 42Hello.</p>
            <p>It's important to be aware of these automatic conversions and their potential side effects when writing JavaScript code.</p>
               
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