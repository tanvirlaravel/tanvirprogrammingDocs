<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
           <div class="col-4">
                <a href="#h" class="p-2 display-4 d-inline-block bg-dark text-warning ">H</a>
                <a title="Scope State" href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning  ">S</a>
                <a href="#v" class="p-2 display-4 d-inline-block bg-dark text-warning ">V</a>
           </div> <!-- end col-4 -->
           <div class="col-8">
           <! 
            ================
            Hoisting 
            ================ 
            -->
            <section class="Hoisting">
            <h1 id="h">H</h1> <a href="#variable">Hoisting</a>
           
            <h3 id="Hoisting">Hoisting</h3>
           


            
            <a href="#h" class="p-1 d-inline-block bg-dark text-warning  float-right">H Top</a>
            </section>
            <hr>
            <hr>
            
           <! 
           ================
                Ssssssssssssssssssssssssssssssss
            ================ 
            -->
            <h1 id="s" class="text-danger">S</h1> <a href="#scope">Scope</a> <a href="#state">State</a>
            <?php include "./S.php" ?>
           
           
            
            <! 
            ================
                Vvvvvvvvvvvvvvvvvvvvvvvvvv
            ================ 
            -->
            <h1 id="v">V</h1> <a href="#variable">Variable</a>
            <?php include "./V.php" ?>      
            
                    




           </div> <!-- end col-8 -->    
    </div><!-- end row -->
</div><!-- end container -->



<?php include_once '../../inc/footer.php'; ?>