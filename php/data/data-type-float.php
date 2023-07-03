<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h2>Float: Data</h2>
      
    <div class="row">
       <div class="col-4">
            <ul id="sidebar_links"></ul>        
       </div> 

        <div class="col-md-8">
       <h3>Floating point numbers</h3>
        <p>Floating point numbers (also known as "floats", "doubles", or "real numbers")</p>  
        <pre class="bg-dark p-3 text-white">
                $a = 1.234; 
                $b = 1.2e3; 
                $c = 7E-10;
                $d = 1_234.567; // as of PHP 7.4.0    
        </pre>

        </div>
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>