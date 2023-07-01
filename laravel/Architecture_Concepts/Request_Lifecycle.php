<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
           <h2 class="text-danger">Request Lifecycle</h2>

           <h3>First Steps</h3>
           <div>
            <p>The entry point for all requests to a Laravel application is the <code>public/index.php</code> file. All requests are directed to this file by your web server (Apache / Nginx) configuration</p>

            <p>The index.php file loads the Composer generated autoloader definition, and then retrieves an instance of the Laravel application from <code>bootstrap/app.php</code>. The first action taken by Laravel itself is to create an instance of the application / <code>service container</code>.</p>
           </div>


           <h3 class="text-success">Introduction</h3>
          <div>
          <p>In Laravel, middleware provides a way to intercept HTTP requests and take action based on the request. It acts as a bridge between a request and a response.</p>
          <p>You can use middleware to perform tasks such as authentication, rate limiting, or modifying the request or response.</p>
          <p>There are two types of middleware in Laravel: global middleware and route middleware.</p>
          <p>Global middleware runs on every HTTP request. You can specify global middleware in the <code>app/Http/Kernel.php</code> file.</p>
          <p>Route middleware only runs on specific routes or route groups. You can specify route middleware in the <code>app/Http/Kernel.php</code> file, and then apply it to routes in the <code>routes/web.php</code> file. </p>
          <pre>
            // app/Http/Kernel.php

            protected $routeMiddleware = [
                'auth' => \App\Http\Middleware\Authenticate::class,
                'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
            ];

            // routes/web.php

            Route::get('/profile', 'ProfileController@show')->middleware('auth');
            </pre>
          <p>In this example, the auth middleware is applied to the <code>/profile</code> route. This means that the Authenticate middleware will be run before the <code>ProfileController@show</code> action is called.</p>

           <hr>
           <hr>
          </div>

        <h3>Middleware List</h3>
        <div>
          <ul>
              <li>Illuminate\Auth\Middleware\Authenticate: Forces authentication for a route.</li>
              <li>Illuminate\Auth\Middleware\Authorize: Limits access to routes based on user permissions.</li>
              <li>Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse: Adds queued cookies to the response.</li>
              <li>Illuminate\Cookie\Middleware\EncryptCookies: Encrypts cookies.</li>
              <li>Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode: Returns a maintenance mode response if the application is in maintenance mode.</li>
              <li>Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull: Converts empty string request values to null.</li>
              <li>Illuminate\Foundation\Http\Middleware\TrimStrings: Trims string request values.</li>
              <li>Illuminate\Routing\Middleware\SubstituteBindings: Substitutes route model bindings into route parameters.</li>
              <li>Illuminate\Session\Middleware\AuthenticateSession: Authenticates session data.</li>
              <li>Illuminate\Session\Middleware\StartSession: Starts the session.</li>
              <li>Illuminate\View\Middleware\ShareErrorsFromSession: Shares error messages from the session with the view.</li>

          </ul>
        </div>





           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
