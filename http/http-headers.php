<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">HTTP headers</h1>

      <h3>Defination</h3>
      <div>
        <p>HTTP headers are <code>key-value pairs</code> that are included in HTTP messages (request and response) and provide additional information about the request or response. Headers are used to pass a variety of information, such as <code>the type of data being sent or received, the client's preferred language, the client's location, and any authentication or authorization information.</code></p>       
        <hr />
        <hr />
      </div>

      <h3>HTTP request message with headers</h3>
      <div>
       
       <pre>
       POST /users HTTP/1.1
        Content-Type: application/json
        Authorization: Bearer abc123
        User-Agent: MyApp/1.0

        {
        "name": "John Smith",
        "email": "john@example.com"
        }


       </pre>
        <p>In this example, the Content-Type header specifies the type of data being sent (JSON), and the Authorization header provides a bearer token for authentication. The User-Agent header identifies the client as MyApp/1.0.</p>
        <hr />
        <hr />
      </div>

     
      <h3>HTTP response message with headers</h3>
      <div>
        
       <pre>
       HTTP/1.1 200 OK
        Content-Type: application/json
        Set-Cookie: session=abc123; Secure; HttpOnly

        {
        "id": 123,
        "name": "John Smith",
        "email": "john@example.com"
        }
       </pre>
        <p>In this example, the Content-Type header specifies the type of data being returned (JSON), and the Set-Cookie header sets a cookie on the client's browser.</p>
        <hr />
        <hr />
      </div>

      <h3>Summary</h3>
      <div>
      <p>HTTP headers are a critical component of the HTTP protocol and are used to provide additional information and context for requests and responses. There are many different types of headers that can be used, and they are specified in the HTTP specification.</p>
      
        <hr />
        <hr />
      </div>



     

    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
