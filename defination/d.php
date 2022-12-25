<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    
<h1><a href="<?= $rool_url ?>defination/defination.php">Defination</a>/D</h1> 
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
            
           <h3>Dependency Injection</h3>
                <p>Dependency injection is a software design pattern that allows an object or module to receive its dependencies from an external source rather than creating them itself. This allows for better separation of concerns and makes it easier to test and maintain the code.</p>
                <p>The dependencies can be changed at run time as well as compile time</p>

                <pre>
                class Database {
                // ...
                }

                class UserRepository {
                private $database;

                public function __construct(Database $database) {
                    $this->database = $database;
                }

                public function findById(int $id) {
                    // use the $database object to query the database
                }
                }

                $database = new Database();
                $repository = new UserRepository($database);

                </pre>
                <p>In this example, the UserRepository class depends on the Database class. Rather than creating a new instance of Database inside the UserRepository class, the Database object is injected into the UserRepository through the constructor. This allows the UserRepository to use the Database object to query the database, but it does not need to know how the Database object is implemented.</p>
                <p>Dependency injection is often used with a dependency injection container, which is a central location for storing and managing the dependencies for an application. The dependency injection container can be used to resolve dependencies and inject them into objects as needed.</p>

            <ul>
                <li><b>Modular:</b> The Dependency Injection helps create completely self-sufficient classes or modules</li>
                <li><b>Testable:</b>It helps write testable code easily eg unit tests for example</li>
                <li><b>Maintainable:</b> Since each class becomes modular, it becomes easier to manage it</li>
            </ul>
            <hr>
            <hr>
             <!--  ##########################################################################     -->
             <h3>Declarative programming</h3>
             <p>Declarative programming is a programming paradigm that focuses on describing what a program should do, rather than specifying how it should do it. In declarative programming, the programmer writes code that specifies the desired result, and the programming language or system takes care of the implementation details.</p>
             <p>One example of declarative programming is SQL, which is a language used to query and manipulate data stored in a database. In SQL, the programmer writes a query that specifies the data they want to retrieve or the changes they want to make to the data, and the database system takes care of the implementation details such as how to access the data and perform the required operations.</p>
             <p>Another example of declarative programming is HTML, which is a markup language used to structure and format content for the web. In HTML, the programmer writes code that specifies the structure and layout of the content, and the web browser takes care of the implementation details such as rendering the content on the screen.</p>
             <p>Declarative programming can often lead to more concise and maintainable code, as the programmer does not need to worry about the low-level implementation details of the program. However, it can also be more difficult to debug declarative code, as the underlying implementation may not be immediately visible.</p>
            
            </pre>
            <hr>
             <!--  ##########################################################################     -->



          

       
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>