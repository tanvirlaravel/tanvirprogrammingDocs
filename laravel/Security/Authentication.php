<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>
    <h2>Authentication</h2>

    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
            </ul>
           </div>
           <div class="col-8">

            <h3>PHP Authentication</h3>
            <p>Authentication is the process of verifying the identity of a user, device, or other entity in a system. It is often used to grant access to resources or functionality that are restricted to certain users or groups.</p>
            <p>There are many different methods of authentication, ranging from simple username and password combinations to more complex methods such as biometric authentication or one-time passcodes sent via text message.</p>
            <p>Regardless of the method used, the goal of authentication is to ensure that only authorized users or devices are able to access the protected resources or functionality.</p>

            <p>
                There are several ways to implement authentication in PHP, but a common approach is to use a combination of a login form and a session.
            </p>
            <p>Here's an example of how this might work:</p>
            <ol>
                <li>The user fills out a login form with their username and password.</li>
                <li>The application checks the provided credentials against a database or other data store to verify that they are correct.</li>
                <li>If the credentials are valid, the application starts a new session for the user and stores their authenticated state in a session variable.</li>
                <li>For subsequent requests, the application checks the session variable to determine whether the user is authenticated and allows or denies access to protected resources accordingly.</li>

            </ol>
            <p>It's important to note that authentication should be combined with secure practices such as hashing passwords, using secure communication channels (e.g. HTTPS), and implementing measures such as two-factor authentication to protect against attacks and unauthorized access.</p>
            <hr>
            <hr>



            <h3>Introduction</h3>
            <p> Laravel's authentication facilities are made up of "guards" and "providers"</p>
            <p>Guards define how users are authenticated for each request. Laravel ships with a <span class="text-danger">session</span> guard which maintains state using session storage and cookies. </p>
            <p>Providers define how users are retrieved from your persistent storage. Laravel ships with support for retrieving users using <span class="text-danger">Eloquent</span> and the <span class="text-danger">database query builder</span>.</p>
            <p>Guards and providers should not be confused with "roles" and "permissions". </p>
            <hr>
            <hr>

            <h3>Starter Kits</h3>
            <p>These kits automatically scaffold your application with the routes, controllers, and views</p>
            <p> <span class="text-danger">free packages</span> that provide robust, modern scaffolding of the entire authentication layer. These packages are Laravel <span class="text-danger">Breeze</span>, Laravel <span class="text-danger">Jetstream</span>, and Laravel <span class="text-danger">Fortify</span>.</p>

            <h5>Breeze</h5>
            <p>Breeze provides a wonderful starting point for beginning a fresh Laravel application </p>
            <p>Laravel Breeze is a simple, minimal implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation.</p>

            <h5>Fortify</h5>
            <p>Laravel Fortify features are cookie-based authentication as well as other features such as two-factor authentication and email verification. Fortify provides the authentication backend for Laravel <span class="text-danger">Jetstream</span> or may be used independently in combination with Laravel <span class="text-danger">Sanctum</span> to provide authentication for an <span class="text-danger">SPA</span> that needs to authenticate with Laravel.</p>


            <h5>Laravel Jetstream</h5>
            <p>Laravel Jetstream is a robust application starter kit that consumes and exposes Laravel <span class="text-danger">Fortify's</span> authentication services with a beautiful, modern UI powered by <span class="text-danger">Tailwind CSS</span>, <span class="text-danger">Livewire</span>, and / or <span class="text-danger">Inertia</span>. Laravel Jetstream includes optional support for <span class="text-danger">two-factor authentication</span>, <span class="text-danger">team support</span>, browser <span class="text-danger">session</span> management, <span class="text-danger">profile</span> management, and built-in integration with Laravel <span class="text-danger"></span>Sanctum to offer <span class="text-danger">API token</span> authentication.</p>

            <h5>Laravel's API Authentication Services</h5>
            <h2>Later</h2>
            <a href="https://laravel.com/docs/9.x/authentication#laravels-api-authentication-services">Docs</a>

            <h5>Summary & Choosing Your Stack</h5>
            <p>In summary, if your application will be accessed using a browser and you are building a monolithic Laravel application, your application will use Laravel's built-in authentication services.</p>

            <p>Next, if your application offers an API  you will choose between Passport or Sanctum . In general, Sanctum should be preferred when possible since it is a simple.</p>

            <p>single-page application (SPA) use Laravel Sanctum. </p>
            <p>Passport may be chosen when your application absolutely needs all of the features provided by the OAuth2 specification.</p>

            <p>to get started quickly, Laravel Breeze</p>
            <hr>
            <hr>

            <h3>Database Considerations</h3>
            <p>By default, Laravel includes an <span class="text-danger">App\Models\User</span> Eloquent model in your <span class="text-danger">app/Models</span> directory. This model may be used with the default Eloquent authentication driver.</p>
            <hr>
            <hr>

            <h3>Ecosystem Overview</h3>
            <p>First, consider how authentication works. When using a web browser, a user will provide their username and password via a login form. If these credentials are correct, the application will store information about the authenticated user in the user's session. A cookie issued to the browser contains the session ID so that subsequent requests to the application can associate the user with the correct session. After the session cookie is received, the application will retrieve the session data based on the session ID, note that the authentication information has been stored in the session, and will consider the user as "authenticated".</p>
            <p>When a remote service needs to authenticate to access an API, cookies are not typically used for authentication because there is no web browser. Instead, the remote service sends an API token to the API on each request. The application may validate the incoming token against a table of valid API tokens and "authenticate" the request as being performed by the user associated with that API token.</p>
            <hr>
            <hr>

            <h3>Laravel's Built-in Browser Authentication Services</h3>
            <p>Laravel includes built-in authentication and session services which are typically accessed via the <span class="text-danger">Auth</span> and <span class="text-danger">Session</span> <a href="http://tanvirprogrammingdocs.test/laravel/defination.php#facade" target="_blank">facades</a>. These features provide <span class="text-danger">cookie-based authentication</span> for requests that are initiated from web browsers. They provide <span class="text-danger">methods</span> that allow you to verify a user's credentials and authenticate the user. In addition, these services will <span class="text-danger">automatically store</span> the proper authentication data in the user's session and issue the user's session cookie.</p>
            <hr>
            <hr>

            <h3>Retrieving The Authenticated User</h3>
            <p>to interact with the currently authenticated user</p>
            <p>While handling an incoming request, you may access the authenticated user via the Auth facade's user method</p>
            <pre class="bg-dark p-2 text-white">
            use Illuminate\Support\Facades\Auth;

            Auth::user();
            Auth::id();

            if (Auth::check()) {
                // The user is logged in...
            }
            </pre>
            <hr>
            <hr>

            <h3>Protecting Routes</h3>
            <pre class="bg-dark p-2 text-white">
            Route::get('/flights', function () {
                // Only authenticated users may access this route...
            })->middleware('auth');
            </pre>
            <hr>
            <hr>

            <h3>Redirecting Unauthenticated Users</h3>
            <p>app/Http/Middleware/Authenticate.php</p>
            <pre class="bg-dark p-2 text-white">
            protected function redirectTo($request)
            {
                return route('login');
            }
            </pre>
            <hr>
            <hr>

            <h3>Specifying A Guard</h3>
            <pre class="bg-dark p-2 text-white">
            Route::get('/flights', function () {
                // Only authenticated users may access this route...
            })->middleware('auth:admin');
            </pre>
            <hr>
            <hr>

            <!-- <h3>Login Throttling</h3>
            <a href="https://laravel.com/docs/9.x/authentication#login-throttling">later</a>
            <hr>
            <hr> -->

            <!-- <h3>Manually Authenticating Users</h3>
            <a href="https://laravel.com/docs/9.x/authentication#authenticating-users">later</a>
            <hr>
            <hr> -->

            <!-- <h3>HTTP Basic Authentication</h3>
            <a href="https://laravel.com/docs/9.x/authentication#authenticating-users">later</a>
            <hr>
            <hr> -->

            <!-- <h3>Logging Out</h3>
            <a href="https://laravel.com/docs/9.x/authentication#authenticating-users">later</a>
            <hr>
            <hr> -->

            <!-- <h3>Password Confirmation</h3>
            <a href="https://laravel.com/docs/9.x/authentication#authenticating-users">later</a>
            <hr>
            <hr> -->

            <!-- <h3>Adding Custom Guards</h3>
            <a href="https://laravel.com/docs/9.x/authentication#authenticating-users">later</a>
            <hr>
            <hr> -->

            <!-- <h3>Adding Custom User Providers</h3>
            <a href="https://laravel.com/docs/9.x/authentication#authenticating-users">later</a>
            <hr>
            <hr> -->

            <!-- <h3>Social Authentication</h3>
            <a href="https://laravel.com/docs/9.x/authentication#authenticating-users">later</a>
            <hr>
            <hr> -->

            <!-- <h3>Events</h3>
            <a href="https://laravel.com/docs/9.x/authentication#authenticating-users">later</a>
            <hr>
            <hr> -->












           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
