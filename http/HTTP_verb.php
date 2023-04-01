<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">HTTP verb</h1>

      <h3>Defination</h3>
      <div>
        <p>HTTP verb, also known as HTTP method, is a part of the HTTP request that specifies the action that the client wants to perform on the server.</p>
        
        <p>There are several HTTP verbs that can be used in an HTTP request, but the most common ones are:</p>

        <ol>
          <li>GET - used to retrieve a resource from the server</li>
          <li>POST - used to submit data to be processed by the server</li>
          <li>PUT - used to update a resource on the server</li>
          <li>DELETE - used to delete a resource from the server</li>
          <li>PATCH - used to partially update a resource on the server</li>
          <li>OPTIONS - used to retrieve information about the communication options available for a resource</li>
          <li>HEAD - used to retrieve the headers for a resource, without the body</li>
         
        </ol> 


        <p>HTTP verbs are an essential part of RESTful API design, as they define the operations that can be performed on resources. They are also used in web applications to perform various actions, such as submitting a form or making an AJAX request.</p>
        <p>When defining routes in a web application or an API, it's important to map the appropriate HTTP verb to the corresponding action. For example, a GET request should be mapped to a route that retrieves data from the server, while a POST request should be mapped to a route that submits data to the server.</p>
        


        <hr />
        <hr />


         <h3 class="bg-danger">communication options <span>Later</span></h3>

         <hr><hr>
      </div>

      



     

    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
