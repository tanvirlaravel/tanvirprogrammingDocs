<?php include_once '../../inc/header.php'; ?>
<div class="container">
  <?php include_once '../js.nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">Async/await</h1>

      <h3>Async/await</h3>
      <div>
        <p>Async/await is a syntax that makes it easier to work with Promises and asynchronous code in JavaScript. It allows you to write asynchronous code using a synchronous-like syntax, making it easier to read and understand.</p>
        <p>To use async/await, you need to mark a function as async and use the await keyword inside the function. The await keyword can be used to wait for a Promise to be resolved, and it will pause the execution of the async function until the Promise is resolved.</p>
        <pre>
  
async function getData() {
  try {
    const response = await fetch('https://example.com/data.json');
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(error);
  }
}


        </pre>
        <hr />
        <hr />
      </div>

     

      
    </div>
  </div>
</div>

<?php include_once '../../inc/footer.php'; ?>
