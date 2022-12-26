<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">HTTP messages</h1>

      <h3>Defination</h3>
      <div>
        <p>HTTP messages are the request and response messages that are exchanged between HTTP clients and servers.</p>       
        <hr />
        <hr />
      </div>

      <h3>request messages</h3>
      <div>
        <p>HTTP request messages are sent by clients to servers and include the following components:</p>
       <ul>
        <li>Method: This is the action being taken on the resource, such as GET, POST, PUT, DELETE, etc.</li>
        <li>URL: This is the address of the resource being requested.</li>
        <li>Headers: These are key-value pairs that provide additional information about the request, such as the type of data being sent or the client's preferred language.</li>
        <li>Data: This is any additional data being sent with the request, such as form data or a JSON payload.</li>
       
       </ul>
       <pre>
        POST /users HTTP/1.1                        // method
        Content-Type: application/json              // headers
        Authorization: Bearer abc123

        {                                           // data
        "name": "John Smith",
        "email": "john@example.com"
        }

       </pre>
        <p>In this example, the method is POST, the URL is /users, and the headers include Content-Type and Authorization. The data is a JSON payload containing the name and email of a new user.</p>
        <hr />
        <hr />
      </div>

     
      <h3>response messages</h3>
      <div>
        <p>HTTP response messages are sent by servers to clients in response to HTTP requests and include the following components:</p>
       <ul>
        <li>Status code: This is a 3-digit code that indicates the result of the request, such as 200 (OK), 404 (Not Found), 500 (Internal Server Error), etc.</li>
        <li>Headers: These are key-value pairs that provide additional information about the response, such as the type of data being returned or any additional metadata.</li>
        <li>Data: This is the data being returned by the server, such as HTML, CSS, or JSON.</li>
       
       </ul>
       <pre>
        HTTP/1.1 200 OK
        Content-Type: application/json

        {
        "id": 123,
        "name": "John Smith",
        "email": "john@example.com"
        }

       </pre>
        <p>In this example, the status code is 200 OK, and the headers include Content-Type. The data is a JSON payload containing the user's ID, name, and email.</p>
        <hr />
        <hr />
      </div>

      <h3>Summary</h3>
      <div>
      <p>HTTP messages are a critical component of the HTTP protocol and are used to exchange data and information between clients and servers.</p>
      
        <hr />
        <hr />
      </div>



     

    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
