<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= $rool_url ?>">Home</a>
  <h1 class="mt-3 text-center text-info">Laravel</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="mr-auto navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="blade.php">Blade</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="event.php">Event</a>
      </li> 

      <li class="nav-item active">
        <a class="nav-link" href="file_storage.php">File Storage</a>
      </li> 

      

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Eloquent
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="Eloquent_Getting_Started.php">Getting Started</a>
          <a class="dropdown-item" href="#">Relationships</a>         
          <a class="dropdown-item" href="#">Collections</a>
          <a class="dropdown-item" href="#">Mutators & Casting</a>
          <a class="dropdown-item" href="#">API Resources</a>
          <a class="dropdown-item" href="#">Serialization</a>
          <a class="dropdown-item" href="#">Factories</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Security
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="Authentication.php">Authentication</a>
          <a class="dropdown-item" href="Authorization.php">Authorization</a>
          <a class="dropdown-item" href="Email_Verification.php">Email Verification</a>
          <a class="dropdown-item" href="Encryption.php">Encryption</a>
          <a class="dropdown-item" href="Hashing.php">Hashing</a>
          <a class="dropdown-item" href="Resetting_Passwords.php">Resetting Passwords</a>
          
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="defination.php">Defination</a>
      </li> 

    </ul>
    <!-- <form class="my-2 form-inline my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="my-2 btn btn-outline-success my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>