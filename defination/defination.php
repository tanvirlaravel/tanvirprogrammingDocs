<?php include_once '../inc/header.php'; ?>
<div class="container">
    
   

      <h1><a href="<?= $rool_url ?>">Home</a>/Defination</h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="row">
                <div class="col"><a href="a.php" class="text-white bg-primary char-box">A</a></div>
                <div class="col"><a href="b.php" class="text-white bg-success char-box">B</a></div>
                <div class="col"><a href="c.php" class="text-white bg-info char-box">C</a></div>      
                <div class="col"><a href="d.php" class="text-white bg-danger char-box">D</a></div>
                <div class="col"><a href="e.php" class="text-white bg-warning char-box">E</a></div>
                <div class="col"><a href="f.php" class="text-white bg-primary char-box">F</a></div>
                <div class="col"><a href="g.php" class="text-white bg-success char-box">G</a></div>
                <div class="col"><a href="h.php" class="text-white bg-info char-box">H</a></div>
                <div class="col"><a href="i.php" class="text-white bg-danger char-box">I</a></div>
                
            </div>

            <div class="row">
                <div class="col"><a href="j.php" class="text-white bg-warning char-box">J</a></div>
                <div class="col"><a href="k.php" class="text-white bg-primary char-box">K</a></div>
                <div class="col"><a href="l.php" class="text-white bg-success  char-box">L</a></div>
                <div class="col"><a href="m.php" class="text-white bg-info char-box">M</a></div>
                <div class="col"><a href="n.php" class="text-white bg-danger char-box">N</a></div>
                <div class="col"><a href="o.php" class="text-white bg-warning char-box">O</a></div>      
                <div class="col"><a href="p.php" class="text-white bg-primary char-box">P</a></div>
                <div class="col"><a href="q.php" class="text-white bg-success char-box">Q</a></div>
                <div class="col"><a href="r.php" class="text-white bg-info char-box">R</a></div> 
            </div>

            <div class="row">
                <div class="col"><a href="s.php" class="text-white bg-danger char-box">S</a></div>
                <div class="col"><a href="t.php" class="text-white bg-info char-box">T</a></div>
                <div class="col"><a href="u.php" class="text-white bg-primary char-box">U</a></div>
                <div class="col"><a href="v.php" class="text-white bg-warning char-box">V</a></div>
                <div class="col"> <a href="w.php" class="text-white bg-info char-box">W</a> </div>
                <div class="col"><a href="x.php" class="text-white bg-primary char-box">X</a></div>
                <div class="col"><a href="y.php" class="text-white bg-warning char-box">Y</a></div>
                <div class="col"><a href="z.php" class="text-white bg-danger char-box">Z</a></div>
              
            </div>                
       </div>
</div> 


    </div> 
    </div>
</div>


<style>
    .defination-container{
        display: grid;
        grid-template-columns: repeat(8, 130px); /*Creates 4 columns, each 100px in width*/
	    grid-template-rows: repeat(4, 100px);
        gap:15px;

    }
    .char-box{
        display:flex;
        align-items: center;
        justify-content: center; 
        padding:15px;
        margin:6px;
        font-size: 5em;     
       
    }
  
</style>

<?php include_once '../inc/footer.php'; ?>