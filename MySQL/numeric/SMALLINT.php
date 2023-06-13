<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> <!-- col-4 end -->


           <div class="col-8">
           <h1 class="text-danger">SMALLINT</h1>

 
            <h3>Description</h3>

            <div>
                <p>In SQL, the SMALLINT data type is used to store small integer values. It is a numeric data type that typically occupies 2 bytes of storage space.</p>

                <p>The SMALLINT data type can represent both signed and unsigned values, depending on the database system. The range of values for a signed SMALLINT is typically -32,768 to 32,767, while the range for an unsigned SMALLINT is 0 to 65,535.</p>
                
                <p>Note: If the ZEROFILL attribute has been specified, the column will automatically become UNSIGNED.</p>

                <p>INT2 is a synonym for SMALLINT.</p>

                <p>Examplse <code>32767</code></p>
             
            </div>
            

           </div> <!-- col-8 end -->    
    </div><!-- row end -->
</div><!-- container -->



<?php include_once '../../inc/footer.php'; ?>  