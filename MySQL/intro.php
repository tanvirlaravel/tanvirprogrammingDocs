<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h2>Introduction</h2>
      
<div class="row">

       <div class="col-4">
       <ul id="sidebar_links"></ul>
       </div> 

       <div class="col-8">
              <h1>Introduction</h1>
              <p>In SQL, various data types are available to define the type of data that can be stored in database tables. The specific set of data types may vary between different database systems, but here are some commonly used SQL data types:</p>

              <ol>
                     <li>Numeric Data Types:</li>
                     <ul>
                            <li>INT or INTEGER: Used to store integer values.</li>
                            <li>FLOAT or REAL: Used to store floating-point numbers with single precision.</li>
                            <li>DOUBLE or DOUBLE PRECISION: Used to store floating-point numbers with double precision.</li>
                            <li>DOUBLE or DOUBLE PRECISION: Used to store floating-point numbers with double precision.</li>
                            
                     </ul>
                     <li>Character Data Types:</li>
                     <ul>
                            <li>CHAR(n): Fixed-length character string with a specified maximum length n.</li>
                            <li>VARCHAR(n): Variable-length character string with a specified maximum length n.</li>
                            <li>TEXT: Variable-length character string with no specified maximum length.</li>
                     </ul>
                     <li>Date and Time Data Types:</li>
                     <ul>
                            <li>DATE: Used to store dates without a time component.</li>
                            <li>TIME: Used to store time values without a date component.</li>
                            <li>DATETIME or TIMESTAMP: Used to store both date and time values.</li>
                            <li>INTERVAL: Used to store a duration or a time interval.</li>
                     </ul>
                     <li>Boolean Data Type:</li>
                     <ul>
                            <li>BOOLEAN or BOOL: Used to store boolean values representing true or false.</li>
                     </ul>
                     <li>Binary Data Types:</li>
                     <ul>
                            <li>BINARY(n): Fixed-length binary data with a specified maximum length n.</li>
                            <li>VARBINARY(n): Variable-length binary data with a specified maximum length n.</li>
                            <li>BLOB: Binary Large Object, used to store large binary data.</li>
                     </ul>
                     <li>Other Data Types:</li>
                     <ul>
                            <li>ENUM: Used to define a list of allowed values for a column.</li>
                            <li>SET: Similar to ENUM, but allows multiple values to be selected.</li>
                     </ul>
                     
              </ol>
              <p>These are just a few examples of SQL data types. The exact set of data types and their characteristics may vary between different database systems. It's essential to refer to the documentation of your specific database system for comprehensive details on the available data types and their usage.</p>

       </div> 
    
</div>
</div>
<?php include_once '../inc/footer.php'; ?>