<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
           <h2 class="text-danger">How laravel works</h2>


           <h3 class="text-success">Introduction</h3>
          <div>
          <p>At a high level, Laravel works by receiving an HTTP request and routing it to a designated controller action. The controller processes the request and returns an HTTP response.</p>
           <ol>
             <li>A user makes an HTTP request to a Laravel app.</li>
             <li>Laravel routes the request to the appropriate controller action.</li>
             <li>The controller processes the request and retrieves any necessary data from a database or other sources.</li>
             <li>The controller prepares an HTTP response and returns it to the user.</li>

           </ol>

           <p>Laravel also provides a range of features to make it easier to build web applications, such as:</p>
            <ul>
              <li>A template engine for creating dynamic HTML views</li>
              <li>Libraries for common web application tasks, such as form validation and authentication</li>
              <li>An ORM (Object-Relational Mapper) for working with databases</li>
              <li>Tools for testing and debugging your code</li>
            </ul>

           <hr>
           <hr>
          </div>

          <h3>how larvel request works</h3>
          <div>
            <p>In Laravel, an HTTP request is received by the framework's router. The router is responsible for mapping the request to a specific controller action.</p>
            <p>Here's a more detailed look at how this process works:</p>
            <ol>
              <li>A user makes an HTTP request to a Laravel app.</li>
              <li>The Laravel router receives the request and examines the URL, HTTP verb, and other information to determine which controller action should handle the request.</li>
              <li>The router maps the request to the appropriate controller action and passes the request to the controller.</li>
              <li>The controller processes the request and retrieves any necessary data from a database or other sources.</li>
              <li>The controller prepares an HTTP response and returns it to the user.</li>

            </ol>
            <p>The process of routing requests to controller actions is configurable, so you can specify which actions should be called for different URLs and HTTP verbs. You can also define middleware to run before or after a request is routed to a controller action.</p>
          </div>




           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
