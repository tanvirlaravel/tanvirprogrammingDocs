<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h1>Blade</h1>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
           <div class="col-8">
          
            <h3>Introduction</h3>
            <p>Blade does not restrict you from using plain PHP code in your templates. In fact, all Blade templates are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application.</p>

            <hr>
            <h3>Displaying Data</h3>
            <p>Blade's {{ }} echo statements are automatically sent through PHP's htmlspecialchars function to prevent XSS attacks.</p>
            <p>You may also echo the results of any PHP function</p>
            <pre class="bg-dark p-2 text-white">
            The current UNIX timestamp is {{ time() }}.
            </pre>
            <hr>

            <h3>HTML Entity Encoding</h3>
            <p>By default, Blade (and the Laravel <span class="text-danger">e</span> helper) will double encode HTML entities. If you would like to disable double encoding, call the  <span class="text-danger">Blade::withoutDoubleEncoding</span> method from the boot method of your  <span class="text-danger">AppServiceProvider</span>:</p>
            <hr>

            <h3>Displaying Unescaped Data</h3>
            <pre class="bg-dark p-2 text-white">
            Hello, {!! $name !!}.
            </pre>
            <hr>

            <h3>Blade & JavaScript Frameworks</h3>
            <pre class="bg-dark p-2 text-white">
            &lt;h1>Laravel&lt;/h1> 
            Hello, @{{ name }}.
            </pre>
            <p>In this example, the @ symbol will be removed by Blade; however, {{ name }} expression will remain untouched by the Blade engine, allowing it to be rendered by your JavaScript framework.</p>
            <p>The @ symbol may also be used to escape Blade directives:</p>
            <pre class="bg-dark p-2 text-white">
            {{-- Blade template --}}
            @@if()
            
            <!-- HTML output -->
            @if()
            </pre>
            <hr>
            
            <h3>Rendering JSON</h3>
            <a href="https://laravel.com/docs/9.x/blade#rendering-json">Docs</a>
            <hr>

            <h3>Blade Directives</h3>

           
          

          

           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>