<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>js | Basics</h1> 

            
            <h3>Introduction</h3>
            <div>
                <p>JavaScript is a programming language that adds interactivity to your website.</p>

                <ul>
                        <li>This happens in games</li>
                        <li>in the behavior of responses when buttons are pressed</li>
                        <li>with data entry on forms</li>
                        <li>with dynamic styling</li>
                        <li>with animation</li>
                </ul> 
            
            </div>  
            <hr>
            <hr>
            
            
            
            <h3>What is JavaScript?</h3>
            <div>              
                <p> <a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics#what_is_javascript" target="_blank">MDN Docs</a> </p>
            </div>
             <hr>
            <hr>


            <h3>A Hello-world example</h3>
            <div>              
                <code>const myHeading = document.querySelector("h1");</code>
                <p>a function called querySelector() to grab a reference to your heading, and then store it in a variable called myHeading</p>
            </div>
             <hr>
            <hr>

             <h3>Language basics crash course</h3>
            <div>              
                <h5>Variables</h5>
                <p>Variables are containers that store values.</p>
                <p>variables may hold values that have different data types:</p>

                <p><strong>String:</strong> This is a sequence of text known as a string. To signify that the value is a string, enclose it in single or double quote marks. Examples</p>
                <code>let myVariable = 'Bob'; </code>
                <br>
                <code>let myVariable = "Bob";</code>

                 <p><strong>Number:</strong> This is a number. Numbers don't have quotes around them. Examples</p>
                <code>let myVariable = 10; </code>


                 <p><strong>Boolean:</strong> This is a True/False value. The words true and false are special keywords that don't need quote marks. Examples</p>                
                <code>let myVariable = true;</code>


                 <p><strong>Array:</strong> This is a structure that allows you to store multiple values in a single reference. Examples</p>
                <code>let myVariable = [1,'Bob','Steve',10]; </code>
                <p>Refer to each member of the array like this:</p>
                <code>myVariable[0], myVariable[1], etc.</code>


                 <p><strong>Object:</strong> This can be anything. Everything in JavaScript is an object and can be stored in a variable. Keep this in mind as you learn. Examples</p>
                <code>let myVariable = document.querySelector('h1'); </code>
                <p>So why do we need variables? Variables are necessary to do anything interesting in programming. If values couldn't change, then you couldn't do anything dynamic, like personalize a greeting message or change an image displayed in an image gallery.</p>

                <h5>Operators</h5>
                <p>An operator is a mathematical symbol that produces a result based on two values (or variables).</p>

                <h5>Conditionals</h5>
                <p>Conditionals are code structures used to test if an expression returns true or not.</p>
                <code>if (iceCream === "chocolate")</code>
                <p>The expression inside the if () is the test. test becomes true or false</p>

                <h5>Functions</h5>
                <p>Functions are a way of packaging functionality that you wish to reuse. It's possible to define a body of code as a function that executes when you call the function name in your code. This is a good alternative to repeatedly writing the same code. </p>

                <h5>Events</h5>
                <p>Real interactivity on a website requires event handlers. These are code structures that listen for activity in the browser, and run code in response.</p>
                <p>There are a number of ways to attach an event handler to an element.</p>
            </div>
             <hr>
            <hr>

             <h3>Supercharging our example website</h3>
             <p><a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/JavaScript_basics#supercharging_our_example_website" target="_blank">MDN Docs</a></p>
            <div>              
           
            </div>
             <hr>
            <hr>

             <h3>Conclusion</h3>
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