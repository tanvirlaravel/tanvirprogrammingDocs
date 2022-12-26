<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">Servers</h1>

      <h3>Defination</h3>
      <div>
        <p>HTTP servers are <code>devices or software</code> that receive HTTP requests from clients and send back HTTP responses. Some examples of HTTP servers include:</p>

      <ul>
        <li><strong><span>Web servers </span></strong>: These are servers that host websites and serve web pages in response to HTTP requests from web browsers. Examples of web servers include Apache and nginx.</li>
        <li><strong><span> Application servers</span></strong>: These are servers that host applications and provide APIs (Application Programming Interfaces) for other clients to access. Application servers may also serve static content such as images or stylesheets, but their primary function is to provide access to dynamic data or functionality.</li>
        <li><strong><span>API servers </span></strong>: These are servers that provide APIs for clients to access data or functionality. API servers may be standalone servers, or they may be part of a larger application server.</li>
    
      </ul>

      <p>HTTP servers typically listen for incoming requests on a specific port (such as 80 for HTTP or 443 for HTTPS) and process the requests using a specific software stack or framework (such as PHP or Java). The server then generates an HTTP response, which includes a status code, headers, and potentially data, and sends it back to the client. The client processes the response and may display the data or take other actions based on the response.</p>
        <hr />
        <hr />
      </div>

      

    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
