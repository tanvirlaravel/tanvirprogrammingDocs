<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    
<h1><a href="<?= $rool_url ?>defination/defination.php">Defination</a>/B</h1> 
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
            <h3>Facade (laravel)</h3>
            <p>In the Laravel web application framework, a facade is a design pattern that provides a simplified interface to a complex system. Facades in Laravel are used to provide a convenient interface to various features of the framework, such as database access, caching, and logging.</p>
            <p>Laravel facades are defined as classes that extend the Illuminate\Support\Facades\Facade base class and provide a static interface to a particular Laravel service or component. For example, the Cache facade provides a simple interface to the Laravel cache system, while the DB facade provides an interface to the database.</p>
            <pre>
            use Illuminate\Support\Facades\Cache;

            // Set a value in the cache
            Cache::put('key', 'value', $minutes);

            // Get a value from the cache
            $value = Cache::get('key');

            </pre>
            <p>Laravel facades are used to make it easier for developers to access the features of the framework, as they provide a simple and consistent interface that does not require you to instantiate classes or inject dependencies.</p>
          <!--  ##########################################################################     -->



          

       
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>