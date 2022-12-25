<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
           <h2 class="text-danger">Mysql data types</h2>


           <h3 class="text-success">Introduction</h3>
           <p>In MySQL, data types are used to specify the <code>type of data that can be stored in a column</code> of a table. </p>
           <ul>
           <li><strong><span class="text-danger"> INT   </span></strong>
           A signed integer data type that can store values ranging from -2147483648 to 2147483647.
             </li>

             <li><strong><span class="text-danger">  BIGINT  </span></strong>
             A signed integer data type that can store values ranging from -9223372036854775808 to 9223372036854775807.
             </li>
             <li><strong><span class="text-danger"> TINYINT   </span></strong>
             A signed integer data type that can store values ranging from -128 to 127.
             </li>
             <li><strong><span class="text-danger">  SMALLINT  </span></strong>
             A signed integer data type that can store values ranging from -32768 to 32767.
             </li>
             <li><strong><span class="text-danger">  FLOAT  </span></strong>
             A floating-point data type that can store values with a decimal point.
             </li>
             <li><strong><span class="text-danger">  DOUBLE  </span></strong>
             A floating-point data type that can store values with a larger range and precision than the FLOAT data type.
             </li>
             <li><strong><span class="text-danger">  DECIMAL  </span></strong>
             A fixed-point data type that can store values with a decimal point. The DECIMAL data type is more precise than the FLOAT and DOUBLE data types, but it has a smaller range.
             </li>
             <li><strong><span class="text-danger">  CHAR  </span></strong>
             A fixed-length string data type that can store up to 255 characters.
             </li>
             <li><strong><span class="text-danger"> VARCHAR   </span></strong>
             A variable-length string data type that can store up to 255 characters.
             </li>
             <li><strong><span class="text-danger">  TEXT  </span></strong>
             A variable-length string data type that can store up to 65535 characters.
             </li>
             <li><strong><span class="text-danger">  DATE  </span></strong>
             A date data type that can store a date value in the format YYYY-MM-DD.
             </li>
             <li><strong><span class="text-danger"> DATETIME   </span></strong>
             A date and time data type that can store a date and time value in the format YYYY-MM-DD HH:MM:SS.
             </li>
             
           </ul>
           
           <hr>
           <hr>          

           <h3>Float</h3>
           <p>Float numbers are stored in a binary format, which means that they are not stored exactly as entered, but are approximated to a certain number of decimal places. The precision of float numbers is limited, and they can only store a certain number of decimal places accurately. As a result, float numbers can be subject to rounding errors when they are used in calculations.</p>
           <p> In MySQL, the FLOAT data type is a floating-point number with a decimal point. It can store values with approximate decimal precision, which means that the values are not stored exactly as entered, but are approximated to a certain number of decimal places. The precision of the FLOAT data type can be specified in two ways: by the number of bits used to store the mantissa of the float number, or by the number of digits after the decimal point.</p>

           <pre>
       3.14: This is the mathematical constant pi, which is approximately equal to 3.14159.
       0.001: This is a small float number with three decimal places.
       123456.789: This is a float number with seven digits before the decimal point and 
       three digits after the decimal point.
       1.23456789e+20: This is a float number in scientific notation, which represents 
       1.23456789 x 10^20.
       -0.12345: This is a negative float number with five decimal places.
           </pre>

           <p>For example, the following statement creates a table with a FLOAT column that has a precision of 8 bits:</p>
           <pre>
              CREATE TABLE my_table (
                     id INT PRIMARY KEY,
                     float_column FLOAT(8)
              );

           </pre>
           <p>This FLOAT column will be able to store values with up to 8 digits after the decimal point, but the actual precision of the stored values may be less due to the way floating-point numbers are stored.</p>
           <p>You can also specify the precision of the FLOAT data type by the number of digits after the decimal point, like this:

