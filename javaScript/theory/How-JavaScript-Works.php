<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>js Theory | how javascript works</h1> 

            <h3>how javascript works</h3>
            <div>
                <p>JavaScript is a client-side programming language, which means that the code is executed directly by the web browser on the user's device, rather than on a server. When a user requests a web page, the browser sends a request to the server to retrieve the HTML, CSS, and JavaScript files. The browser then parses and renders the HTML and CSS to display the layout and styling of the page, and it runs the JavaScript code to add interactivity and dynamic content.</p> 
                
                <p>JavaScript code is executed by the JavaScript engine, which is built into the web browser. The engine reads the JavaScript code and converts it into machine code that the computer can understand and execute. The JavaScript code can manipulate the Document Object Model (DOM), which is a tree-like structure that represents the elements of a web page, allowing the code to change the appearance and content of the page in real-time.</p>

                <p>JavaScript can also make use of Web APIs, which are built-in browser features such as geolocation, storage, and web sockets, that allows developers to access the user's device features and network information.</p>

                <p>JavaScript can also be run on the server side using technologies like Node.js, which allows developers to use JavaScript to build server-side web applications and services.</p>
              

            <hr>
            <hr>
            </div>

            <h3>Machine code</h3>
            <div>
                <p>Machine code, also known as machine language or assembly language, is the lowest level programming language that a computer can understand. It is a sequence of binary digits (0s and 1s) that represent instructions for the computer's central processing unit (CPU) to execute. These instructions are specific to the architecture of the CPU and are not directly readable or understandable by humans.</p>
                <p>Each instruction in machine code corresponds to a specific operation that the CPU can perform, such as moving data from one location to another, performing arithmetic calculations, or jumping to a different location in the code. These operations are basic building blocks that can be used to create more complex programs.</p>
                <p>Machine code is the most efficient and direct way to communicate with a computer's hardware and is often used for low-level tasks such as device drivers and operating systems. However, it is not practical for writing large and complex programs, due to its lack of readability and maintainability. Higher-level programming languages such as C, C++, and JavaScript, are used to write more complex programs and are then translated into machine code before they can be executed.</p>
                <p>In summary, Machine code is a low-level programming language that consists of binary instructions that the computer's CPU can execute directly, it is not human-readable, and it is often used for low-level tasks, but it is not practical for writing large and complex programs. Instead, higher-level programming languages are used and then translated into machine code to be executed by the computer.</p>
               
            <hr>
            <hr>
            </div>

            <h3>JavaScript engine</h3>
            <div>
                <p>A JavaScript engine is a program or interpreter that executes JavaScript code. JavaScript engines are built into web browsers and are responsible for converting JavaScript code into machine code that the computer can understand and execute. The most common JavaScript engines are V8 (used in Google Chrome and Node.js), SpiderMonkey (used in Mozilla Firefox), and JavaScriptCore (used in Safari).</p>               
              
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