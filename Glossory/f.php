<?php include_once '../inc/header.php'; ?>
<div class="container">

    <?php include_once 'nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
             <h1>F</h1>  

            <h3>foreign key</h3>
            <p>A foreign key is a column or set of columns in a relational database table that is used to establish and enforce a link between the data in two tables. It acts as a unique identifier for a row in one table that relates to a row in another table. The table containing the foreign key is called the child table, and the table containing the primary key is called the parent table.</p>
            <p>Foreign keys are used to maintain referential integrity in a relational database, which ensures that data is consistent and accurate. For example, if a row in the parent table is deleted, any related rows in the child table that have a foreign key referencing that row will also be deleted.</p>
            <p>A foreign key is usually specified using the keyword FOREIGN KEY in the column definition, and it is typically accompanied by a REFERENCES clause that indicates the table and column that the foreign key references.</p>
            <pre>
            CREATE TABLE orders (
              order_id INT PRIMARY KEY,
              customer_id INT,
              FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
            );
            </pre>
            <p>In this example, the orders table has a foreign key named customer_id that references the customer_id column in the customers table.</p> 
            <hr>

            <h3>foreign key constraint</h3>
            <p>A foreign key constraint is a type of database constraint that is used to enforce a link between data in two tables. It is used to maintain referential integrity, which ensures that relationships between tables are consistent and accurate. A foreign key is a column or set of columns in one table that refers to the primary key of another table. When a foreign key constraint is in place, the database will not allow any data to be inserted or updated in the foreign key column(s) unless there is a corresponding entry in the primary key column(s) of the referenced table. This helps to ensure that data is consistent and correctly linked across multiple tables in the database.</p>           
            <hr>

            <h3>Facade (laravel)</h3>
            <p>In Laravel, a facade is a design pattern used to provide a simple and static interface to a complex subsystem or set of classes. Laravel's facades provide a convenient way to access classes in the Laravel service container without needing to explicitly instantiate them.</p>
            <p>A Laravel facade serves as a static proxy to underlying classes registered in the service container. It allows you to access the functionality of these classes using static method calls, providing a clean and expressive syntax.</p>
            <p>To use a Laravel facade, you don't need to instantiate the underlying class directly or bind it to a variable. Instead, you can directly call static methods on the facade, which will be dynamically resolved by Laravel.</p>
            <p>For example, the DB facade allows you to interact with the database through static method calls. Instead of manually creating a database connection or accessing the underlying Illuminate\Database\Connection instance, you can use the DB facade to perform database operations:</p>
            <p><code>DB::table('users')->get();</code></p>
            <p>Behind the scenes, Laravel resolves the DB facade to the underlying Illuminate\Database\Connection instance registered in the service container. This abstraction simplifies the usage and provides a cleaner syntax for database operations.  </p>
            <p>Laravel provides various facades for commonly used components, such as caching, authentication, routing, and more. These facades allow you to interact with the underlying classes and components in a simplified and expressive way, without the need for explicit instantiation or dependency injection.</p>
           <hr>


           </div>

    </div>
</div>



<?php include_once '../inc/footer.php'; ?>

