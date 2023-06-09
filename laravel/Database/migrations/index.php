<?php include_once '../../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../../nav.php'; ?>


    <div class="row">
         <div class="col-4">
           <?php include_once("nav.php"); ?>
         </div> <!-- end col-4 -->
         
         
         <div  iv class="col-8">

        
           
<?php 
if(isset($_GET['char'])){
  $variable = $_GET['char'];
}else {
  $variable = "default";
}

  switch ($variable) {
  case "int":
    include "int.php";
    break; 

  case "c":
    include "c.php";
    break;

  case "d":
    include "d.php";
    break;

  case "f":
    include "f.php";
    break;

  case "z":
    include "z.php";
    break;

     case "default":
    include "default.php";
    break;

  default:
    include "default.php";
    break;
}
?>
          
           

          



           <h2 class="text-danger">Migrations</h2>

           <h3>Methods</h3>
           <div>
            <h5>laravel constrained()</h5>
            <p>In Laravel, the constrained() method is used to add constraints to the query builder. It is used to limit the results of a query based on a related table's column.</p>
            <p>For example, if you have a comments table that has a foreign key constraint to a posts table, you could use the constrained method to only select comments that belong to a specific post.</p>
            <pre>
            $comments = DB::table('comments')
                ->constrained('posts')
                ->get();
            </pre>
            <p>The above query will join the comments table with the posts table and only return comments where there is a corresponding post in the posts table.</p>
            <p>It is important to note that constrained() method is only available when using the query builder or Eloquent. It does not work when using raw SQL.</p>
           </div>

              
           
            <p>In Laravel, the foreignId method is used to create a foreign key column on a database table. A foreign key is a column that references the primary key of another table, creating a relationship between the two tables.</p>
            <p>For example, if you have a users table and a posts table, and you want to create a foreign key on the posts table that references the id column of the users table, you can use the following code in a migration file:</p>
            <pre>
             Schema::create('posts', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained();
                // additional columns ...
                });    
            </pre>
            <p>This will create a posts table with a foreign key column named user_id that references the id column of the users table. The constrained method will also create a foreign key constraint on the user_id column. This means that the database will ensure that the value in the user_id column of the posts table must match the value in the id column of the users table.</p>
            <p>The foreignId() method is an alternative for creating a foreign key column, but the unsignedBigInteger() method with foreign() method can also be used for the same purpose.</p>
            <pre>
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            </pre>
            <p>It is also possible to specify the action to take when the referenced row is deleted using onDelete() method, it can be 'cascade', 'set null', 'no action', etc.</p>
            <pre>
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            </pre>
            <p>This will delete all the related rows on posts table when the user is deleted from the users table.</p>
            <h5>foreignIdFor()</h5>
            <h5>unsignedBigInteger()</h5>
             <hr>
             <hr>
           </div>
          
             


           <h3>BLOB</h3>
           <div>
             <p>In database management systems and programming languages, a BLOB (Binary Large Object) is a data type that can store large amounts of binary data, such as images, audio, or video files. BLOBs can be thought of as similar to a variable-length array of bytes, and can be stored and retrieved as a single entity. The exact size and capacity of a BLOB varies depending on the specific implementation and database management system, but they can typically store up to several gigabytes of data. BLOBs are often used to store large multimedia files, such as images and videos, in a database or to store serialized data in a program.</p>
             <p>In SQL databases, BLOBs are often stored in a column with the data type BLOB, which stands for Binary Large OBject. Typically the DBMS provides functions to insert, update, retrieve and delete BLOBs. This type of data is also stored outside of the database, with just a reference to the location of the file stored in the database.</p>
             <ul>
                <li>binary()</li>
             </ul>
             <hr>
             <hr>
           </div>



           <h3>BOOLEAN</h3>
           <div>
             <p>In programming, a Boolean data type is a data type that can have one of two values, usually denoted as true or false. These values are often used in control structures such as if-else statements to make decisions in a program based on whether a certain condition is true or false. Boolean values can also be used to represent the presence or absence of something, or the outcome of a comparison between two values. In most programming languages, the Boolean data type is implemented as a single byte of memory that can store either a 0 (false) or 1 (true) value.</p>
             <ul>
                <li>boolean()</li>                
             </ul>
             <hr>
             <hr>
           </div>

           
           
           <h3>CHAR</h3>
           <div>
             <p></p>
             <ul>
                <li>char()</li>
             </ul>
             <hr>
             <hr>
           </div>


           <h3>DATETIME</h3>
           <div>
             <p></p>
             <ul>
                <li>dateTime()</li>
             </ul>
             <hr>
             <hr>
           </div>

          
          
           <h3>DATE</h3>
           <div>
             <p></p>
             <ul>
                <li>date()</li>
             </ul>
             <hr>
             <hr>
           </div>

           <h3>DECIMAL</h3>
           <div>
             <p></p>
             <ul>
                <li>decimal()</li>
                <li>unsignedDecimal()</li>
             </ul>
             <hr>
             <hr>

           </div> 

           

           <h3> DOUBLE</h3>
           <div>
             <p></p>
             <ul>
                <li>double()</li>
             </ul>
             <hr>
             <hr>
           </div>

           <h3>ENUM</h3>
           <div>
             <p>In programming, an enumerated type (or enum) is a data type that consists of a set of named values. Enums are used to define a set of named constants that can be used in a program, often to represent a specific set of options or states. The values of an enum are usually integers, but they can also be other types such as characters or strings.</p>
             <pre>
             enum Days {
               MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY
            }
             </pre>
             <p>In this case, the enum "Days" has seven possible values: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, and SUNDAY. These values can be used in a program to represent the days of the week, and can also be used in control structures or other parts of the program where a specific day of the week needs to be specified.</p>
             <p>Enums are supported in many modern programming languages such as C, C++, C#, Java, and Python. They have a few advantages over other forms of constants like #define or const, such as being strongly typed and having a name-based lookup.</p>
             <ul>
                <li>enum()</li>
             </ul>
             <hr>
             <hr>
           </div>

           <h3>FLOAT</h3>
           <div>
             <p>In most programming languages, a float data type is a data type that can store decimal numbers ( <span>Decimal numbers are numbers that have a decimal point, which separates the whole number part from the fractional part. For example, 12.34 is a decimal number where 12 is the whole number part and 0.34 is the fractional part.</span> ) . It stands for "floating-point number" and is used to represent non-integer numbers( <span>Non-integer numbers, also known as real numbers, are numbers that can include a fractional component. They can be positive or negative, and can be represented in decimal form, such as 3.14 or -2.5. They can also be represented in scientific notation, such as 1.23e+2 which is equivalent to 123. Non-integer numbers can be represented using the "float" or "double" data types in most programming languages. They are used to represent quantities that can take on any value between two given numbers, such as measurements, continuous quantities and mathematical operations.</span> ) with a fractional component. The precision of a float can vary depending on the specific implementation, but it is typically around 7-8 decimal digits. It is also represented in the form of scientific notation in the memory.</p>
             <ul>
                <li>float()</li>
             </ul>
             <hr>
             <hr>
           </div>

           <h3>ULID</h3>
           <div>
             <p></p>
             <ul>
                <li>foreignUlid()</li>
                <li>foreignUuid()</li>
             </ul>
             <hr>
             <hr>
           </div>


           <h3>GEOMETRYCOLLECTION</h3>
           <div>
             <p></p>
             <ul>
                <li>geometryCollection()</li>
             </ul>
             <hr>
             <hr>
           </div>
           
           
           <h3>GEOMETRY</h3>
           <div>
             <p></p>
             <ul>
                <li>geometry()</li>
             </ul>
             <hr>
             <hr>
           </div>


           <h3>INTEGER</h3>
           <div>
             <p>An integer data type is a data type that stores whole numbers (i.e., numbers without a fractional component) in a computer's memory. Examples of integers include -1, 0, 1, 2, etc. Integers can be stored using various bit widths, such as 8-bit, 16-bit, 32-bit, and 64-bit, which determine the range of values that can be represented. In most programming languages, integers are represented using a data type called int.</p>
             <ul>
                <li>id()</li>
                <li>increments()</li>
                <li>integer()</li>
                <li>unsignedInteger()</li>
             </ul>

           
             <hr>
             <hr>
         </div>

             <h3>JSON</h3>
           <div>
             <p>JSON (JavaScript Object Notation) is a lightweight data-interchange format that is easy for humans to read and write and easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language, Standard ECMA-262 3rd Edition - December 1999. JSON is a text format that is completely language independent but uses conventions that are familiar to programmers of the C family of languages, including C, C++, C#, Java, JavaScript, Perl, Python, and many others. These properties make JSON an ideal data-interchange language.</p>
             <p>JSON is not a programming language, it's a data format, it's a way to represent data structures, such as objects and arrays, in a way that is easy for machines to parse and generate. JSON data is represented as key-value pairs, where the keys are strings and the values can be strings, numbers, booleans, null, arrays, or other JSON objects. JSON can be used to exchange data between different programming languages, platforms, and systems, and can also be used to store data in a database or file system.</p>
             <p>JSON is widely used in RESTful APIs, NoSQL databases, and various web applications. It's easy to parse and generate in most of programming languages.</p>
             <pre>
{
  "name": "John",
  "age": 30,
  "address": {
    "street": "123 Main St",
    "city": "New York",
    "state": "NY",
    "zip": 10001
  },
  "phoneNumbers": [
    {
      "type": "home",
      "number": "212 555-1234"
    },
    {
      "type": "work",
      "number": "646 555-4567"
    }
  ],
  "isStudent": true
}

             </pre>
             <h5>json_encode</h5>
             <p>`json_encode` is a function in PHP, which is the programming language that Laravel is built on. The function is used to convert a PHP variable, such as an array or object, into a JSON encoded string. This encoded string can then be sent to a browser or used in API calls. In Laravel, you can use json_encode to convert data from your application into a JSON format that can be easily transmitted or stored.</p>
             <pre>
             $data = array("name" => "John", "age" => 30, "city" => "New York");
            $json = json_encode($data);
            echo $json; 
            // Output: {"name":"John","age":30,"city":"New York"}
             </pre>
          
             <h5>json_decode</h5>
             <p>`json_decode` is a function in PHP, which is the programming language that Laravel is built on. The function is used to convert a JSON encoded string into a PHP variable, such as an array or object. In Laravel, you can use json_decode to convert JSON data received from an API or from a database into a usable format for your application.</p>
             <pre>
             $json = '{"name":"John", "age":30, "city":"New York"}';
            $data = json_decode($json);
            echo $data->name; // Output: "John"
             </pre>

             <h5>Use in Laravel</h5>
             <pre>
            Schema::create('users', function (Blueprint $table) {                        
                        $table->json('settings');                      
            });
             

            $user = new User();
            $user->name = 'John Doe';
            $user->settings = json_encode(['notifications' => true, 'theme' => 'light']);
            $user->save();

            $user = User::find(1);
            $settings = json_decode($user->settings);
            $notifications = $settings->notifications;


             </pre>
             <ul>
                <li>json()</li>
             </ul>
             <hr>
             <hr>
         </div>
             

             <h3>JSONB</h3>
           <div>
             <p></p>
             <ul>
                <li>jsonb()</li>
             </ul>
             <hr>
             <hr>
         </div>

             <h3>LINESTRING</h3>
           <div>
             <p></p>
             <ul>
                <li>lineString()</li>
             </ul>
             <hr>
             <hr>
         </div>

             <h3>LONGTEXT</h3>
           <div>
             <p></p>
             <ul>
                <li>longText()</li>
             </ul>
             <hr>
             <hr>
         </div>

             <h3>MEDIUMINT</h3>
           <div>
             <p></p>
             <ul>
                <li>mediumIncrements()</li>
                <li>mediumInteger()</li>
                <li>unsignedMediumInteger()</li>
             </ul>
             <hr>
             <hr>
         </div>

             <h3>MEDIUMTEXT</h3>
           <div>
             <p></p>
             <ul>
                <li>mediumText()</li>
             </ul>
             <hr>
             <hr>
         </div>


             <h3>MULTILINESTRING</h3>
           <div>
             <p></p>
             <ul>
                <li>multiLineString()</li>
             </ul>
             <hr>
             <hr>
             </div>


             <h3>MULTIPOINT</h3>
           <div>
             <p></p>
             <ul>
                <li>multiPoint()</li>
             </ul>
             <hr>
             <hr></div>



             <h3>MULTIPOLYGON</h3>
           <div>
             <p></p>
             <ul>
                <li>multiPolygon()</li>
             </ul>
             <hr>
             <hr>
             </div>

             <h3>POINT</h3>
           <div>
             <p></p>
             <ul>
                <li>point()</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>POLYGON</h3>
           <div>
             <p></p>
             <ul>
                <li>polygon()</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>SET</h3>
           <div>
             <p></p>
             <ul>
                <li>set()</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>SMALLINT</h3>
           <div>
             <p></p>
             <ul>
                <li>smallIncrements()</li>
                <li>smallInteger()</li>
                <li>unsignedSmallInteger()</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>TEXT</h3>
           <div>
             <p></p>
             <ul>
                <li>text()</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>TINYTEXT</h3>
           <div>
             <p></p>
             <ul>
                <li>tinyText()</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>TIME</h3>
           <div>
             <p></p>
             <ul>
                <li>timeTz()</li>
                <li>time()</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>TIMESTAMP</h3>
           <div>
             <p></p>
             <ul>
                <li>timestampTz()</li>
                <li>timestamp()</li>
                <li>timestampsTz()</li>
                <li>timestamps()</li>
                <li>nullableTimestamps</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>TINYINT</h3>
                <div>
                    <p></p>
                    <ul>
                        <li>unsignedTinyInteger()</li>
                        <li>tinyInteger()</li>
                        <li>tinyIncrements()</li>
                    </ul>
                    <hr>
                    <hr>
           
                <hr>
                <hr>
                </div>



             <h3>MULTIPOLYGON</h3>
           <div>
             <p></p>
             <ul>
                <li>multiPolygon()</li>
             </ul>
             <hr>
             <hr>
             </div>



             <h3>SMALLINT</h3>
                <div>
                    <p></p>
                    <ul>
                        <li>unsignedSmallInteger()</li>
                    </ul>
                    <hr>
                    <hr>
                </div>


               

                <h3>ULID</h3>
                <div>
                    <p></p>
                    <ul>
                        <li>ulid()</li>
                    </ul>
                    <hr>
                    <hr>
                </div>

                <h3>UUID</h3>
                <div>
                    <p></p>
                    <ul>
                        <li>foreignUuid()</li>
                        <li>uuid()</li>
                    </ul>
                    <hr>
                    <hr>
                </div>

                <h3>VARCHAR</h3>
                <div>
                    <p></p>
                    <ul>
                        <li>ipAddress()</li>
                        <li>rememberToken()</li>
                        <li>string()</li>
                    </ul>
                    <hr>
                    <hr>
                </div>

                <h3>YEAR</h3>
                <div>
                    <p></p>
                    <ul>
                        <li>year()</li>
                    </ul>
                    <hr>
                    <hr>
                </div>

         </div> <!-- end col-8 -->
   </div><!-- end row -->
</div> <!-- end container -->




<?php include_once '../../../inc/footer.php'; ?>
