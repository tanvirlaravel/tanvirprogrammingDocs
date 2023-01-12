<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
           <h2 class="text-danger">Getting Started</h2>


           <h3>Introduction</h3>
           <div>
             <p>Laravel provides first-party support for five databases:</p>
             <ul>
                <li>MariaDB 10.3+ (Version Policy)</li>
                <li>MySQL 5.7+ (Version Policy)</li>
                <li>PostgreSQL 10.0+ (Version Policy)</li>
                <li>SQLite 3.8.8+</li>
                <li>SQL Server 2017+ (Version Policy)</li>

             </ul>

           </div>

           <h3>Configuration</h3>
           <div>
             <code>config/database.php </code>
           </div>


            <h3>Running SQL Queries</h3>
           <div>
           <p>Once you have configured your database connection, you may run queries using the <code>DB</code> facade. The DB facade provides methods for each type of query: select, update, insert, delete, and statement.</p>
           <pre>
           use Illuminate\Support\Facades\DB;

           DB::select('select * from users where active = ?', [1]);

           DB::update(
                'update users set votes = 100 where name = ?',
                ['Anita']
            );

            DB::delete('delete from users');
            
           </pre>
          
           <hr>
           <hr>

           <h3>Database Transactions</h3>
           <p>In the context of database management systems, a transaction is a unit of work that is performed against a database. Transactions are used to ensure that the database remains in a consistent state, even in the event of a system failure or other unexpected occurrences.</p>
           <p>A transaction consists of one or more SQL statements that are executed as a single unit. If any of the statements fail, the entire transaction is rolled back, which means that all of the changes made by the transaction are undone. If all of the statements in the transaction are successful, the transaction is committed, which means that the changes are made permanent in the database.</p>
           <p>Transactions are an important concept in database systems because they allow multiple operations to be grouped together and treated as a single unit of work. This makes it possible to ensure that the database remains in a consistent state, even if errors or failures occur during the execution of the transaction. Transactions also make it possible to roll back changes if needed, which can be useful for debugging or correcting mistakes.</p>
           <pre>
           use Illuminate\Support\Facades\DB;
 
            DB::transaction(function () {
                DB::update('update users set votes = 1');
              
                DB::delete('delete from posts');
            });
          </pre>
          

           <hr>
           <hr>


           <h3>Deadlocks</h3>
           <p>A deadlock is a situation that can occur in a database management system when two or more transactions are waiting for each other to release locks on resources that they both need. As a result, each transaction is waiting for the other to complete, and neither can make progress. This creates a cycle of dependency that can cause the system to become stuck, or deadlocked.</p>
           <p>There are several ways to prevent or resolve deadlocks in a database system. One common approach is to use a lock timeout, which allows the system to automatically release locks after a certain amount of time has passed. Another approach is to use a deadlock detection algorithm, which can identify and resolve deadlocks by rolling back one of the transactions involved in the deadlock.</p>
           <p>It is also possible to design the database schema and the application code in such a way as to minimize the risk of deadlocks occurring. For example, by using a standardized order for acquiring locks on resources, or by using a technique known as lock escalation, which reduces the number of locks held by transactions.</p>
          
        
           <hr>
           <hr>

           <h3>Inspecting Your Databases</h3>
           <p>Using the db:show and db:table Artisan commands, you can get valuable insight into your database and its associated tables.</p>
           <pre>
           php artisan db:show

           php artisan db:show --database=pgsql

           php artisan db:show --counts --views

           //Table Overview
           php artisan db:table users
              </pre>
           
           <hr>
           <hr>


           <h3 class="text-success">Monitoring Your Databases</h3>
          <div>        

          <pre>
            php artisan db:monitor --databases=mysql,pgsql --max=100
          </pre>
         
        
        <hr>
        <hr>
        </div>





           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
