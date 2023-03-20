<?php include_once '../../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../../nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> <!-- col-4 end -->


           <div class="col-8">
           <h2 class="text-danger">MEDIUMINT</h2>

 
            <h2>Description</h2>
            <div>
                <p>A medium-sized integer. The signed range is -8388608 to 8388607. The unsigned range is 0 to 16777215.</p>
                <p>ZEROFILL pads the integer with zeroes and assumes UNSIGNED (even if UNSIGNED is not specified).</p>
               
                <p>INT3 is a synonym for MEDIUMINT.</p>
                <p>Examplse <code>08388608</code></p>
             
            </div>
            

           </div> <!-- col-8 end -->    
    </div><!-- row end -->
</div><!-- container -->



<?php include_once '../../../inc/footer.php'; ?>  