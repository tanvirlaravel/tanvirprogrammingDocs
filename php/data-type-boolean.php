<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h2>Booleans: Data</h2>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
            
           </div> 
        
           <div class="col-md-8">
    <h3>Introduction</h3>
    <p>It can be either true or false</p>

    <h3>Converting to boolean</h3>
    <p>To explicitly convert a value to bool, use the (bool) or (boolean) casts. However, in most cases the cast is unnecessary, since a value will be automatically converted if an operator, function or control structure requires a bool argument.</p>
    <p>When converting to bool, the following values are considered false:</p>
    <ul class="list-group">
         <ol>the boolean false itself</ol>
         <ol>the integers 0 and -0 (zero)</ol>
         <ol>the floats 0.0 and -0.0 (zero)</ol>
         <ol>the empty string, and the string "0"</ol>
         <ol>an array with zero elements</ol>
         <ol>the special type NULL (including unset variables)</ol>
         <ol>SimpleXML objects created from empty tags</ol>
    </ul>

    <p>Every other value is considered true (including any resource and NAN).</p>
    <p class="bg-warning p-2"><strong>Warning</strong> -1 is considered true, like any other non-zero (whether negative or positive) number!</p>

    <pre class="bg-dark text-danger py-2">
            var_dump((bool) "");        // bool(false)
            var_dump((bool) 1);         // bool(true)
            var_dump((bool) -2);        // bool(true)
            var_dump((bool) "foo");     // bool(true)
            var_dump((bool) 2.3e5);     // bool(true)
            var_dump((bool) array(12)); // bool(true)
            var_dump((bool) array());   // bool(false)
            var_dump((bool) "false");   // bool(true)
    </pre>
</div>
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>