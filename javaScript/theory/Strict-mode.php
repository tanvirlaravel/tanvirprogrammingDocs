<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>js Theory | Strict mode</h1> 

            <h3>Introduction</h3>
            <div>
                <p>Strict mode is a feature in JavaScript that enables a stricter set of rules for the JavaScript engine to interpret the code. It helps to catch common mistakes and errors that might otherwise go unnoticed and can improve the overall security and performance of the code.</p>
                <p>When strict mode is enabled, the JavaScript engine will enforce a stricter syntax and semantics for the code, which can help to prevent certain types of errors and security vulnerabilities. For example, in strict mode, it will prevent the use of implicitly declared variables, disallows the use of certain keywords as variable names, and it will also make some assignments that would otherwise silently fail to throw an error.</p>
                <p>In order to enable strict mode, you need to include the string "use strict" at the beginning of the script or the function.</p>
                <pre>
                "use strict";
                let x = 5;
                let y = 10;
                let z = x + y;
                console.log(z);

                </pre>
                <p>or for a function</p>
                <pre>
                function myFunction() {
                    "use strict";
                    let x = 5;
                    let y = 10;
                    let z = x + y;
                    console.log(z);
                }
                </pre>
                <p>It is worth noting that strict mode is a feature of ECMAScript 5, which is a widely supported version of JavaScript and is compatible with most modern web browsers.</p>
                <p>In summary, Strict mode is a feature in JavaScript that enables a stricter set of rules for the JavaScript engine to interpret the code, it helps to catch common mistakes and errors and can improve the overall security and performance of the code. It can be enabled by adding "use strict" at the beginning of the script or the function.</p>
              

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