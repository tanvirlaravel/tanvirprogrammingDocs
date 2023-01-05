<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
           <div class="col-8">
           <h1 class="text-danger">Promises</h1>
          
            <h3>Defination</h3>
            <p>In JavaScript, a Promise is an object that represents the result of an asynchronous operation</p>

            <p>A Promise can be in one of three states:</p>
           
            <ol>
                <li>Pending: The asynchronous operation has not yet completed.</li>
                <li>Fulfilled: The asynchronous operation has completed successfully and the Promise is resolved with a value.</li>
                <li>Rejected: The asynchronous operation has failed and the Promise is rejected with a reason.</li>                              
            </ol>
            <p>Promises provide a way to write asynchronous code that is easier to read and maintain than using callbacks (a common pattern for handling asynchronous operations in JavaScript). They also allow developers to chain asynchronous operations together and handle errors in a more intuitive manner.</p>

            <pre>
function getData() {
  return new Promise((resolve, reject) => {
    // Perform an asynchronous operation (such as a network request)
    fetch('https://example.com/data')
      .then(response => response.json())
      .then(data => resolve(data))
      .catch(error => reject(error));
  });
}

getData()
  .then(data => {
    // The Promise is fulfilled with the data
    console.log(data);
  })
  .catch(error => {
    // The Promise is rejected with the error
    console.error(error);
  });

            </pre>
            <p>In this example, the getData() function returns a Promise that performs a network request to retrieve data from a server. The then() method is used to specify a callback function that is executed when the Promise is fulfilled with the data, and the catch() method is used to handle any errors that may occur.</p>
           <hr>
           <hr>

          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>