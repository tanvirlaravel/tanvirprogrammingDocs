<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>

      
    <div class="row mt-3">
           <div class="col-12">
            <h2 class="text-success">How php works</h2>
            <p>PHP (Hypertext Preprocessor) is a programming language that is primarily used to create dynamic web pages. It is a server-side language, which means that it is executed on the server and the results are sent to the client's web browser.</p>
            <p>Here is a simplified overview of how PHP works:</p>
            <ul>
                <li>A client (such as a web browser) sends a request to a web server for a PHP page.</li>
                <li>The web server receives the request and passes it to the PHP interpreter.</li>
                <li>The PHP interpreter processes the PHP code and generates the HTML output.</li>
                <li>The HTML output is sent back to the web server.</li>
                <li>The web server sends the HTML output to the client's web browser.</li>
                <li>The client's web browser displays the HTML output.</li>
                
            </ul>
            <p>In this process, the PHP code is executed on the server and the results are sent to the client's web browser as HTML. The client's web browser then displays the HTML to the user.</p>
            <p>PHP is often used in combination with a database, such as MySQL, to store and retrieve data. When a PHP page is requested, the PHP code can execute SQL queries on the database to retrieve data, and then generate HTML output based on the data.</p>
           
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>