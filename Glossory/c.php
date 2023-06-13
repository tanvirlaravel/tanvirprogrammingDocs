<?php include_once '../inc/header.php'; ?>
<div class="container">

    <?php include_once 'nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
             <h1>C</h1>            

             <h3>constraint (database)</h3>
             <div>
            <p>A database constraint is a rule or restriction that is applied to the data in a database to maintain integrity and accuracy. It is used to ensure that the data in a database adheres to certain conditions or follows specific rules. Some examples of constraints that can be applied to a database include:</p>
            <ul>
              
              <li>Primary key constraint: Enforces unique values for a specific column or set of columns and prevents duplicate data.</li>
              <li>Not null constraint: Ensures that a column cannot have a null value.</li>
              <li>Check constraint: Allows you to specify a condition that must be met for data to be inserted or updated in a table.</li>
              <li>Unique constraint: Enforces unique values across one or more columns and prevents duplicate data.</li>
              <li>Default constraint: Provides a default value for a column when no value is specified.</li>
             
            </ul>
           <p>These constraints help to ensure that the data in a database is accurate, consistent, and follows certain rules, which ultimately makes the data more reliable and trustworthy.</p>
         </div>
           <hr>

           <h3>collection (laravel)</h3>
           <div>
             <p>In Laravel, a collection is a powerful utility class provided by the framework that allows you to work with arrays of data in a more expressive and convenient way. It provides a wide range of methods for manipulating and transforming data, making it easier to perform common operations on arrays or query results.</p>
             <p>Laravel's collection class (Illuminate\Support\Collection) extends the native PHP ArrayObject class and provides additional methods and functionality. You can create a collection from an array or an existing collection using the collect() helper function or by calling the collect() method on an array.</p>
             <p>Collections in Laravel allow you to avoid repetitive loops and provide a consistent and chainable interface for working with data. They provide methods for sorting, searching, aggregating, mapping, filtering, and more, making it easier to manipulate and transform data in a concise and readable way.</p>
            
           </div>
           <hr>
          



           </div>

    </div>
</div>



<?php include_once '../inc/footer.php'; ?>


