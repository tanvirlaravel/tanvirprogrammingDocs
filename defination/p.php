<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    
<h1><a href="<?= $rool_url ?>defination/defination.php">Defination</a>/B</h1> 
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
            <h3>PHP Code execution</h3>
            <ul>
                    <li>PHP makes two passes (by default) anytime it runs a file.</li>
                    <li>Pass #1 parses the file and builds what is called operational(or machine) code. This is the raw binary format your computer will actually run and it is not human readable. In other languages (like C++, etc) this is called compiling. You can cache this step using various systems like Opcache, which saves you the overhead of compiling this every <time class=""></time></li>
                    <li>Syntax errors come from this portion of the execution.</li>
                    <li>Pass #2 executes the operational code from Pass #1. This is what is commonly called "run time", because your computer is actually executing the instructions.</li>
                    <li>Run-time errors (like exhausting memory, abnormal termination, etc) come from this level. These are considerably less common than syntax errors, however.</li>
                </ul>
          <!--  ##########################################################################     -->



          

       
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>