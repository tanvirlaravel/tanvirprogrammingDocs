<?php include_once '../inc/header.php'; ?>
<div class="container">

    <?php include_once 'nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
             <h1>Z</h1> 

            <h3>ZEROFILL </h3>
            <p>ZEROFILL is a MySQL feature that can be used to fill the digits of a number with zeros to a certain length. This can be useful when working with numbers that need to be a specific length, such as ID numbers or product codes. The ZEROFILL attribute can be applied to a column when it is created using the following syntax:</p>
            <pre>
            CREATE TABLE table_name (
              column_name INT(5) ZEROFILL
            );
            </pre>
            <p>In this example, the column named "column_name" is an INT data type with a total length of 5 digits, and the ZEROFILL attribute is applied to it.</p>
            <p>When inserting data into this column, if the value is less than the specified length (5 in this case), it will be padded with zeros. For example, if the value is "3", it will be stored as "00003" in the column.</p>           
            <hr>

            </div>

    </div>
</div>



<?php include_once '../inc/footer.php'; ?>
