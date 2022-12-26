<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">Status code</h1>

      <h3>Defination</h3>
      <div>
        <p>HTTP status codes are standard response codes that servers send to clients when they request a webpage or other resource. These codes <code>indicate</code> whether a request was successful, and if not, what kind of error occurred. Here are some common HTTP status codes:</p>
        <ul>
            <li>200 OK: The request was successful and the server returned the requested resource.</li>
            <li>301 Moved Permanently: The requested resource has been moved to a new URL.</li>
            <li>302 Found: The requested resource has been temporarily moved to a different URL.</li>
            <li>400 Bad Request: The request could not be understood by the server due to malformed syntax.</li>
            <li>401 Unauthorized: The request requires authentication.</li>
            <li>403 Forbidden: The server understood the request but refuses to authorize it.</li>
            <li>404 Not Found: The requested resource could not be found on the server.</li>
            <li>500 Internal Server Error: An unexpected condition was encountered by the server, which prevented it from fulfilling the request.</li>           
        </ul>   
        <p>There are many other HTTP status codes, each representing a specific type of response. For example, there are codes for redirecting the client to a different resource, for indicating that a request must be completed using a different HTTP method, and for indicating that the requested resource has been permanently deleted.</p>   
        <hr />
        <hr />
      </div>

      



     

    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
