<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">HTTP methods</h1>

      <h3>Defination</h3>
      <div>
        <p>HTTP methods, also known as <code>HTTP verbs</code>, are the <code>actions</code> that can be taken on a resource in an HTTP-based system. The most commonly used HTTP methods are:</p>
        <ul>
            <li>GET: This method retrieves a resource from the server.</li>
            <li>POST: This method creates a new resource on the server.</li>
            <li>PUT: This method updates an existing resource on the server.</li>
            <li>DELETE: This method deletes a resource from the server.</li>
        </ul>   
        <p>There are also several other HTTP methods that are less commonly used, such as HEAD, OPTIONS, and TRACE.</p> 
        <p>HTTP methods are included in the request message and are <code>used by the server to determine</code> the appropriate action to take. For example, a GET request to /users might retrieve a list of users from the server, while a POST request to /users with a JSON payload might create a new user on the server.</p>   
        <hr />
        <hr />
      </div>

      



     

    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
