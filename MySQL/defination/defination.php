<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
            
           
           <div class="col-4">
            <?php include("nav_defination.php"); ?>            

            </div>

           <div class="col-8">
           
<?php 
$variable = $_GET['char'];
  switch ($variable) {
  case "a":
    include "a.php";
    break;

  case "b":
    include "b.php";
    break;

  case "c":
    include "c.php";
    break;

  case "d":
    include "d.php";
    break;

  case "f":
    include "f.php";
    break;

  case "z":
    include "z.php";
    break;

  default:
    include "a.php";
    break;
}
?>
          
           

          



           </div>
    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
