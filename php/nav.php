<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= $rool_url ?>">Home</a>
  <h1 class="mt-3 text-center text-info">PHP</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="mr-auto navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="image.php">File Uploading</a>
      </li> 

      <li class="nav-item active">
        <a class="nav-link" href="data.php">Data</a>
      </li> 

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Data Types
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="data-type-string.php">String</a>
          <a class="dropdown-item" href="data-type-boolean.php">Boolean</a>
          <a class="dropdown-item" href="data-type-integer.php">Integer</a>
          <a class="dropdown-item" href="data-type-float.php">Float</a>         
         
        </div>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="array.php">Array</a>
      </li> 

       <li class="nav-item active">
        <a class="nav-link" href="object.php">Object</a>
       </li> 

       <li class="nav-item active">
        <a class="nav-link" href="variable.php">Variable</a>
       </li> 

        <li class="nav-item active">
        <a class="nav-link" href="constant.php">Constant</a>
       </li> 
     
    </ul>
   
  </div>
</nav>