<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>
    <h2>Requests</h2>

    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
          
           </div>


           <div class="col-8">



           <h3>The Default Route Files</h3>
           <a href="https://laravel.com/docs/master/routing#the-default-route-files" target="_blank">Doc v-10</a>
           <hr>
           <hr>


           <h3>Available Router Methods</h3>
           <p>The router allows you to register routes that respond to any <a href="http://tanvirprogrammingdocs.test/http/HTTP_verb.php" target="_blank">HTTP verb</a>:</p>
           <pre class="pt-4">
        Route::get($uri, $callback);
        Route::post($uri, $callback);
        Route::put($uri, $callback);
        Route::patch($uri, $callback);
        Route::delete($uri, $callback);
        Route::options($uri, $callback);
        Route::match(['get', 'post'], '/', function () {  });
        Route::any('/', function () {});
           </pre>
           <p>
               When defining multiple routes that share the same URI, routes using the <span>get, post, put, patch, delete,</span> and <span>options</span> methods should be defined before routes using the <span>any, match</span>, and <span>redirect</span> methods. This ensures the incoming request is matched with the correct route.
           </p>
           <hr>
           <hr>

           <h3>Dependency Injection</h3>
            <h1>Nothing</h1>
            <hr>
            <hr>

           <h3>Available Router Methods</h3>
                <p>For <span>POST, PUT, PATCH, or DELETE</span> use @csrf</p>
            <hr>
            <hr>

            
             <h3>Redirect Routes</h3>
            <p>By default, Route::redirect returns a 302 status code. You may customize the status code using the optional third parameter:</p>
            <pre class="pt-4">
                Route::redirect('/here', '/there', 301);
            </pre>

            <h1><span>Later</span></h1>
             <pre class="pt-4">
                Route::permanentRedirect('/here', '/there');
            </pre>
            <hr>
            <hr>


            <h3>View Routes</h3>
               <h1>Nothing</h1>
            <hr>
            <hr>


            <h3>The Route List artisan</h3>
               <pre class="pt-4">
               php artisan route:list

               // to display the route middleware 
               php artisan route:list -v

               php artisan route:list --path=api
               php artisan route:list --except-vendor
               php artisan route:list --only-vendor
               </pre>
            <hr>
            <hr>

             
            <h3>Route Required Parameters</h3>  
            <pre class="pt-4">
                Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
                // ...
            });
            </pre> 
            <p>Route parameters are injected into route callbacks / controllers based on their order - the names of the route callback / controller arguments do not matter.</p>            
            <hr>
            <hr>


             <h3>Parameters & Dependency Injection</h3>  
             <p>If your route has dependencies that you would like the Laravel service container to automatically inject into your route's callback, you should list your route parameters after your dependencies:</p>             
            <hr>
            <hr>


             <h3>Optional Parameters</h3> 
             <h1>Nothing</h1>              
            <hr>
            <hr>



             <h3>Regular Expression Constraints</h3> 
             <h1><span>Later</span></h1>              
            <hr>
            <hr>


             <h3>Named Routes</h3>  
             <p>If the named route defines parameters, you may pass the parameters as the second argument to the route function. The given parameters will automatically be inserted into the generated URL in their correct positions:</p>  
             <pre class="pt-4">
             Route::get('/user/{id}/profile', function (string $id) {
                // ...
            })->name('profile');
             
            $url = route('profile', ['id' => 1]);

            //  pass additional parameters
            $url = route('profile', ['id' => 1, 'photos' => 'yes']); 
            // /user/1/profile?photos=yes
             </pre>          
            <hr>
            <hr>


             <h3>Inspecting The Current Route</h3>
              <pre class="pt-4">
            if ($request->route()->named('profile'))
              </pre>               
            <hr>
            <hr>


             <h3>Route Groups</h3> 
             <p>Route groups allow you to share route attributes, such as middleware, across a large number of routes without needing to define those attributes on each individual route.</p>              
            <hr>
            <hr>


             <h3>Middleware</h3>  
             <h1>Nothing</h1>                 
            <hr>
            <hr>


             <h3>Controllers</h3> 
             <h1>Nothing</h1>                  
            <hr>
            <hr>


             <h3>Subdomain Routing</h3> 
             <h1><span>Later</span></h1>                     
            <hr>
            <hr>


             <h3>Route Prefixes</h3>
             <h1>Nothing</h1>                    
            <hr>
            <hr>


             <h3>Route Name Prefixes</h3>  
             <h1>Nothing</h1>                   
            <hr>
            <hr>


             <h3>Route Model Binding</h3> 
             <p>When injecting a model ID to a route or controller action, you will often query the database to retrieve the model that corresponds to that ID. Laravel route model binding provides a convenient way to automatically inject the model instances directly into your routes. For example, instead of injecting a user's ID, you can inject the entire User model instance that matches the given ID.</p>              
            <hr>
            <hr>


             <h3>Implicit Binding</h3> 
             <h1>Nothing</h1>                   
            <hr>
            <hr>


             <h3>Soft Deleted Models</h3>   
             <a href="https://laravel.com/docs/master/routing#implicit-soft-deleted-models" target="_blank">Doc v-10</a>            
            <hr>
            <hr>


             <h3>Customizing The Key</h3>   
              <a href="https://laravel.com/docs/master/routing#customizing-the-key" target="_blank">Doc v-10</a>            
            <hr>
            <hr>


             <h3>Custom Keys & Scoping</h3>
             <h1><span>Later</span></h1>                      
            <hr>
            <hr>


            <h3>Customizing Missing Model Behavior</h3>   
             <a href="https://laravel.com/docs/master/routing#customizing-missing-model-behavior" target="_blank">Doc v-10</a>             
            <hr>
            <hr>


             <h3>Implicit Enum Binding</h3> 
             <h1><span>Later</span></h1>                     
            <hr>
            <hr>




             <h3>Explicit Binding</h3> 
             <h1><span>Later</span></h1>                   
            <hr>
            <hr>

           <!--   <h3>Routes</h3>               
            <hr>
            <hr>

             <h3>Routes</h3>               
            <hr>
            <hr>

             <h3>Routes</h3>               
            <hr>
            <hr>

             <h3>Routes</h3>               
            <hr>
            <hr> -->


             <h3>Fallback Routes</h3>    
             <a href="https://laravel.com/docs/master/routing#fallback-routes" target="_blank">Doc v-10</a>           
            <hr>
            <hr>

             <h3>Rate Limiting</h3>  
             <h1>Later</h1>             
            <hr>
            <hr>

              <h3>Form Method Spoofing</h3>    
             <a href="https://laravel.com/docs/master/routing#form-method-spoofing" target="_blank">Doc v-10</a>           
            <hr>
            <hr>


             <h3>Accessing The Current Route</h3>  
             <pre class="pt-4">
                $route = Route::current(); // Illuminate\Routing\Route
                $name = Route::currentRouteName(); // string
                $action = Route::currentRouteAction(); // string
             </pre>             
            <hr>
            <hr>

             <h3>Cross-Origin Resource Sharing (CORS)</h3>  
             <h1>Later</h1>             
            <hr>
            <hr>

             <h3>Route Caching</h3>  
              <h1>Later</h1>                  
            <hr>
            <hr>

           

            



















          

         
           <h5>Table Names</h5>



           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
