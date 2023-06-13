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