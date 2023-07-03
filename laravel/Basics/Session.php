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

           <h1>Session</h1>          

<h3>Intro</h3> 
<div>
    <p>Since HTTP driven applications are stateless, sessions provide <code>a way to store information</code> about the user across <code> multiple requests</code> . That user information is typically placed in a persistent store / backend that can be accessed from subsequent requests.</p>
    <p></p>
</div>                  
<hr>
<hr>

<h3>Configuration</h3> 
<div>
    <p>By default, Laravel is configured to use the file session <a href="http://tanvirprogrammingdocs.test/Glossory/d.php#Driver" target="_blank">driver</a></p>
    <p>Driver Lists</p>
    <ul>
        <li>file</li>
        <li>cookie</li>
        <li>database</li>
        <li>memcached / redis</li>
        <li>dynamodb</li>
        <li>array </li>
       
    </ul>
</div>                  
<hr>
<hr>

<h3>Retrieving Data</h3> 
<div>
    <p>There are two primary ways of working with session data in Laravel</p>
    <ol>
        <li>the global <code>session</code> helper </li>
        <li><code>Request</code> instance</li>
    </ol>
    <h5>pass a default value</h5>
    <pre>
$value = $request->session()->get('key', 'default');
 
 $value = $request->session()->get('key', function () {
     return 'default';
 });
</pre>

<pre>

    // Retrieve a piece of data from the session...
    $value = session('key');
 
    // Specifying a default value...
    $value = session('key', 'default');
 
    // Store a piece of data in the session...
    session(['key' => 'value']);
    </pre>
    <h5>Retrieving All Session Data</h5>
    <pre>
    $request->session()->all();
    </pre>

    <h5>Determining If An Item Exists In The Session</h5>
    <pre>
    if ($request->session()->has('users'))
    if ($request->session()->exists('users')) 
    if ($request->session()->missing('users'))
    </pre>
    <p></p>
</div>                  
<hr>
<hr>


<h3>Storing Data</h3> 
<div>
    <pre>
// Via a request instance...
$request->session()->put('key', 'value');
 
// Via the global "session" helper...
session(['key' => 'value']);
    </pre>
    <p></p>
</div>                  
<hr>
<hr>


<h3>Retrieving & Deleting An Item</h3> 
<div>
    <pre>
    $value = $request->session()->pull('key', 'default');
    </pre>
    <p></p>
</div>                  
<hr>
<hr>

<h3>Flash Data</h3> 
<div>
    <p>Sometimes you may wish to store items in the session for the next request. You may do so using the flash method. Data stored in the session using this method will be available immediately and during the subsequent HTTP request. After the subsequent HTTP request, the flashed data will be deleted. Flash data is primarily useful for short-lived status messages:</p>
    <pre>
    $request->session()->flash('status', 'Task was successful!');
    </pre>

    <p>If you need to persist your flash data for several requests, you may use the reflash method, which will keep all of the flash data for an additional request. If you only need to keep specific flash data, you may use the keep method:</p>
    <pre>
    $request->session()->reflash();
 
 $request->session()->keep(['username', 'email']);
    </pre>
    <p>To persist your flash data only for the current request, you may use the now method:</p>
    <pre>
    $request->session()->now('status', 'Task was successful!');
    </pre>
   
</div>                  
<hr>
<hr>

<h3>Deleting Data</h3> 
<div>
    <p>The forget method will remove a piece of data from the session. If you would like to remove all data from the session, you may use the flush method:</p>
    <pre>
    // Forget a single key...
$request->session()->forget('name');
 
// Forget multiple keys...
$request->session()->forget(['name', 'status']);
 
$request->session()->flush();
    </pre>
</div>                  
<hr>
<hr>

<h3>Regenerating The Session ID</h3> 
<div>
    <p></p>
    <p></p>
</div>                  
<hr>
<hr>

<h3>Caching</h3> 
<div>
    <p></p>
    <p></p>
</div>                  
<hr>
<hr>

<h3>Caching</h3> 
<div>
    <p></p>
    <p></p>
</div>                  
<hr>
<hr>

<h3>Caching</h3> 
<div>
    <p></p>
    <p></p>
</div>                  
<hr>
<hr>

<h3>Caching</h3> 
<div>
    <p></p>
    <p></p>
</div>                  
<hr>
<hr>

<h3>Caching</h3> 
<div>
    <p></p>
    <p></p>
</div>                  
<hr>
<hr>

           

            



















          

         
           <h5>Table Names</h5>



           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
