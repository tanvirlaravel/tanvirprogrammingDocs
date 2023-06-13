<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> <!-- col-4 end -->


           <div class="col-8">
           <h2 class="text-danger">BOOLEAN</h2>

 
            <h3>Description</h3>
            <div>
                <p>These types are synonyms for TINYINT(1). A value of zero is considered false. Non-zero values are considered true.</p>
                <p>However, the values TRUE and FALSE are merely aliases for 1 and 0</p>             
                
                <p>Examplse <code>'true', 'false'</code></p>
                <hr>
                <hr>             
            </div>

            <h3>Boolean Literals</h3>
            <div>
                <p>In MariaDB, FALSE is a synonym of 0 and TRUE is a synonym of 1. These constants are case insensitive, so TRUE, True, and true are equivalent.</p>
                <p>These terms are not synonyms of 0 and 1 when used with the IS operator. So, for example, 10 IS TRUE returns 1, while 10 = TRUE returns 0 (because 1 != 10).</p>
                <p>The IS operator accepts a third constant exists: UNKNOWN. It is always a synonym of NULL.</p>
             
            </div>
            

           </div> <!-- col-8 end -->    
    </div><!-- row end -->
</div><!-- container -->



<?php include_once '../../inc/footer.php'; ?>  