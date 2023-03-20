<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">

           <div class="col-4">
                <ul id="sidebar_links"></ul>
           </div> <!-- end of col-4 -->

           <div class="col-8">
           <h4>Basic / HTTP Responses</h4>

          
           <h3>Creating Responses</h3>
           <section>
              <p>All routes and controllers should return a response to be sent back to the user's browser.</p>
              <p>The framework will automatically convert the array into a JSON response:</p>
              <p> return Eloquent collections from your routes or controllers? They will automatically be converted to JSON. </p>
              
              <hr>
              <hr>
           </section>


           <h3>Response Objects</h3>
           <section>
              <p>Returning a full Response instance allows you to customize the response's HTTP status code and headers.</p>
              

              <hr>
              <hr>
           </section>



           <h3>Eloquent Models & Collections</h3>
           <section>
              <p>You may also return Eloquent ORM models and collections directly from your routes and controllers. When you do, Laravel will automatically convert the models and collections to JSON responses while respecting the model's hidden attributes:</p>
            

              <hr>
              <hr>
           </section>



           <h3>Attaching Headers To Responses</h3>
           <section>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>

              <hr>
              <hr>
           </section>


           <h3>Cookies</h3>
           <section>
              <p>In Laravel, cookies are a simple way to store data on the client side for a specified amount of time. They can be used to store user preferences, login information, or any other data that needs to persist between requests.</p>
              <p>Here are the steps to work with cookies in Laravel:</p>
              <ul>
                <li>Setting a cookie: To set a cookie in Laravel, you can use the cookie method on the response object. For example:</li>
                <pre>
                return response('Hello World')->cookie(
                    'name', 'value', $minutes
                );
                </pre>
                <p>In this example, the cookie method creates a new cookie with the given name and value, and sets the expiration time to $minutes minutes from the current time.</p>
                <li>Retrieving a cookie: To retrieve a cookie value in Laravel, you can use the cookie method on the request object. For example:</li>
                <pre>
                $value = request()->cookie('name');
                </pre>
                <p>In this example, the cookie method returns the value of the cookie with the given name.</p>
                <li>Checking for a cookie: To check if a cookie exists in Laravel, you can use the hasCookie method on the request object. For example:</li>
                <pre>
                if (request()->hasCookie('name')) {
                    // do something
                }
                </pre>
                <p>In this example, the hasCookie method returns true if a cookie with the given name exists, and false otherwise.</p>
                <li>Deleting a cookie: To delete a cookie in Laravel, you can set its value to null and set its expiration time to a date in the past. For example:</li>
                <pre>
              return response('Hello World')->cookie(
                    'name', null, -1
                );
              </pre>
              <p>In this example, the cookie method sets the value of the cookie with the given name to null, and sets its expiration time to -1 minutes from the current time, effectively deleting the cookie.</p>
             
              </ul>
              

              <hr>
              <hr>
           </section>


           <h3>Attaching Cookies To Responses</h3>
           <section>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>

              <hr>
              <hr>
           </section>

          

         
          

           







         </div><!-- end of col-8 -->

    </div><!-- end of row -->
</div><!-- end of container -->



<?php include_once '../../inc/footer.php'; ?>
