<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h2>Integer: Data</h2>
      
    <div class="row">
       <div class="col-4">
            <ul id="sidebar_links"></ul>        
       </div> 

        <div class="col-md-8">
        <h3>Introduction</h3>

    <p>They are whole numbers, without a decimal point, like 4195. They are the simplest type .they correspond to simple whole numbers, both positive and negative.</p>
    <p>Integer can be in decimal (base 10), octal (base 8), and hexadecimal (base 16) format. Decimal format is the default, octal integers are specified with a leading 0, and hexadecimals have a leading 0x.</p>
    <p>An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.</p>

    <ol>
    <li>Integers can be specified in decimal (base 10)</li>
    <li>hexadecimal (base 16)</li>
    <li>octal (base 8) or binary (base 2) notation</li>
    <li>The negation operator can be used to denote a negative integer.</li>
</ol>

<pre class="bg-dark p-3 text-white">

    $a = 1234; // decimal number
    $a = 0123; // octal number (equivalent to 83 decimal)
    $a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
    $a = 0b11111111; // binary number (equivalent to 255 decimal)
    $a = 1_234_567; // decimal number (as of PHP 7.4.0)
    
</pre>
<p>If PHP encounters a number beyond the bounds of the integer type, it will be interpreted as a float instead. Also, an operation which results in a number beyond the bounds of the integer type will return a float instead.</p>
<pre class="bg-dark p-3 text-white">

    $large_number = 2147483647;
    var_dump($large_number); // int(2147483647)

    $large_number = 2147483648;
    var_dump($large_number); // float(2147483648)

    $million = 1000000;
    $large_number = 50000 * $million;
    var_dump($large_number);                     // float(50000000000)
    
</pre>

<p>The size of an int is platform-dependent, although a maximum value of about two billion is the usual value (that's 32 bits signed). 64-bit platforms usually have a maximum value of about 9E18. PHP does not support unsigned ints. int size can be determined using the constant PHP_INT_SIZE, maximum value using the constant PHP_INT_MAX, and minimum value using the constant PHP_INT_MIN.</p>

<h3>Integer overflow </h3>
<p>If PHP encounters a number beyond the bounds of the int type, it will be interpreted as a float instead. Also, an operation which results in a number beyond the bounds of the int type will return a float instead.</p>

<pre class="bg-dark p-3 text-white">
<h5>Integer overflow on a 32-bit system</h5>
        $large_number = 2147483647;
        var_dump($large_number);                     // int(2147483647)

        $large_number = 2147483648;
        var_dump($large_number);                     // float(2147483648)

        $million = 1000000;
        $large_number =  50000 * $million;
        var_dump($large_number);                     // float(50000000000)

<h5> Integer overflow on a 64-bit system</h5>
        $large_number = 9223372036854775807;
        var_dump($large_number);                     // int(9223372036854775807)

        $large_number = 9223372036854775808;
        var_dump($large_number);                     // float(9.2233720368548E+18)

        $million = 1000000;
        $large_number =  50000000000000 * $million;
        var_dump($large_number);                     // float(5.0E+19)
</pre>
<hr>
<hr>

<h3>Converting to integer</h3>
<p>To explicitly convert a value to int, use either the (int) or (integer) casts. However, in most cases the cast is not needed, since a value will be automatically converted if an operator, function or control structure requires an int argument. A value can also be converted to int with the intval() function.</p>
<p>If a resource is converted to an int, then the result will be the unique resource number assigned to the resource by PHP at runtime.</p>
<p>false will yield 0 (zero), and true will yield 1 (one).</p>
<p>When converting from float to int, the number will be rounded towards zero.</p>
<p>If the string is numeric or leading numeric then it will resolve to the corresponding integer value, otherwise it is converted to zero (0).</p>
<p>NULL is always converted to zero (0).</p>
        </div>
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>