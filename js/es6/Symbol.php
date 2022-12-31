<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Symbol</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>In JavaScript, a Symbol is a primitive data type that represents a unique, immutable identifier. Symbols are useful for creating object properties that can't be accidentally or intentionally overwritten or enumerated in a for-in loop.</p>
            <p>To create a Symbol, you can use the Symbol() function:</p>
           <pre>
           const mySymbol = Symbol();
           </pre>
           <p>Symbols are unique and cannot be compared to other Symbols or any other value using == or ===. You can use the Symbol.for() function to create a Symbol that is associated with a specific key, and the Symbol.keyFor() function to retrieve the key associated with a Symbol:</p>
           <pre>
           const mySymbol = Symbol.for('mySymbol');
            const key = Symbol.keyFor(mySymbol); // key is 'mySymbol'

           </pre>
           <p>Symbols are often used in JavaScript libraries and frameworks to create properties that are meant to be private or internal, to avoid conflicts with other code or with future changes to the library.</p>
            <hr>
            <hr>

            <h3>Use of Symbols</h3>
           
            <pre>
// Creating a Symbol
const mySymbol = Symbol();

// Creating a Symbol with a description
const mySymbol = Symbol('mySymbol');

// Using a Symbol as an object property
const obj = {};
obj[mySymbol] = 'This property is a Symbol';
console.log(obj[mySymbol]); // Output: "This property is a Symbol"

// Retrieving the key for a Symbol
const key = Symbol.keyFor(mySymbol);
console.log(key); // Output: "mySymbol"

// Creating a Symbol that is associated with a specific key
const mySymbol = Symbol.for('mySymbol');
const key = Symbol.keyFor(mySymbol);
console.log(key); // Output: "mySymbol"

// Using Symbols to create private properties
const _privateProperty = Symbol();

class MyClass {
  constructor() {
    this[_privateProperty] = 'This property is private';
  }
}

const instance = new MyClass();
console.log(instance[_privateProperty]); // Output: "This property is private"

            </pre>
            <p>As you can see, Symbols can be useful for creating unique, immutable identifiers that can be used as object properties, and for creating private or internal properties in classes and objects. They can also be used to avoid conflicts with other code or with future changes to a library or framework.</p>
           
            <hr>
            <hr>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


