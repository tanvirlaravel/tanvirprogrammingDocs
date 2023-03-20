<?php include_once '../../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../../nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> <!-- col-4 end -->


           <div class="col-8">
           <h2 class="text-danger">BIGINT</h2>

 
            <h2>Description</h2>
            <div>
                <p>A large integer. The signed range is -9223372036854775808 to 9223372036854775807. The unsigned range is 0 to 18446744073709551615.</p>
                <p>If a column has been set to ZEROFILL, all values will be prepended by zeros so that the BIGINT value contains a number of M digits.</p>
                <p>Note: If the ZEROFILL attribute has been specified, the column will automatically become UNSIGNED.</p>
                
                
                <p>Examplse <code>00000000000000000010 | 9223372036854775808</code></p>
             
            </div>
            

           </div> <!-- col-8 end -->    
    </div><!-- row end -->
</div><!-- container -->



<?php include_once '../../../inc/footer.php'; ?>  