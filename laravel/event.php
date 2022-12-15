<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h1>Events</h1>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
           <h3>Defination</h3>
           <p>Laravel events are a way to simple observer pattern implementation of the <span class="text-danger">activity of your application</span>.</p>
           <p>Like you want to monitor, when your application user login from which IP you can execute some function using events. If you have an e-commerce site, sometimes you need to notify or send an SMS to your vendor whenever a new order is placed. So, we can call events as action takers of our application. </p>
           <p>a single event can have multiple listeners that do not depend on each other</p>
           <p>An event class is essentially a data container which holds the information related to the event.</p>
           <hr>

           
           <h3>What is a Listener in Laravel</h3>
           <p>In the Laravel, the listener is <span class="text-danger">a class</span> that performs event instructions</p>
           <p>For example, you want to send a one-time welcome mail to your client when they register on your site. In this case, we can set an event that calls a listener to send the mail.</p>
           <hr>
           

           <h3>Event and Listener Binding in Laravel</h3>
           <p>Before we started, we needed to know where we had to register for the event. It’s called <span class="text-danger">EventServiceProvider</span>, where we register our event and listeners. It’s located in the <strong>app\Providers</strong> directory.</p>
           <hr>

           <h3>Generating Events & Listeners</h3>
           <pre class="p-2 text-white bg-dark">
           php artisan event:generate
           </pre>

           <h3>Queued Event Listeners</h3>
           <a href="https://laravel.com/docs/9.x/events#queued-event-listeners" target="_blank">Doc</a>
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>