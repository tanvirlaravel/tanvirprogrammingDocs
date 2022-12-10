<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | Arrow Function</h4>
    
        <div class="row">
            
            <div class="col-3">
                sidebar
            </div>
            <div class="col-9">
            <pre class="p-3 text-white bg-dark">
            let setColor = function (color) {
                return {value: color}
            };

            let backgroundColor = setColor('Red');
            console.log(backgroundColor.value); // "Red"

            ----------------------------------------------------------------
            let setColor = color => {value: color };

Since both block and object literal use curly brackets, the JavasScript engine cannot distinguish 
between a block and an object.

To fix this, you need to wrap the object literal in parentheses as follows:

            let setColor = color => ({value: color });
            </pre>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


