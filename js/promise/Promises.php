<?php include_once '../../inc/header.php'; ?>
<div class="container">
  <?php include_once '../js.nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">Promises</h1>

      <h3>Promises</h3>
      <div>
        <p>JavaScript Promises are a language feature that provides a mechanism to handle asynchronous code in a more synchronous-like style. They enable you to write asynchronous code that looks and behaves like synchronous code, making it easier to reason about and work with.</p>
        <p>A Promise represents the eventual completion or failure of an asynchronous operation, and its resulting value. It provides a way to create a chain of asynchronous functions that execute in a specific order, and to handle errors that may occur along the way.</p>
        <pre>
  function doSomethingAsync() {
  return new Promise((resolve, reject) => {
    // do something asynchronous
    if (success) {
      resolve(value);
    } else {
      reject(error);
    }
  });
}

doSomethingAsync()
  .then(result => {
    // handle the success case
  })
  .catch(error => {
    // handle the error case
  });
  </pre>
  
  <p>In the example above, doSomethingAsync is a function that returns a Promise. The Promise is created using the Promise constructor, which takes a function called the "executor" as an argument. The executor function is called immediately when the Promise is created, and it receives two arguments: resolve and reject.</p>

  <p>The resolve function is used to indicate that the asynchronous operation has completed successfully, and it is called with the result of the operation as an argument. The reject function is used to indicate that the asynchronous operation has failed, and it is called with an error object as an argument.</p>
  <p>The then method is used to register a callback function that will be called when the Promise is resolved. The callback function receives the result of the asynchronous operation as an argument. The catch method is used to register a callback function that will be called if the Promise is rejected. The callback function receives the error object as an argument.</p>

  <p>In the example above, the getData function is marked as async, which means it returns a Promise. The fetch function is used to make a network request, and it returns a Promise. The await keyword is used to wait for the Promise returned by fetch to be resolved. If the Promise is resolved, the value is assigned to the response variable. If the Promise is rejected, the error is caught in the catch block.</p>
  <p>The response.json function is used to parse the response as JSON, and it also returns a Promise. The await keyword is used to wait for the Promise to be resolved, and the resulting value is assigned to the data variable.</p>
  <p>Async/await makes it easier to write asynchronous code that is easier to read and understand, because it looks and behaves like synchronous code. However, it is important to remember that async/await code is still asynchronous, and it will not block the main thread.</p>
      
        <hr />
        <hr />
      </div>

     

      
    </div>
  </div>
</div>

<?php include_once '../../inc/footer.php'; ?>
