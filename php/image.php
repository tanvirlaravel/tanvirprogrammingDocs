<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h1>File Uploading</h1>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
         
           <div class="col-8">
          
            <h3>Introduction</h3>
            <p>Initially files are uploaded into a temporary directory and then relocated to a target destination by a PHP script.</p>

            <p>Information in the phpinfo.php page describes the temporary directory that is used for file uploads as upload_tmp_dir and the maximum permitted size of files that can be uploaded is stated as upload_max_filesize. These parameters are set into PHP configuration file php.ini</p>

            <p>The process of uploading a file follows these steps −</p>

            <ul>
                
                <li>The selected file is sent to the temporary directory on the server.</li>
                <li>The PHP script that was specified as the form handler in the form's action attribute checks that the file has arrived and then copies the file into an intended directory.</li>
                <li>The PHP script confirms the success to the user.</li>
            </ul>

            <p>As usual when writing files it is necessary for both temporary and final locations to have permissions set that enable file writing. If either is set to be read-only then process will fail.</p>

            <p>An uploaded file could be a text file or image file or any document.</p>

            <hr>


            <h3>HTML Form</h3>           
            <pre class="bg-dark p-2 text-white">
            &lt;form action="" method="POST" <span class="text-danger">enctype="multipart/form-data"</span>>
            </pre>
            <hr>

            <h3>Creating an upload script</h3> 
            <p>There is one global PHP variable called $_FILES. This variable keeps all the information related to uploaded file. </p> 
            <ul>
           <li> <strong>$_FILES['file']['tmp_name']</strong> − the uploaded file in the temporary directory on the web server.</li>
            <li><strong>$_FILES['file']['name']</strong> − the actual name of the uploaded file.</li>
            <li><strong>$_FILES['file']['size']</strong> − the size in bytes of the uploaded file.</li>
            <li><strong>$_FILES['file']['type']</strong> − the MIME type of the uploaded file.</li>
            <li><strong>$_FILES['file']['error']</strong> − the error code associated with this file upload.</li>
            </ul>         
            <pre class="bg-dark p-2 text-white">
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

            move_uploaded_file($file_tmp,"images/".$file_name);
            </pre>
            <hr>

          

           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>