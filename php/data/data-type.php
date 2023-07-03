<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
   
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
         
           <div class="col-8">
            <h1>Data types</h1>

            <!-- ############################################################################ -->
            <h3>Introduction</h3>
            <div>
            
            <p>PHP uses a nominal type system with a strong behavioral subtyping relation. The subtyping relation is checked at compile time whereas the verification of types is dynamically checked at run time.</p>
            <h5>Built-in types</h5>
            <ul>
                <li>null type</li>
                <li>Scalar types:</li>
                <ul>
                    <li>bool type</li>
                    <li>int  type</li>
                    <li>float  type</li>
                    <li>string type</li>
                </ul>
                <li>array type</li>
                <li>object type</li>
                <li>resource type</li>
                <li>never type</li>
                <li>void type</li>
                <li>Relative class types: self, parent, and static</li>
                <li>NaN (it my own type)</li>
                
            </ul> 
            
            <p>Literal types</p>
            <ul>
                <li>false</li>
                <li>true</li>
            </ul>

            <p>User-defined types (generally referred to as class-types)</p>
            <ul>
                <li>Interfaces</li>
                <li>Classes</li>
                <li>Enumerations</li>
            </ul>        
            <hr>
            <hr>
</div>

            <!-- ############################################################################ -->
            <h3>NULL</h3>
            <div>
           
            <p>In PHP, the NULL type is a special data type that represents the absence of a value. A variable of the NULL type can have only one value: NULL</p>
            <p>You can use the NULL type in PHP to represent an empty or uninitialized value.</p>
            <p>Undefined, and unset() variables will resolve to the value null.</p>
            <p><code>is_null()</code> function is used to check if the variable is not NULL.</p>
            <p><code>isset()</code> function to check if a variable is set, and the <code>unset()</code> function to unset a variable. You can also use the <code>empty()</code> function to check if a variable is empty or not.</p>

            <hr>
            <hr>
