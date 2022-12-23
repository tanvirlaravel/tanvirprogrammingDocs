<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h1>String Data</h1>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
         
           <div class="col-8">
          
            <h3>Strings</h3>
            <p>A string is series of characters, where a <span class="text-danger">character is the same as a byte</span>. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support.</p>  

            <p class="bg-warning p-2">
            <strong>Note</strong>: On 32-bit builds, a string can be as large as up to 2GB (2147483647 bytes maximum)
            </p>

            <p>A string literal can be specified in four different ways:</p>
            <ol class="list-group">
                <li>single quoted</li>
                <li>double quoted</li>
                <li>heredoc syntax</li>
                <li>nowdoc syntax</li>
            </ol>
    <hr>
    <hr>

    <h3>Double quoted </h3>
    <p>If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters:</p>
    <img src="./img/Escaped_characters.png" class="img-fluid" alt="">
    <hr>
    <hr>


    <h3>Heredoc </h3>
    <p class="text-danger">later</p>
    <hr>
    <hr>


    <h3>Nowdoc </h3> 
    <p class="text-danger">later</p>
    <hr>
    <hr>

    <h3>Variable parsing</h3>
    <pre class="bg-dark py-2 text-warning">
           
            $juice = "apple";

            echo "He drank some $juice juice.".PHP_EOL;
            // Invalid. "s" is a valid character for a variable name, but the variable is $juice.
            echo "He drank some juice made of $juices.";
            // Valid. Explicitly specify the end of the variable name by enclosing it in braces:
            echo "He drank some juice made of ${juice}s.";
            <hr>
            $juices = array("apple", "orange", "koolaid1" => "purple");

            echo "He drank some $juices[0] juice.".PHP_EOL;
            echo "He drank some $juices[1] juice.".PHP_EOL;
            echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

            class people {
                public $john = "John Smith";
                public $jane = "Jane Smith";
                public $robert = "Robert Paulsen";

                public $smith = "Smith";
            }

            $people = new people();

            echo "$people->john drank some $juices[0] juice.".PHP_EOL;
            echo "$people->john then said hello to $people->jane.".PHP_EOL;
            echo "$people->john's wife greeted $people->robert.".PHP_EOL;
            echo "$people->robert greeted the two $people->smiths."; // Won't work

            <hr>

            $great = 'fantastic';

            // Won't work, outputs: This is { fantastic}
            echo "This is { $great}";

            // Works, outputs: This is fantastic
            echo "This is {$great}";

            // Works
            echo "This square is {$square->width}00 centimeters broad.";


            // Works, quoted keys only work using the curly brace syntax
            echo "This works: {$arr['key']}";


            // Works
            echo "This works: {$arr[4][3]}";

            // This is wrong for the same reason as $foo[bar] is wrong  outside a string.
            // In other words, it will still work, but only because PHP first looks for a
            // constant named foo; an error of level E_NOTICE (undefined constant) will be
            // thrown.
            echo "This is wrong: {$arr[foo][3]}";

            // Works. When using multi-dimensional arrays, always use braces around arrays
            // when inside of strings
            echo "This works: {$arr['foo'][3]}";

            // Works.
            echo "This works: " . $arr['foo'][3];

            echo "This works too: {$obj->values[3]->name}";

            echo "This is the value of the var named $name: {${$name}}";

            echo "This is the value of the var named by the return value of getName(): {${getName()}}";

            echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

            // Won't work, outputs: This is the return value of getName(): {getName()}
            echo "This is the return value of getName(): {getName()}";

            <hr>
            class foo {
                var $bar = 'I am bar.';
            }

            $foo = new foo();
            $bar = 'bar';
            $baz = array('foo', 'bar', 'baz', 'quux');
            echo "{$foo->$bar}\n";
            echo "{$foo->{$baz[1]}}\n";

            <hr>
            // Show all errors.
            error_reporting(E_ALL);

            class beers {
                const softdrink = 'rootbeer';
                public static $ale = 'ipa';
            }

            $rootbeer = 'A & W';
            $ipa = 'Alexander Keith\'s';

            // This works; outputs: I'd like an A & W
            echo "I'd like an {${beers::softdrink}}\n";

            // This works too; outputs: I'd like an Alexander Keith's
            echo "I'd like an {${beers::$ale}}\n";
    </pre>
    <hr>
    <hr>

    <h3>String access and modification by character</h3>
    <p>Characters within strings may be accessed and modified by specifying the zero-based offset of the desired character after the string using square array brackets, as in <code>$str[42]</code>. Think of a string as an array of characters for this purpose. The functions <code>substr()</code> and <code>substr_replace()</code> can be used when you want to extract or replace more than 1 character.</p>
    <hr>
    <hr>


    <h3>Converting to string</h3>
    <p>A bool true value is converted to the string "1". bool false is converted to "" (the empty string). This allows conversion back and forth between bool and string values.</p>
    <p>Arrays are always converted to the string "Array"; because of this, echo and print can not by themselves show the contents of an array. To view a single element, use a construction such as <code>echo $arr['foo']</code></p>
    <p>In order to convert objects to string magic method __toString must be used.</p>
    <p>Resources are always converted to strings with the structure "Resource id #1", where 1 is the resource number assigned to the resource by PHP at runtime. While the exact structure of this string should not be relied on and is subject to change, it will always be unique for a given resource within the lifetime of a script being executed (ie a Web request or CLI process) and won't be reused. To get a resource's type, use the get_resource_type() function.</p>
    <p>null is always converted to an empty string.</p>
    <hr>
    <hr>

    <h3>String functions</h3>

    <p>In PHP a string is just an array of characters</p> 

    <p>a haystack to be searched and a needle to be found</p>
    <hr>
    
    
    <h5>1. substr()</h5>
    <p>It can be useful when you need to get at parts of fixed format strings.</p>
    <img src="./img/substr.png" class="img-fluid" alt="">
    <img src="./img/substr1.png" class="img-fluid" alt="">
    <img src="img/substr3.png" class="img-fluid" alt="">
    <hr>

    <h5>2. strlen()</h5>
    <hr>

    <h5>3. str_replace()</h5>
    <p>Find and replace</p>
    <img src="img/str_replace.png" class="img-fluid" alt="">
    <img src="img/str_replace1.png" class="img-fluid" alt="">
    <hr>


    <h5>4. trim()</h5>
    <p>The <code>trim()</code> function strips whitespace from the start and end of a string and returns the resulting string. The characters it strips by default are newlines and carriage returns (n and r), horizontal and vertical tabs (t and x0B), end-of-string characters (), and spaces. You can also pass it a second parameter containing a list of characters to strip instead of this default list. Depending on your particular purpose, you might like to use the <code>ltrim()</code> or <code>rtrim()</code> functions instead which perform the same operation, but you choose which side of the string to affect.</p>
    <img src="img/trim.png" class="img-fluid" alt="">
    <hr>


    <h5>5. strpos()</h5>
    <p>strpos — Find the position of the first occurrence of a substring in a string</p>
    <p><a href="https://www.php.net/manual/en/function.strpos.php" target="_blank">php.net</a></p>
    <hr>


    <h5>6. strstr()</h5>
    <p>This function can be used to find a string inside a string, including finding a string containing only a single character.</p>
    <p>The integer returned is the position of the first occurrence of the needle within the haystack. The first character is in position 0 just like arrays.</p>
    <img src="img/strstr.png" class="img-fluid" alt="">
    <hr>


    <h5>7. strtolower()</h5>
    <hr>


    <h5>8. strtoupper()</h5>
    <hr>


    <h5>9. is_string()</h5>
    <p>is_string() is used to check if a value is a string.</p>
    <p><code>is_string ( 7 )</code></p>
    <p><code>is_string ( "Lucky Number 7" )</code></p>
    <hr>


    <h5>10. str_word_count()</h5>
    <hr>


    <h5>11. strrev()</h5>

          

    </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>