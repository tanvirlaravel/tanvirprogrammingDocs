<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
           <div class="col-8">
           <h1 class="text-danger">fetch</h1>
          
            <h3>Defination</h3>
            <p>In JavaScript, the fetch() function is a built-in function that is used to perform HTTP (Hypertext Transfer Protocol) requests. It is a modern alternative to the older XMLHttpRequest object, which was commonly used to perform HTTP requests in JavaScript.</p>

            <p>The fetch() function returns a Promise that resolves with the response to the request. The response can be accessed using the .json() or .text() methods to parse the response as JSON or text, respectively.</p>

            <pre>
fetch('https://example.com/data')
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error(error));

            </pre>

            <p>In this example, the fetch() function is used to perform a GET request to the specified URL. The then() method is used to specify a callback function that is executed when the response is returned, and the catch() method is used to handle any errors that may occur.</p>           
            <p>The fetch() function is a powerful tool for performing HTTP requests in JavaScript and is widely used in a variety of contexts, including web development and mobile app development.</p>           
           <hr>
           <hr>

        


           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>