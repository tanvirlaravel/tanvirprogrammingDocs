<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    
<h1><a href="<?= $rool_url ?>defination/defination.php">Defination</a>/S</h1> 
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">            
          

            <h3>Software Driver</h3>
            <p>A software driver is a <code>computer program</code> that allows a device or piece of software to communicate with the operating system of a computer. Drivers provide a specific interface between the operating system and the device or software, allowing the operating system to communicate with and control the device or software.</p>
            <p>There are different types of software drivers, including device drivers, printer drivers, and network drivers. Device drivers are programs that allow the operating system to communicate with hardware devices such as printers, keyboards, and mice. Printer drivers are programs that allow the operating system to communicate with printers and control their functionality. Network drivers are programs that allow the operating system to communicate with network hardware and configure network connections.</p>

            <p>Software drivers are often specific to a particular operating system, as the interface between the operating system and the device or software can vary. For example, a driver for a printer may be different on a Windows operating system than on a Mac operating system.</p>

            <p>suppose an application needs to read some data from a device. The application calls a function implemented by the operating system, and the operating system calls a function implemented by the driver. The driver, which was written by the same company that designed and manufactured the device, knows how to communicate with the device hardware to get the data. After the driver gets the data from the device, it returns the data to the operating system, which returns it to the application.</p> 
             <!--  ##########################################################################         -->
             <h3>service container</h3>
             <!--  ##########################################################################         -->
             <h3>service providers</h3>
                <p>Service providers in laravel application is the central place where application is bootstrapped. That is, laravel’s core services and our application’s services, classes and their dependencies are injected in service container through providers. </p>

                <p>When your app runs, it requires additional code, often packaged as "services" (See the "app/Services" folder) to get things done.</p>
                <p>

                    "Service Providers" are Laravel's way of packaging and managing the code needed to load these additional "services" (or running other code) at app bootup.</p>
                <p>

                    They are run in 2 phases - "register", and "boot"; each one defined by a same-named method on the provider.</p>
                <p>

                    The list of service providers for your app is listed in config/app.php, and this is how you specify which ones will run, and in what order (you don't need to run all of the service providers in the services folder, you can just keep them there, doing nothing).</p>

                <p>

                    When Laravel boots, it looks at the list, loads the right Providers, which in turn have their register() and boot() methods called at the right time.</p>
                <p>

                    Then the rest of the app boots, and subsequent tasks which need access to any "services" loaded by the "service providers", have them.</p>

                <p>Basically, features are wrapped up in ‘services’ that can be added or removed from the application, by adding or removing the corresponding service provider class. So things like routing, mail, etc. are services, and their functionality added to the Laravel framework via their service providers.</p>
                <p>If you open the config/app.php file included with Laravel, you will see a providers array. These are all of the service provider classes that will be loaded for your application</p>
             <!--  ##########################################################################         -->


          

       
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>