</p>
              <pre>
              CREATE TABLE my_table (
              id INT PRIMARY KEY,
              float_column FLOAT(8,2)
              );

              </pre>
              <p>In this case, the FLOAT column will be able to store values with up to 8 digits in total, including 2 digits after the decimal point.</p>
              <p>It's important to note that the FLOAT data type is not as precise as the DECIMAL data type, which is a more accurate data type for storing numeric values with a fixed decimal point. You should choose the FLOAT data type only if you need to store very large numbers that may have a lot of digits after the decimal point, or if you need to store values with a very large range, as the FLOAT data type can store values with a much larger range than the DECIMAL data type.</p>
              <p>It's important to note that the FLOAT data type is not as precise as the DECIMAL data type, which is a more accurate data type for storing numeric values with a fixed decimal point. You should choose the FLOAT data type only if you need to store very large numbers that may have a lot of digits after the decimal point, or if you need to store values with a very large range, as the FLOAT data type can store values with a much larger range than the DECIMAL data type.</p>

              <hr>
              <hr>

              <h3>Double</h3>
           <pre>
       3.141592653589793: This is the mathematical constant pi, which is approximately equal to 3.14159.
       0.000000000000001: This is a small double number with 14 decimal places.
       123456789012345.6789012345: This is a double number with 15 digits before the decimal point and 15 digits after the decimal point.
       1.234567890123456789e+20: This is a double number in scientific notation, which represents 1.234567890123456789 x 10^20.
       -0.123456789012345: This is a negative double number with 15 decimal places.
           </pre>
          

              <p>Like the FLOAT data type, the DOUBLE data type is stored in a binary format, which means that the values are not stored exactly as entered, but are approximated to a certain number of decimal places. The precision of the DOUBLE data type is limited, and it can only store a certain number of decimal places accurately. As a result, DOUBLE values can be subject to rounding errors when they are used in calculations.</p>

              <p>The DOUBLE data type can store values with a much larger range than the FLOAT data type, and it has a higher precision, with up to 15 digits after the decimal point. However, it is not as precise as the DECIMAL data type, which is a more accurate data type for storing numeric values with a fixed decimal point.</p>

              <pre>
              CREATE TABLE my_table (
              id INT PRIMARY KEY,
              double_column DOUBLE
              );

              </pre>
              <p>You can also specify the precision of the DOUBLE data type by the number of bits used to store the mantissa of the double number, or by the number of digits after the decimal point. For example:</p>
              <pre>
              CREATE TABLE my_table (
              id INT PRIMARY KEY,
              double_column DOUBLE(8,2)
              );

              </pre>
              <p>This DOUBLE column will be able to store double numbers with up to 8 digits in total, including 2 digits after the decimal point.</p>
           <hr>
           <hr>

           <h3>DECIMAL </h3>
           <pre>
3.14: This is the mathematical constant pi, which is approximately equal to 3.14159.
0.01: This is a small DECIMAL number with two decimal places.
123456.78: This is a DECIMAL number with six digits before the decimal point and two digits after the decimal point.
1.23456789012345: This is a DECIMAL number with 14 decimal places.
-0.12345: This is a negative DECIMAL number with five decimal places.
           </pre>

           <p>A decimal number, also known as a fixed-point number, is a type of data used to represent a number with a fixed decimal point. Decimal numbers are used to store exact decimal values, and they are often used in financial and business applications where a high degree of precision is required.</p>

           <p>Decimal numbers are stored in a binary format, which means that they are not stored exactly as entered, but are approximated to a certain number of decimal places. The precision of decimal numbers is not limited, and they can store a large number of decimal places accurately. As a result, decimal values are not subject to rounding errors when they are used in calculations.</p>

           <hr>
           <hr>

           <h3>Decimal vs Double vs Float</h3>
           <p>The Decimal, Double, and Float variable types are different in the way that they store the values. <code>Precision</code> is the main difference where float is a <code>single precision</code> (32 bit) floating point data type, double is a <code>double precision</code> (64 bit) floating point data type and decimal is a <code>128-bit floating point</code> data type.</p>
           <ol>
              <li>Float - 32 bit (7 digits)</li>
              <li>Double - 64 bit (15-16 digits)</li>
              <li>Decimal - 128 bit (28-29 significant digits)</li>
           </ol>

           <h5>
           Difference between Decimal, Float and Double
           </h5>
           <p>The main difference is Floats and Doubles are binary floating point types and a Decimal will store the value as a floating decimal point type. So Decimals have much higher precision and are usually used within monetary (financial) applications that require a high degree of accuracy. But in performance wise Decimals are slower than double and float types.</p>
           <p>Decimal can 100% accurately represent any number within the precision of the decimal format, whereas Float and Double, cannot accurately represent all numbers, even numbers that are within their respective formats precision.</p>

           <h4>When To Use Decimal, Double, and Float</h4>
           <h5>Decimal</h5>
           <p>In case of financial applications it is better to use Decimal types because it gives you a high level of accuracy and easy to avoid rounding errors       </p>
           <h5>Double</h5>
           <p>Double Types are probably the most normally used data type for real values, except handling money.</p>
           <h5>Float</h5>
           <p>It is used mostly in graphic libraries because very high demands for processing powers, also used situations that can endure rounding errors.</p>

           <h5>Approximate Range</h5>
           <img src="./img/range.png" alt="">

           <h5>Accuracy</h5>
           <ul>
              <li>Float is less accurate than Double and Decimal.</li>
              <li>Double is more accurate than Float but less accurate than Decimal.</li>
              <li>Decimal is more accurate than Float and Double.</li>
           </ul>

           
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>  