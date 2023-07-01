<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>Magic methods and constants unveiled</h1> 

            <h3>Introduction</h3>
            <div>
               <p>Object Oriented PHP offers several magic methods and constants that enable a lot of programming with very little code, but which suffer from a few disadvantages like a slight reduction in the performance time as well as in the level of code clarity</p>        
              
            </div>
            <hr>
            <hr>


            <h3>The __construct() magic method</h3>
            <div>
               <pre>


               public function __construct($model = null)
                {
                    if($model)
                    {
                        $this -> model = $model;
                    }
                }

               </pre>              
              
            </div>
            <hr>
            <hr>

            <h3>Magic constants</h3>
            <div>
               <p>In addition to magic methods, the PHP language offers several magic constants.</p>
               <ul>
                <li>__class__</li>
                <li>__line__</li>
                <li>__file__</li>
                <li>__method__</li>
               
               </ul>
              
            </div>
            <hr>
            <hr>

           

            <!-- <h3>Introduction</h3>
            <div>
               <p></p>
               <p></p>
               <p></p>
              
            </div>
            <hr>
            <hr> -->


           

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>