<?php include_once '../../inc/header.php'; ?>
<div class="container">
  <?php include_once '../js.nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">callback function</h1>

      <h3>callback function</h3>
      <div>
        <p>A callback function is a function that is passed as an argument to another function, and it is called by the function when a specific event or task is complete. Callback functions are commonly used in JavaScript to perform asynchronous tasks, because they allow you to specify a function that will be called when the task is complete.</p>
      
        <pre>
function doSomethingAsync(callback) {
  setTimeout(() => {
    // do something asynchronous
    callback();
  }, 1000);
}

doSomethingAsync(() => {
  console.log('Done!');
}); 
  </pre>
  
  <p>In the example above, the doSomethingAsync function is an async function that performs some task after a delay of 1 second. The callback function is passed as an argument to doSomethingAsync, and it is called by doSomethingAsync when the task is complete. In this case, the callback function simply logs a message to the console</p>  
  <p>Callback functions can also accept arguments, which can be used to pass data or an error object back to the caller.</p>
  <pre>
function doSomethingAsync(callback) {
  setTimeout(() => {
    // do something asynchronous
    const data = {
      foo: 'bar'
    };
    callback(null, data);
  }, 1000);
}

doSomethingAsync((error, data) => {
  if (error) {
    console.error(error);
  } else {
    console.log(data);
  }
});

  </pre>
      
      
      </div>

    
     

      
    </div>
  </div>
</div>

<?php include_once '../../inc/footer.php'; ?>
