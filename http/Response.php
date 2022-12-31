<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">Response</h1>

      <h3>Defination</h3>
      <div>
        <p>In the context of the web and networking, a response is a message sent by a server to a client in response to a request. The response typically includes a status code (indicating whether the request was successful), headers (additional information about the response), and a body (the data or content that was requested).</p>
        
        <p>Here is an example of a simple HTTP (Hypertext Transfer .</p>
        <pre>
        HTTP/1.1 200 OK
        Content-Type: text/html

        &lt;html>
          &lt;head>
            &lt;title>Example Page&lt;/title>
          &lt;/head>
          &lt;body>
            &lt;h1>Welcome to the Example Page&lt;/h1>
            &lt;p>This is an example page&lt;/p>
          &lt;/body>
        &lt;/html>

        </pre> 

        <p>In this example, the server is responding to a request with a status code of 200 OK, indicating that the request was successful. The response also includes a Content-Type header specifying that the body of the response is in HTML format, and the body of the response includes the HTML content of the requested page..</p>

        <p>Responses are an important part of how the web works, as they enable servers to provide resources and services to clients (such as web browsers). They are also used in many other contexts, such as mobile app development and data analysis, to provide data and functionality to other systems or services.</p>
        <hr />
        <hr />
      </div>

      



     

    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
