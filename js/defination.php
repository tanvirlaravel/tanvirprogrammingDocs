<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'js.nav.php'; ?>

      
    <div class="row">
           <div class="col-3">
            <a href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">S</a>
           </div> 
           <div class="col-9">
            <h1 id="s">S</h1>
            <hr>
            <h3>Scope</h3>
           
            <p>Scope determines the accessibility (visibility) of variables.</p>
            <p>The scope is the current context of execution in which values and expressions are "visible" or can be referenced. If a variable or expression is not in the current scope, it will not be available for use. Scopes can also be layered in a hierarchy, so that child scopes have access to parent scopes, but not vice versa.</p>
            <p>Scope refers to the availability of variables and functions in certain parts of the code.</p>

            <p>JavaScript types of scope:</p>

            <ul>   
                <li>Global scope: The default scope for all code running in script mode.</li>
                <li>Module scope: The scope for code running in module mode.</li>
                <li>Function scope: The scope created with a function.</li>
                <span>...In addition, variables declared with let or const can belong to an additional scope:</span>
                <li> Block scope: The scope created with a pair of curly braces (a block). </li>
            </ul>






           </div>     
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>