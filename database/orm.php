<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h2>ORM - Object-Relational Mapping</h2>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
           <h3>Introduction</h3>
           <p>Object-relational mapping (ORM) is a technique that allows a developer <span class="text-danger">to map</span><hr>

           <pre class="pl-5 py-3 bg-dark text-white">
    To map means to create a relationship between two sets of data. In the context 
    of object-relational mapping (ORM), this means creating a relationship between 
    data stored in a database and an object-oriented programming language.

    In ORM, a developer defines the mapping between the database and the 
    programming language using a set of rules or a configuration file. 
    This mapping defines how the data in the database should be represented 
    in the programming language, and vice versa.

    For example, if a database table contains a column for a user's first 
    name and a column for their last name, the ORM mapping might define a 
    Python class called "User" with two attributes called "first_name" and 
    "last_name", respectively. The ORM would then provide methods for storing, 
    retrieving, and deleting user objects from the database, using the mapping 
    to translate between the Python object and the database rows.
    
    By defining a mapping between the database and the programming language, ORM 
    allows a developer to work with the data in the database using 
    familiar object-oriented concepts, rather than having to use SQL 
    queries. This can make working with a database more efficient and 
    easier to understand.
           </pre>
           
           the data stored in a database to an object-oriented programming language, such as Python or Java. This mapping allows a programmer to work with the data in the database using familiar object-oriented concepts, rather than having to use SQL queries to retrieve and manipulate the data.</p>
           <p>ORM tools typically provide a way to define the mapping between the database and the programming language, as well as methods for storing, retrieving, and deleting data from the database. Some popular ORM tools for Python include SQLAlchemy, Django ORM, and PonyORM. </p>
           <p>Using an ORM can help make working with a database more efficient, as it allows developers to focus on the logic of their application rather than the details of database queries. It can also help to reduce the risk of errors in the application, as the ORM can handle tasks such as type coercion and input validation. However, it is important to carefully consider the trade-offs between using an ORM and working with a database directly, as ORMs can introduce additional complexity and overhead.</p>
           <hr>
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>