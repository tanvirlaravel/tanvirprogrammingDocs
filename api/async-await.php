<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
           <div class="col-8">
           <h1 class="text-danger">async/await</h1>
          
            <h3>Defination</h3>
            <p>Async/await is a programming construct in JavaScript that allows developers to write asynchronous code that appears to be executed synchronously. It is built on top of Promises, a pattern for handling asynchronous operations in JavaScript.</p>

            <p>Async/await allows developers to write asynchronous code using a syntax that is similar to synchronous code, using the async and await keywords</p>
            <pre>
async function getData() {
  try {
    const response = await fetch('https://example.com/data');
    const data = await response.json();
    return data;
  } catch (error) {
    throw error;
  }
}

(async () => {
  try {
    const data = await getData();
    console.log(data);
  } catch (error) {
    console.error(error);
  }
})();

            </pre>

            <p>In this example, the getData() function is an async function that performs a network request to retrieve data from a server. The await keyword is used to pause the execution of the function until the result of the asynchronous operation (the network request) is returned. The try/catch block is used to handle any errors that may occur.</p>           
            <p>Async/await is a useful tool for writing asynchronous code in JavaScript and is widely used in a variety of contexts. It can make asynchronous code easier to read and understand, and it allows developers to use familiar synchronous-style syntax when working with asynchronous operations.</p>           
           <hr>
           <hr>

                 



           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>