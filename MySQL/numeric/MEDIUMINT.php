<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> <!-- col-4 end -->


           <div class="col-8">
           <h1 class="text-danger">MEDIUMINT</h1>

 
            <h3>Description</h3>
            <div>
                <p>In SQL, the MEDIUMINT data type is used to store medium-sized integer values. It is a numeric data type that typically occupies 3 bytes of storage space.</p>
                
                <p>The MEDIUMINT data type can represent both signed and unsigned values, depending on the database system. The range of values for a signed MEDIUMINT is typically -8,388,608 to 8,388,607, while the range for an unsigned MEDIUMINT is 0 to 16,777,215.</p>

                <p>ZEROFILL pads the integer with zeroes and assumes UNSIGNED (even if UNSIGNED is not specified).</p>
               
                <p>INT3 is a synonym for MEDIUMINT.</p>

                <p>Examplse <code>08388608</code></p>
             
            </div>
            

           </div> <!-- col-8 end -->    
    </div><!-- row end -->
</div><!-- container -->



<?php include_once '../../inc/footer.php'; ?>  