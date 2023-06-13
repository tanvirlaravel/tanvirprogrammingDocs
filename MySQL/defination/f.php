
            <section class="eager load">
            <h1 id="f">F</h1> <a href="#foreign-key">foreign key</a>
           | <a href="#foreign-key-constraint">foreign key constraint</a>

            <h3 id="foreign-key">foreign key</h3>
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

            <h3 id="foreign-key-constraint">foreign key constraint</h3>
            <p>A foreign key constraint is a type of database constraint that is used to enforce a link between data in two tables. It is used to maintain referential integrity, which ensures that relationships between tables are consistent and accurate. A foreign key is a column or set of columns in one table that refers to the primary key of another table. When a foreign key constraint is in place, the database will not allow any data to be inserted or updated in the foreign key column(s) unless there is a corresponding entry in the primary key column(s) of the referenced table. This helps to ensure that data is consistent and correctly linked across multiple tables in the database.</p> 

            <a href="#f" class="p-1 d-inline-block bg-danger text-white  float-right">F Top</a>
            </section>
            <hr>
            <hr>