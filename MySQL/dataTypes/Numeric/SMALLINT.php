<?php include_once '../../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../../nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> <!-- col-4 end -->


           <div class="col-8">
           <h2 class="text-danger">SMALLINT</h2>

 
            <h2>Description</h2>
            <div>
                <p>A small integer. The signed range is -32768 to 32767. The unsigned range is 0 to 65535</p>
                <p>If a column has been set to ZEROFILL, all values will be prepended by zeros so that the SMALLINT value contains a number of M digits.</p>
                <p>Note: If the ZEROFILL attribute has been specified, the column will automatically become UNSIGNED.</p>
                <p>INT2 is a synonym for SMALLINT.</p>
                <p>Examplse <code>32767</code></p>
             
            </div>
            

           </div> <!-- col-8 end -->    
    </div><!-- row end -->
</div><!-- container -->



<?php include_once '../../../inc/footer.php'; ?>  