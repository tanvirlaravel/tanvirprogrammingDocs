<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        
        <div class="col-8">
            <h1>Namespaces and code integration</h1> 

            <h3>Introduction</h3>
            <div>
               <p>we integrate code from different resources. A huge problem, for example, is that of name collision, which occurs when different classes have the same name or have the same name for their methods. The problem is solved, as of PHP 5.3, by using namespaces</p>  
               
               <p>By namespace a class is belonging to a namespace</p>
              
            </div>
            <hr>
            <hr>


            <h3>The code structure</h3>
            <div>
               <pre>
class CarIntro {
    public function sayHello()
    {
        return "beep!";
    }
}
               </pre>              
              <p>Pay attention to the fact that we call our classes with the same name as our files. This naming convention would pay off later when we’d like to autoload our classes.</p>
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