<?php include_once '../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../js.nav.php'; ?>

      
    <div class="row">
          
        <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
        </div> <!-- col-4-end -->
         
        <!--                   &lt;                       -->
        <div class="col-8">
            <h1>js Theory | Syntax</h1> 

            <h3>Introduction</h3>
            <div>
                
            <p>In JavaScript, the window object represents the current web page or browser window. It provides access to various properties and methods that can be used to manipulate the web page and interact with the browser. Some of the most commonly used properties and methods of the window object include:</p>
            <ul>
                <li>window.location: Contains information about the current URL, such as the protocol, hostname, and path.</li>
                <li>window.open(): Opens a new browser window or tab with a specified URL.</li>
                <li>window.close(): Closes the current browser window or tab.</li>
                <li>window.setTimeout(): Executes a function or code block after a specified amount of time.</li>
                <li>window.setInterval(): Executes a function or code block repeatedly at a specified interval.</li>
                <li>window.alert(): Displays an alert box with a specified message.</li>
                <li>window.prompt(): Displays a prompt box with a specified message and allows the user to input a value.</li>
                <li>window.confirm(): Displays a confirm box with a specified message and returns true or false depending on the user's response.</li>              
            </ul>
            <p>It also includes the DOM (Document Object Model) elements as properties and provide methods to interact with the elements of the web page. For example, window.document gives access to the entire DOM and window.document.getElementById() is a method to access a specific element of the DOM.</p>
            <p>It should be noted that window is the global object in the browser and it is accessible anywhere in the javascript code.</p>
           <p>In a tabbed browser, each tab is represented by its own Window object; the global window seen by JavaScript code running within a given tab always represents the tab in which the code is running. That said, even in a tabbed browser, some properties and methods still apply to the overall window that contains the tab, such as resizeTo() and innerHeight. Generally, anything that can't reasonably pertain to a tab pertains to the window instead.</p>

            <hr>
            <hr>
            </div> 
            
           
           


          

            <!-- <h3>sadsadas</h3>
            <div>
               
            <hr>
            <hr>
            </div> -->

        </div> <!-- col-8-end -->
    
    </div><!--  row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>