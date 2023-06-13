<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
           <h2 class="text-danger">Query Builder</h2>


           <h3>Introduction</h3>
           <div>
             <p>Laravel's database query builder provides a <a href="http://tanvirprogrammingdocs.test/Glossory/i.php" target="_blank">interface</a>  to creating and running database queries. </p>
             <p>The Laravel query builder uses PDO parameter binding to protect your application against SQL injection attacks. There is no need to clean or sanitize strings passed to the query builder as query bindings.</p>
             <p>PDO does not support binding column names. Therefore, you should never allow user input to dictate the column names referenced by your queries, including "order by" columns.</p>

           </div>
           <hr>
           <hr>


            <h3>Retrieving All Rows From A Table</h3>
           <div>
             <p>You may use the table method provided by the DB <a href="http://tanvirprogrammingdocs.test/Glossory/f.php#Facade_(laravel)" target="_blank">facade</a> to begin a query. The table method returns a fluent query builder instance for the given table, allowing you to chain more constraints onto the query and then finally retrieve the results of the query using the get method:</p>

             <p><code>DB::table('users')->get();</code></p>
             <p>The get method returns an Illuminate\Support\<a href="http://tanvirprogrammingdocs.test/Glossory/c.php#collection_(laravel)" target="_blank">Collection</a> instance containing the results of the query where each result is an instance of the PHP stdClass object. You may access each column's value by accessing the column as a property of the object:</p>

           </div>
           <hr>
           <hr>


            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>


            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

            <h3>Introduction</h3>
           <div>
             <p></p>

           </div>
           <hr>
           <hr>

           
      





           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
