<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>JavaScript</h1> 

            
            <h3>Introduction</h3>
            <div>
                <p>JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat. JavaScript is a prototype-based, multi-paradigm, single-threaded, dynamic language, supporting object-oriented, imperative, and declarative (e.g. functional programming) styles.</p>  
                
                <p>
                JavaScript's dynamic capabilities include runtime object construction, variable parameter lists, function variables, dynamic script creation (via eval), object introspection (via for...in and Object utilities), and source-code recovery (JavaScript functions store their source text and can be retrieved through toString()).
                </p>
                <p> 
                The standards for JavaScript are the ECMAScript Language Specification (ECMA-262) and the ECMAScript Internationalization API specification
                </p>
            
            </div>  
            <hr>
            <hr>
            
            
            <h3>lightweight</h3>
            <div>
            <p>The word "lightweight" can have several meanings, depending on the context. In general, it refers to something that is relatively light in weight. However, it can also be used to describe someone who is not very serious or important, or something that is not very complex or sophisticated.</p>
            <p>For example, you might say that a piece of clothing is lightweight if it is made from a thin, airy fabric. You might also say that a person is a lightweight if they are not very strong or athletic. And you might say that a task is lightweight if it is not very difficult or time-consuming.</p>
            <p>In the context of programming, the word "lightweight" is often used to describe a language or framework that is relatively small and easy to use. For example, JavaScript is considered to be a lightweight programming language because it is relatively small and easy to learn.</p>
            <p>In computer programming, the term "lightweight" usually refers to a programming language or framework that has a small footprint in terms of memory and processing requirements. A lightweight language or framework is designed to be efficient, fast, and easy to use, without requiring a lot of resources.</p>
            <p>In the context of JavaScript, "lightweight" generally means that the language is designed to be simple and easy to learn, with a relatively small core syntax that can be used to build powerful web applications. JavaScript's lightweight nature also means that it can be executed on any modern web browser without the need for a separate runtime environment, which makes it a very accessible language for web developers.</p>
            <p>In addition to its small footprint and ease of use, JavaScript's lightweight nature also makes it a good choice for building web applications that need to be highly responsive and interactive, such as real-time chat applications, online games, and social media platforms.</p>
            <p>Another reason JavaScript is considered lightweight is because of its interpreted nature. Unlike languages like C++ or Java, which need to be compiled before they can be executed, JavaScript code is interpreted at runtime. This means that developers can write and test their code quickly without having to worry about the overhead of compilation.</p>
           
            <hr>
            <hr>
            </div>


            <h3>interpreted</h3>
            <div>
                <p>JavaScript is an interpreted language. This means that the JavaScript code is not compiled into machine code before it is executed. Instead, the JavaScript code is interpreted by a JavaScript engine, which translates the code into machine code on the fly.</p>
                <p>There are a few different types of interpreters. A simple interpreter reads the source code line by line and executes it. A Just-In-Time (JIT) compiler compiles the source code into machine code as it is being executed. This can improve performance by caching the compiled code and reusing it.</p>
                <p>JS is an interpreted programming language, which means that rather than compiling the code before running it, the code is executed line-by-line as it is encountered by the interpreter engine.</p>
                <p>When a web page with JS code is loaded in a browser, the browser's JavaScript engine can interpret and process that code directly without the need for a separate compilation step. This allows developers to write and test their code quickly without having to worry about the overhead of compilation.</p>
                
               
            <hr>
            <hr>
            </div>

            <h3>just-in-time compiled</h3>
            <div>
            <p>Just-in-time (JIT) compilation is a technique for improving the performance of interpreted languages. In JIT compilation, the source code is translated into machine code at runtime, just before it is executed. This can improve performance by allowing the compiler to take advantage of the specific hardware that the code is running on.</p>
                <p>JIT compilation is often used in JavaScript engines. When a JavaScript engine encounters a piece of code that has never been executed before, it will interpret the code. However, if the code is executed again, the engine will JIT compile the code into machine code. This allows the code to be executed much faster the second time around.</p>
                <p>JavaScript (JS) is an interpreted programming language, which means that the code is executed directly by a JS interpreter without being compiled into machine code first. While this allows for rapid development and flexibility, it can also lead to slower execution times compared to compiled languages like C or Java.</p>
                <p>In a JIT compilation system, the JS interpreter analyzes the code as it is being executed, and identifies portions of the code that are executed frequently. These frequently executed portions of the code are then compiled into machine code and cached for future use. This allows the frequently executed parts of the code to run much faster, as they are now executed in machine code rather than being interpreted line-by-line.</p>
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

            <h3>first-class functions</h3>
            <div>
               <p>In JavaScript, functions are considered first-class citizens, which means that they are treated like any other value, such as a string or a number. This means that functions can be:</p>
              <ol>
                <li>Assigned to variables: You can assign a function to a variable just like any other value, and then call the function using the variable name.</li>
                <pre>
                const add = function(a, b) {
                     return a + b;
                };

                console.log(add(2, 3)); // Output: 5

                </pre>

                <li>Passed as arguments: You can pass a function as an argument to another function.</li>
                <pre>
                function multiply(num1, num2, callback) {
                    return callback(num1 * num2);
                }

                function square(num) {
                    return num * num;
                }

                console.log(multiply(2, 3, square)); // Output: 36


                </pre>

                <li>Returned from functions: You can also return a function from another function.</li>
                <pre>
                function createMultiplier(multiplier) {
                    return function(num) {
                        return num * multiplier;
                    };
                }

                const double = createMultiplier(2);
                console.log(double(5)); // Output: 10


                </pre>

               
              </ol>
              <p>Overall, the ability to treat functions as first-class citizens in JavaScript provides a lot of flexibility and power when it comes to creating and using functions.</p>
            <hr>
            <hr>
            </div>

            <h3>scripting language</h3>
            <div>
               <p>A scripting language is a programming language that is designed to be interpreted by another program at runtime, rather than being compiled into machine code beforehand. Scripting languages are used to automate tasks and implement functionality on web pages, servers, and other software applications.</p>
               <p>Unlike compiled languages such as C++ or Java, which require a separate compilation step before the code can be executed, scripting languages are executed directly by an interpreter or a virtual machine. This makes them easier to write and modify, as changes to the code can be tested and implemented immediately without the need for recompilation.</p>
               <p>Unlike compiled languages such as C++ or Java, which require a separate compilation step before the code can be executed, scripting languages are executed directly by an interpreter or a virtual machine. This makes them easier to write and modify, as changes to the code can be tested and implemented immediately without the need for recompilation.</p>
               <p>Scripting languages are generally interpreted, which means that they may be slower than compiled languages for certain tasks. However, they are often more flexible and easier to use, which makes them a popular choice for web development and automation.</p>
            <hr>
            <hr>
            </div>

            <h3>non-browser environments</h3>
            <div>
               <p>Non-browser environments refer to computing environments or platforms that are not web browsers. These environments can include desktop applications, mobile applications, server-side applications, Internet of Things (IoT) devices, and serverless functions, among others.</p>
               <p>Desktop applications are software programs that run on a user's computer, such as word processors, games, and media players. Desktop applications can be built using a variety of programming languages and frameworks, including JavaScript.</p>
               <p>Mobile applications are software programs that run on mobile devices like smartphones and tablets. Mobile applications can also be built using a variety of programming languages and frameworks, including JavaScript.</p>
               <p>Server-side applications are software programs that run on servers and are used to process requests from client-side applications, such as web browsers and mobile applications. Server-side applications can be built using a variety of programming languages and frameworks, including JavaScript.</p>
               <p>IoT devices are physical devices that are connected to the internet and can communicate with other devices or services. Examples of IoT devices include smart thermostats, home security systems, and fitness trackers. JavaScript can be used to program IoT devices using frameworks like Johnny-Five.</p>
               <p>Serverless functions are small, single-purpose functions that are deployed to a cloud-based platform and triggered by specific events. Serverless functions can be written in a variety of programming languages, including JavaScript.</p>
               <p>Overall, non-browser environments refer to a broad range of computing platforms and devices that are not limited to web browsers, and where JavaScript can be used as a programming language.</p>
            <hr>
            <hr>
            </div>

            <h3>prototype</h3>
            <div>
               <p>In JavaScript, a prototype is an object that serves as a template for creating other objects. Every object in JavaScript has a prototype, which is accessed through the __proto__ property of the object.</p>
               <p>When a property or method is accessed on an object, JavaScript first looks for it on the object itself. If the property or method is not found on the object, JavaScript then looks for it on the object's prototype. If the property or method is not found on the object's prototype, JavaScript continues up the prototype chain until it reaches the end of the chain.</p>
               <p>Prototypes are used to implement inheritance in JavaScript. When a new object is created, its prototype is set to the prototype of the object it was created from. This means that the new object inherits all the properties and methods of its prototype.</p>
               <p>To create an object with a specific prototype, you can use the Object.create() method. For example:</p>
               <pre>
                const myPrototype = {
                    greeting: 'Hello',
                    sayHello() {
                        console.log(this.greeting);
                    }
                };

                const myObject = Object.create(myPrototype);
                myObject.sayHello(); // outputs 'Hello'

               </pre>
               <p>In this example, myPrototype is an object with a greeting property and a sayHello() method. myObject is a new object created using Object.create(), with myPrototype as its prototype. myObject inherits the greeting property and sayHello() method from myPrototype, so calling myObject.sayHello() outputs 'Hello'.</p>
               <p>Prototypes are a fundamental part of the JavaScript language and are used extensively in many JavaScript libraries and frameworks. Understanding prototypes is important for writing efficient and effective JavaScript code.</p>
              
            <hr>
            <hr>
            </div>

            <h3>prototype-based</h3>
            <div>
                <p>In JavaScript, prototype-based programming is a style of object-oriented programming that relies on prototypes rather than classes to define object behavior and inheritance.</p>
                <p>In a prototype-based language like JavaScript, objects are created by cloning existing objects (known as prototypes) rather than by defining classes. When an object is created, it inherits the properties and methods of its prototype object. The new object can then be customized by adding or modifying its own properties and methods.</p>
                <p>The prototype object itself is also an object, and can have its own prototype object. This forms a prototype chain, where an object's properties and methods are inherited from its prototype object, and that object's properties and methods are inherited from its own prototype object, and so on, up the chain.</p>
                <p>In JavaScript, all objects have a prototype object, which is accessed using the __proto__ property. When a property or method is accessed on an object, JavaScript first looks for that property or method on the object itself. If it is not found, JavaScript looks for it on the object's prototype object, and so on up the prototype chain, until the property or method is found or the end of the chain is reached.</p>
                <p>Prototype-based programming can be powerful and flexible, as it allows for dynamic object creation and modification at runtime. However, it can also be more difficult to understand and reason about than class-based programming, which is used in many other object-oriented programming languages.</p>
               
            <hr>
            <hr>
            </div>

            <h3>multi-paradigm</h3>
            <div>
                <p>A programming paradigm is a way of approaching and solving problems using a particular set of programming concepts, techniques, and principles. Different programming paradigms emphasize different aspects of programming, such as how data is organized, how operations are performed, and how programs are structured.</p>
               <p>A programming language is said to be multi-paradigm when it supports multiple programming paradigms or styles of programming. A programming paradigm is a way of thinking about and approaching programming problems, and different paradigms emphasize different techniques and concepts.</p>
               <p>Some of the most common programming paradigms include:</p>
               <ul>
                <li>Imperative programming: Imperative programming is the most common paradigm, and it involves writing code that describes a sequence of steps to perform a task. It is based on the idea that a program is a sequence of instructions that a computer executes in order to perform a task. It emphasizes changing the state of the program and the computer's memory.</li>
                <li>Object-oriented programming: Object-oriented programming (OOP) is a programming paradigm based on the concept of "objects", which can contain data and code that operates on that data. It emphasizes encapsulation, abstraction, inheritance, and polymorphism.</li>
                <li>Functional programming: Functional programming is a programming paradigm that emphasizes the use of functions to solve problems. It is based on the idea that a program is a collection of functions that take inputs and return outputs. It emphasizes immutability, pure functions, and avoiding side effects.</li>
                <li>Declarative programming: Declarative programming is a programming paradigm that emphasizes expressing the desired output, rather than the sequence of steps required to produce it. It includes programming languages for expressing logic and rules, as well as domain-specific languages (DSLs) that are used to express a particular domain's requirements.</li>
                <li>Logic programming: Logic programming is a programming paradigm based on mathematical logic, where the focus is on expressing a problem's requirements in terms of logical statements and rules. Programs are written as collections of facts and rules, and the computer searches for solutions that satisfy the rules.</li>
                
                <li>Procedural programming: programs are written as collections of procedures that describe the steps to achieve a goal</li>
               </ul>
               <p>These paradigms are not mutually exclusive and can be combined to create a hybrid approach that best fits the specific programming problem at hand. Understanding different paradigms and their strengths and weaknesses can help programmers choose the most appropriate paradigm for their programming task.</p>
               <p>A multi-paradigm language can support any combination of these paradigms, allowing programmers to use the most appropriate paradigm for each part of their program. For example, a language like JavaScript is multi-paradigm because it supports imperative, functional, and object-oriented programming styles. This flexibility makes multi-paradigm languages very powerful and versatile, but can also make them more complex and difficult to learn than languages that focus on a single paradigm.</p>
            <hr>
            <hr>
            </div>

            <h3>single-threaded</h3>
            <div>
               <p>Single-threaded means that a program or system can execute only one task or process at a time. In a single-threaded system, there is only one thread of execution, or one path of code execution, that the program follows. This thread executes instructions one at a time, in a sequential order, without any parallelism or concurrency.</p>
               <p>For example, in a single-threaded web browser, the browser can only load and render one web page at a time. While the browser is loading a page, it cannot simultaneously load or render another page. The user interface may still be responsive, but the browser's operations are essentially blocking, or synchronous, which means that they execute one at a time in a sequential order.</p>
               <p>Single-threaded systems are often simpler to design, implement, and maintain than multi-threaded systems. They can be more deterministic and easier to debug because there are no race conditions or thread synchronization issues to worry about. However, single-threaded systems can also be less efficient and performant than multi-threaded systems because they cannot take advantage of modern multi-core processors or parallel execution.</p>
               <p>It's important to note that even though a system may be single-threaded, it can still perform asynchronous operations using techniques like callbacks, promises, or async/await. These techniques allow a program to perform I/O operations without blocking the main thread, enabling the program to be more responsive and efficient.</p>
            <hr>
            <hr>
            </div>

            <h3>dynamic language</h3>
            <div>
               <p>A dynamic programming language is a programming language in which the behavior of a program can change at runtime, as opposed to static programming languages where the behavior of a program is determined at compile time. In other words, in a dynamic language, a program can modify itself and adapt to different situations while it is running.</p>
               <p>Here are some characteristics of dynamic languages:</p>
               <ol>
                <li>Dynamic typing: In dynamic languages, variables are not required to have a specific data type declared at compile time. The type of a variable can be determined at runtime, and it can be changed during the execution of the program.</li>
                <li>Late binding: In dynamic languages, the binding of a method or function to a name occurs at runtime, rather than at compile time. This allows functions and methods to be swapped in and out dynamically, making it possible to create more flexible and adaptable programs.</li>
                <li>Reflection: Dynamic languages often provide mechanisms for inspecting and modifying the structure of a program at runtime. This can include features like introspection (the ability to examine an object's attributes and methods), metaprogramming (the ability to create new code at runtime), and dynamic loading (the ability to load code into a running program).</li>
                <li>Higher-order functions: Dynamic languages often provide support for higher-order functions, which are functions that take other functions as arguments or return functions as results. This makes it possible to write more generic and reusable code.</li>
               
               </ol>              
               <p>Examples of dynamic programming languages include JavaScript, Python, Ruby, PHP, and Perl. Dynamic languages are often used for rapid prototyping, scripting, and web development, where flexibility and ease of development are more important than performance or strict type checking.</p>
              
            <hr>
            <hr>
            </div>

            
            <h3>Imperative programming</h3>
            <div>
               <p>Imperative programming is a programming paradigm that focuses on describing how a program should perform a task by specifying a sequence of instructions to be executed. In an imperative program, the programmer explicitly tells the computer what to do, step by step, using statements like "do this", "then do that", "if this condition is true, do this, otherwise do that", and so on.</p>
               <p>In imperative programming, the program is composed of a series of commands that modify the program's state, which consists of variables, data structures, and other objects. These commands can be executed in a different order, depending on the state of the program and the input data.</p>
               <p>Examples of imperative programming languages include C, C++, Java, Python, and JavaScript. In these languages, imperative programming is often used for low-level system programming, such as operating system development, device drivers, and hardware programming, as well as for developing applications that require precise control over the program's state and behavior.</p>
               <p>The main advantage of imperative programming is that it provides a high degree of control over the program's behavior, making it easier to reason about and debug. It also allows for efficient use of system resources, since the programmer can directly manage memory allocation and deallocation, among other things. However, imperative programming can also lead to code that is hard to read, maintain, and modify, particularly for large and complex programs.</p>
               <hr>
               <p>Imperative programming is a programming paradigm that describes computation by specifying the steps that the computer should follow to achieve the desired result. Imperative programming is the most common programming paradigm, and it is used by most programming languages.</p>
               <p>Imperative programs are typically written in a sequence of statements. Each statement tells the computer to do something, such as assigning a value to a variable, performing an operation, or calling a function. Statements are executed one after the other, in the order they are written.</p>
               <p>Imperative programming languages typically use variables to store data. Variables can be used to store values of different types, such as integers, floating-point numbers, and strings. Variables can also be used to store references to objects.</p>
               <p>Imperative programming languages typically use control flow statements to control the order in which statements are executed. Control flow statements include if statements, while statements, and for statements.</p>
               <p>Imperative programming is a powerful paradigm that can be used to solve a wide variety of problems. However, it can also be difficult to write correct and efficient imperative programs. Imperative programs can be difficult to read and understand, and they can be difficult to maintain.</p>
               <p>Here are some of the advantages of imperative programming:</p>
               <ul>
                <li>It is the most common programming paradigm, and it is used by most programming languages.</li>
                <li>It is a powerful paradigm that can be used to solve a wide variety of problems.</li>
                <li>It is relatively easy to learn and use.</li>
               
               </ul>
               <p>Here are some of the disadvantages of imperative programming:</p>
               <ul>
                <li>It can be difficult to write correct and efficient imperative programs.</li>
                <li>Imperative programs can be difficult to read and understand.</li>
                <li>Imperative programs can be difficult to maintain.</li>
               
               </ul>
               <p>Overall, imperative programming is a powerful paradigm that can be used to solve a wide variety of problems. However, it is important to be aware of the disadvantages of imperative programming before using it.</p>
            <hr>
            <hr>
            </div>

            
            <h3>Declarative programming</h3>
            <div>
               <p>Declarative programming is a programming paradigm that focuses on describing what a program should do, rather than how to do it. In a declarative program, the programmer specifies a set of rules, constraints, or properties that define the desired behavior of the program, without specifying the exact sequence of steps to be executed.</p>
               <p>Declarative programming languages provide higher-level abstractions for expressing complex logic and computations, often using domain-specific languages that are tailored to specific problem domains. For example, SQL is a declarative language that is used for querying and manipulating relational databases, while Prolog is a declarative language that is used for symbolic reasoning and artificial intelligence applications.</p>
               <p>In declarative programming, the program is expressed in terms of relationships between data, rather than a series of commands that manipulate the data. The program's behavior is determined by evaluating these relationships and constraints, rather than executing a specific sequence of steps.</p>
               <p>Declarative programming has several advantages over imperative programming. It is often more concise, easier to understand, and easier to modify, since the programmer does not need to worry about the details of how the program works. Declarative programs are also more amenable to parallelization and optimization, since the program's structure is more declarative and less dependent on specific implementation details.</p>
               <p>Examples of declarative programming languages include SQL, Prolog, XSLT, and functional programming languages like Haskell and Clojure. Declarative programming is often used in domains like data processing, artificial intelligence, and web development, where the focus is on expressing complex logic and computations in a concise and maintainable way.</p>
               <hr>
               <p>Declarative programming is a programming paradigm that describes what the program should do, rather than how it should do it. Declarative programs are typically written in a declarative language, which is a language that is designed to express computations in a declarative way.</p>
               <p>Some of the most common declarative languages include:</p>
               <ul>
                <li>SQL: SQL is a declarative language that is used to query and manipulate databases.</li>
                <li>XPath: XPath is a declarative language that is used to select nodes in XML documents.</li>
                <li>CSS: CSS is a declarative language that is used to style web pages.</li>
                <li>Prolog: Prolog is a declarative language that is used for logic programming.</li>
              
               </ul>
               <p>Declarative programs are typically easier to read and understand than imperative programs. This is because declarative programs focus on the desired outcome, rather than the steps that need to be taken to achieve the outcome.</p>
               <p>Declarative programs are also typically more efficient than imperative programs. This is because declarative programs can be translated into more efficient machine code by the compiler.</p>
               <p>Declarative programming is a powerful paradigm that can be used to solve a wide variety of problems. Declarative programming is often used for tasks that are difficult to express in an imperative way, such as querying databases and styling web pages.</p>
               <p>Here are some of the advantages of declarative programming:</p>
               <ul>
                <li>Declarative programs are typically easier to read and understand than imperative programs.</li>
                <li>Declarative programs are typically more efficient than imperative programs.</li>
                <li>Declarative programs can be used to solve a wide variety of problems.</li>
               
               </ul>
               <p>Here are some of the disadvantages of declarative programming:</p>
               <ul>
                <li>Declarative programs can be more difficult to write than imperative programs.</li>
                <li>Declarative languages are not as widely supported as imperative languages.</li>
                <li>Declarative programming is not as well-suited for all problems as imperative programming.</li>
              
               </ul>
               <p>Overall, declarative programming is a powerful paradigm that can be used to solve a wide variety of problems. However, it is important to be aware of the disadvantages of declarative programming before using it.</p>
               
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