</div>

            <!-- ############################################################################ --> 
            <h3>Boolean</h3>
            <div>
            <p>In PHP, a boolean value is a data type that can only have two values: <code> true or false</code>. Boolean values are used to represent the truth value of a <code>statement or expression</code>, and they are often used in <code>control structures</code>, such as if statements, to determine the flow of program execution.</p>

            <p>You can also use the boolval() function to convert other data types to boolean values in PHP</p>
            <pre>           

            $num = 123;
            $str = "abc";
            $arr = array();

            $bool1 = boolval($num); // true
            $bool2 = boolval($str); // true
            $bool3 = boolval($arr); // false

            </pre>
            <h5>Converting to boolean</h5>
            <p>When converting to bool, the following values are considered false:</p>
            <pre>
            the boolean false itself
            the integer 0 (zero)
            the floats 0.0 and -0.0 (zero)
            the empty string "", and the string "0"
            an array with zero elements
            the unit type NULL (including unset variables)
            Internal objects that overload their casting behaviour to bool. For example: SimpleXML objects created from empty elements without attributes.
            </pre>
            <hr>
            <hr>
            </div>
            
            <!-- ############################################################################ --> 
            <h3>Integers</h3>
            <div>
            <p>In PHP, an integer is a data type that represents a whole number. </p>
            <p>Ints can be specified in decimal (base 10), hexadecimal (base 16), octal (base 8) or binary (base 2) notation. The negation operator can be used to denote a negative int.</p>
            <pre>
            $a = 1234; // decimal number
            $a = 0123; // octal number (equivalent to 83 decimal)
            $a = 0o123; // octal number (as of PHP 8.1.0)
            $a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
            $a = 0b11111111; // binary number (equivalent to 255 decimal)
            $a = 1_234_567; // decimal number (as of PHP 7.4.0)
            </pre>
            <p>PHP supports four different integer types: int, integer, long, and short. These types are used to store integer values, and they have different ranges of values depending on the size of the data type.</p>
            <p>Here is a summary of the different integer types in PHP:</p>
            <pre>
        int: The int data type is a 32-bit integer type that can store values between -2147483648 and 2147483647.

        integer: The integer data type is an alias for the int data type, and it can store the same range of values as the int data type.

        long: The long data type is a 64-bit integer type that can store values between -9223372036854775808 and 9223372036854775807.

        short: The short data type is a 16-bit integer type that can store values between -32768 and 32767.
            </pre>

            <h5>Integer overflow</h5>
            <p>If PHP encounters a number beyond the bounds of the int type, it will be interpreted as a float instead. Also, an operation which results in a number beyond the bounds of the int type will return a float instead.</p>
            <pre>
            #2 Integer overflow on a 32-bit system

            $large_number = 2147483647;
            var_dump($large_number);                     // int(2147483647)

            $large_number = 2147483648;
            var_dump($large_number);                     // float(2147483648)

            $million = 1000000;
            $large_number =  50000 * $million;
            var_dump($large_number);                     // float(50000000000)

            #3 Integer overflow on a 64-bit system
            $large_number = 9223372036854775807;
            var_dump($large_number);                     // int(9223372036854775807)

            $large_number = 9223372036854775808;
            var_dump($large_number);                     // float(9.2233720368548E+18)

            $million = 1000000;
            $large_number =  50000000000000 * $million;
            var_dump($large_number);                     // float(5.0E+19)
            </pre>
            <h5>Converting to integer</h5>
            <ul>
                <li>From booleans</li>
                <li>From floating point numbers</li>
                <li>From strings</li>
                <li>From NULL</li>
                <li>From other types</li>
                
            </ul>
            <hr>
            <hr>
            </div>


             <!-- ############################################################################ --> 
            <h3>Floating point numbers</h3>
            <div>
            <p>In PHP, a floating-point number is a data type that represents a number with a decimal point. Floating-point numbers are used to store decimal values, and they are often used to represent values that are not exact, such as measurements or currency amounts.</p>
            <p>PHP supports two different floating-point types: float and double. These types are used to store floating-point values, and they have different ranges of values depending on the size of the data type.</p>
            <pre>
            float: The float data type is a single-precision floating-point type that can store values with up to 7 decimal digits of precision.

            double: The double data type is a double-precision floating-point type that can store values with up to 16 decimal digits of precision.

            

            $float = 123.45;
            $double = 123.456789012345;

            echo gettype($float); // prints "double"
            echo gettype($double); // prints "double"

            </pre>
            <p> use the <code>is_float()</code> function to check if a variable is a floating-point number, and the <code>floatval()</code> function to convert other data types to floating-point numbers in PHP. You can also use the <code>number_format()</code> function to format floating-point numbers as strings with a specified number of decimal places.</p>
            <hr>
            <hr>
            </div>

             <!-- ############################################################################ -->             
            <h3>Strings</h3>
            <div>
                <p>A string is series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support.</p>
                <p>
                A string literal can be specified in four different ways:
                </p>

                <ol>
                    <li>single quoted</li>
                    <li>double quoted</li>
                    <li>heredoc syntax</li>
                    <li>nowdoc syntax</li>
                </ol>

                <h5>Single-quoted strings</h5>
                <p>Single-quoted strings are slightly faster and use slightly less memory than double-quoted strings, but they do not support string interpolation or escape sequences. This means that you cannot use variables or special characters (such as newlines or tabs) within single-quoted strings without concatenating them into the string.</p>
                <pre>
                $str = 'This is a single-quoted string.';

                </pre>

                <h5>Double-quoted strings</h5>
                <p>Double-quoted strings, on the other hand, support string interpolation and escape sequences. This means that you can include variables and special characters within the string using certain syntax.</p>
                <pre>
                $name = 'John';
                $str = "Hello, $name!"; // Outputs: "Hello, John!"

                $str = "This string contains a newline.\n"; // Outputs: "This string contains a newline." followed by a newline
                </pre>
                <p>In general, it is recommended to use single-quoted strings for simple strings that do not require interpolation or escape sequences, and to use double-quoted strings for strings that do require these features.</p>
            </div>

            <!-- ############################################################################ --> 
            <h3>Numeric strings </h3>
            <div>
                <p>In PHP, a string can contain numeric characters, but it is not considered a numeric type.</p>
                <pre>
                $str = '12345';

                </pre>
                <p>The variable $str is a string, even though it contains only numeric characters. You can use functions such as is_numeric() to check if a string contains only numeric characters:</p>
                <pre>
                if (is_numeric($str)) {
                    // $str contains only numeric characters
                }

                </pre>
                <p>To treat a string as a numeric value, you will need to cast it to a numeric type using one of the following functions:</p>
                <pre>
                intval(): Cast to an integer
                floatval(): Cast to a float (a number with a decimal point)
                doubleval(): Cast to a double (a float with a larger precision)


                $num = intval($str); // $num is now an integer
                </pre>

                <p>It's important to note that casting a string to a numeric type will remove any leading or trailing non-numeric characters, but it will not remove any characters within the string. </p>
                <pre>
                $str = '$123';
                um = intval($str); // $num is now 123

                If you want to remove all non-numeric characters from a string, you can use the preg_replace() function with a regular expression:
                
                $str = '$123';
                $str = preg_replace('/[^0-9]/', '', $str); // $str is now '123'


                </pre>
            </div>

            <!-- ############################################################################ --> 
            <h3>Arrays</h3>
            <div>
            <p>In PHP, an array is a data type that <code>stores a collection</code> of values. Arrays are useful for storing lists of related data and for working with data in a structured way.</p>

            </div>
            
            <!-- ############################################################################ --> 
            <h3>Object</h3>
            <div>
                <p>In PHP, an <code>object is a data type</code> that represents an instance of a class. A class is a blueprint that defines the properties and methods of an object.</p>

                <p>To create an object in PHP, you first need to define a class. </p>

                <p>To create an object of this class, you can use the new operator, followed by the name of the class.</p>
            </div>

            <h3>Enumerations </h3>
            <div>
                <p>In PHP, an enumeration is a way to define a set of named constants. Enumerations are useful for defining a fixed set of values that can be used in a program, such as a set of predefined colors or a set of status codes.</p>
                <p>Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type.</p>
                <p>PHP does not have a built-in way to define enumerations, but you can simulate them using a combination of constants and a class.</p>
                <pre>
                class Colors {
                    const RED = '#ff0000';
                    const GREEN = '#00ff00';
                    const BLUE = '#0000ff';
                }

                echo Colors::RED; // Outputs: '#ff0000'
                echo Colors::GREEN; // Outputs: '#00ff00'
                echo Colors::BLUE; // Outputs: '#0000ff'

                You can also define an enumeration using define() function, like this:

                define('RED', '#ff0000');
                define('GREEN', '#00ff00');
                define('BLUE', '#0000ff');

                echo RED; // Outputs: '#ff0000'
                echo GREEN; // Outputs: '#00ff00'
                echo BLUE; // Outputs: '#0000ff'
                </pre>
                <p>It's important to note that constants defined with define() function are not part of a class and are not scoped to a namespace, so you should use them with caution to avoid naming conflicts.</p>
            </div>
          
            <h3>Resource</h3>
            <div>
                <p>In PHP, a resource is a special type of variable that represents a reference to an external resource, such as a file, a database connection, or a stream.</p>

                <p>Resources are created and used through functions that open and manipulate the resource, such as fopen() for opening a file, mysqli_connect() for connecting to a database, or fsockopen() for opening a network connection. These functions return a resource variable that can be used to access the resource.</p>

                <pre>
                $file = fopen('data.txt', 'r');

                while (!feof($file)) {
                    $line = fgets($file);
                    echo $line;
                }

                fclose($file);

                </pre>
                <p>You can use the is_resource() function to check if a variable is a resource:</p>

                <p>It's important to note that resource variables are not like other variables in PHP, and you cannot use them in the same way. For example, you cannot use them in arithmetic operations or compare them using comparison operators. You can only use them with functions that are designed to work with resources.</p>

                <h5>Freeing resources</h5>
                <p>Thanks to the reference-counting system being part of Zend Engine, a resource with no more references to it is detected automatically, and it is freed by the garbage collector. For this reason, it is rarely necessary to free the memory manually.</p>

            </div>


            <h3>Callbacks / Callables</h3>
            <p>later</p>

            <h3>Mixed </h3>
            <p>later</p>


            <h3>Void</h3>
            <p>later</p>

            <h3>Never</h3>
            <p>later</p>

            <h3>Relative class types</h3>
            <p>later</p>

            <h3>Literal types</h3>
            <p>later</p>

            <h3>Iterables</h3>
            <p>later</p>

            <h3>Type declarations</h3>
            <p>later</p>

            <h3>Type Juggling</h3>
            <p>later</p>












            </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>