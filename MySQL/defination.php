<?php include_once '../inc/header.php'; ?>
<div class="container">

    <?php include_once 'nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <a href="#c" class="p-2 display-4 d-inline-block bg-dark text-warning ">C</a>
            <a href="#f" class="p-2 display-4 d-inline-block bg-dark text-warning ">F</a>
            <a href="#z" class="p-2 display-4 d-inline-block bg-dark text-warning ">Z</a>
           </div>
           <div class="col-8">
           <!
            ================
            cccccccccccccccccccccccccccccc
            ================
            -->
            <section class="eager load">
            <h1 id="c">C</h1> <a href="#foreign-key">constraint (database)</a>

            <h3 id="foreign-key">constraint (database)</h3>
            <p>A database constraint is a rule or restriction that is applied to the data in a database to maintain integrity and accuracy. It is used to ensure that the data in a database adheres to certain conditions or follows specific rules. Some examples of constraints that can be applied to a database include:</p>
            <ul>
              <li>Primary key constraint: Enforces unique values for a specific column or set of columns and prevents duplicate data.</li>
              <li>Primary key constraint: Enforces unique values for a specific column or set of columns and prevents duplicate data.</li>
              <li>Not null constraint: Ensures that a column cannot have a null value.</li>
              <li>Check constraint: Allows you to specify a condition that must be met for data to be inserted or updated in a table.</li>
              <li>Unique constraint: Enforces unique values across one or more columns and prevents duplicate data.</li>
              <li>Default constraint: Provides a default value for a column when no value is specified.</li>
             
            </ul>
           <p>These constraints help to ensure that the data in a database is accurate, consistent, and follows certain rules, which ultimately makes the data more reliable and trustworthy.</p>

            <a href="#c" class="p-1 d-inline-block bg-danger text-white  float-right">C Top</a>
            </section>
            <hr>
            <hr>

           <!
            ================
            fffffffffffffffffffffffffffffff
            ================
            -->
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

            <!
            ================
            zzzzzzzzzzzzzzzzzzzzzzzzz
            ================
            -->
            <section class="eager load">
            <h1 id="z">Z</h1> <a href="#ZEROFILL">ZEROFILL </a>

            <h3 id="ZEROFILL">ZEROFILL </h3>
            <p>ZEROFILL is a MySQL feature that can be used to fill the digits of a number with zeros to a certain length. This can be useful when working with numbers that need to be a specific length, such as ID numbers or product codes. The ZEROFILL attribute can be applied to a column when it is created using the following syntax:</p>
            <pre>
            CREATE TABLE table_name (
              column_name INT(5) ZEROFILL
            );
            </pre>
            <p>In this example, the column named "column_name" is an INT data type with a total length of 5 digits, and the ZEROFILL attribute is applied to it.</p>
            <p>When inserting data into this column, if the value is less than the specified length (5 in this case), it will be padded with zeros. For example, if the value is "3", it will be stored as "00003" in the column.</p>
           
            <a href="#f" class="p-1 d-inline-block bg-danger text-white  float-right">Z Top</a>
            </section>
            <hr>
            <hr>

           







           </div>
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>
