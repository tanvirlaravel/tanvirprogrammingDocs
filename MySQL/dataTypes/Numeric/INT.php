<?php include_once '../../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../../nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> <!-- col-4 end -->


           <div class="col-8">
           <h2 class="text-danger">INT</h2>

 
            <h2>Description</h2>
            <div>
                <p>A normal-size integer. When marked UNSIGNED, it ranges from 0 to 4294967295, otherwise its range is -2147483648 to 2147483647 (SIGNED is the default). If a column has been set to ZEROFILL, all values will be prepended by zeros so that the INT value contains a number of M digits. INTEGER is a synonym for INT.</p>
                <p>Examles: <code>2147483647 </code></p>
            </div>
            

           </div> <!-- col-8 end -->    
    </div><!-- row end -->
</div><!-- container -->



<?php include_once '../../../inc/footer.php'; ?>  