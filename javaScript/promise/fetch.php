<?php include_once '../../inc/header.php'; ?>
<div class="container">
  <?php include_once '../js.nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">fetch</h1>

      <h3>fetch</h3>
      <div>
        <p>The fetch function is a modern JavaScript function that is used to make network requests, such as requesting data from a server. It is designed to be a replacement for the older XMLHttpRequest API, and it provides a more powerful and flexible way to perform HTTP requests.</p>
      
        <pre>
  fetch('https://example.com/data.json')
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error(error);
  });

  </pre>
  
  <p>In the example above, the fetch function is used to make a GET request to the specified URL. It returns a Promise that resolves to a Response object when the request is complete. The then method is used to register a callback function that will be called when the Promise is resolved. The response.json function is used to parse the response as JSON, and it returns a Promise that resolves to the parsed data when the operation is complete. The catch method is used to register a callback function that will be called if the Promise is rejected..</p>  
      
        <hr />
        <hr />
      </div>

      <h3>Options</h3>
      <div>
        <p>The fetch function has a number of options that you can use to customize the request. For example, you can use the method option to specify the HTTP method to use (e.g., GET, POST, PUT, DELETE), the headers option to specify the request headers, and the body option to specify the request body.</p>
        <pre>
  fetch('https://example.com/api/create', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    title: 'My Post',
    body: 'This is the body of my post',
    userId: 1
  })
})
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error(error);
  });

        </pre>
      </div>
     

      
    </div>
  </div>
</div>

<?php include_once '../../inc/footer.php'; ?>
