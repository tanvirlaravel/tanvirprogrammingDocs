<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h1>File Storage</h1>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
           <h3>Introduction</h3>
           <p>we have so many options to store files, the sheer number of solutions ranging from self-hosted to FTP to cloud storage to GFS and many others.</p>
           <p>Laravel's solution to this problem is to call them disks. Makes sense, any file storage system you can think of can be labeled as a disk in Laravel. Laravel comes with native support for some providers (disks). We have local, public, s3, Rackspace, FTP, etc. All this is possible because of the filesystem.</p>
           <p>Laravel used <a href="https://github.com/thephpleague/flysystem" target="_blank"><span class="text-danger">Flysystem</span></a> PHP package</p>
           <p>It's provides simple drivers for working with local <span class="text-danger">filesystems</span>, <span class="text-danger">SFTP</span>, and <span class="text-danger">Amazon S3</span>.</p>
           <p>simple to switch between these storage options as the API remains the same for each system.</p>         
           <hr>
           <hr>

           
           <h3>Configuration</h3>
           <p>Laravel's filesystem configuration file is located at <span class="text-danger">config/filesystems.php</span>. Within this file, you may configure all of your filesystem "disks". Each disk represents a particular storage driver and storage location</p>
           <p>The local driver interacts with files stored locally on the server running the Laravel application while the s3 driver is used to write to Amazon's S3 cloud storage service.</p>

           <ol>
            <li>Local Driver</li>
            <li>Public Disk</li>
            <li>Amazon S3 Compatible Filesystems</li>
           </ol>
           <hr>
           <hr>
           

           <h3>Local Driver</h3>
           <a href="https://laravel.com/docs/9.x/filesystem#the-local-driver" target="_blank">Laravel Docs</a>
           <hr>
           <hr>

           <h3>Public Disk</h3>
           <a href="https://laravel.com/docs/9.x/filesystem#the-public-disk" target="_blank">Laravel Docs</a>
           <hr>
           <hr>

           <h3>Driver Prerequisites</h3>
           <a href="https://laravel.com/docs/9.x/filesystem#driver-prerequisites" target="_blank">Laravel Docs</a>
           <hr>
           <hr>

           <h3>Scoped & Read-Only Filesystems</h3>
           <a href="https://laravel.com/docs/9.x/filesystem#scoped-and-read-only-filesystems" target="_blank">Laravel Docs</a>
           <hr>
           <hr>

           <h3>Amazon S3 Compatible Filesystems</h3>
           <a href="https://laravel.com/docs/9.x/filesystem#amazon-s3-compatible-filesystems" target="_blank">Laravel Docs</a>
           <hr>
           <hr>

           <h3>Disk Instances</h3>
           <p>The Storage facade may be used to interact with any of your configured disks</p>
           <p>you may use the put method on the facade to store an avatar on the default disk. If you call methods on the Storage facade without first calling the disk method, the method will automatically be passed to the default disk:</p>

           <pre class="text-white bg-dark p-2">
           Storage::put('avatars/1', $content);

           Storage::disk('s3')->put('avatars/1', $content);
           </pre>
           <hr><hr>

           <h3>On-Demand Disks</h3>
           <a href="https://laravel.com/docs/9.x/filesystem#on-demand-disks" target="_blank">Docs</a>
           <hr><hr>

           <h3>Retrieving Files</h3>
           <p> all file paths should be specified relative to the disk's "root" location:</p>
           <pre class="text-white bg-dark p-2">
           $contents = Storage::get('file.jpg');

           if (Storage::disk('s3')->exists('file.jpg')) {
                // ...
            }

            if (Storage::disk('s3')->missing('file.jpg')) {
                // ...
            }
           </pre>
           <hr><hr>

           <h3>Downloading Files</h3>          
           <pre class="text-white bg-dark p-2">
            return Storage::download('file.jpg');
 
            return Storage::download('file.jpg', $name, $headers);
           </pre>
           <hr><hr>

           <h3>File URLs</h3> 
           <p>If you are using the local driver, this will typically just <span class="text-danger">prepend</span> /storage to the given path and return a relative URL to the file. If you are using the s3 driver, the fully qualified remote URL will be returned:</p>         
           <pre class="text-white bg-dark p-2">
           $url = Storage::url('file.jpg');
           </pre>
           <a href="https://laravel.com/docs/9.x/filesystem#file-urls">Docs</a>
           <hr><hr>

           <h3>Temporary URLs</h3>           
           <a href="https://laravel.com/docs/9.x/filesystem#temporary-urls">Docs</a>
           <hr><hr>

           <h3> Storing Files</h3>
            <p></p>     
            <pre class="text-white bg-dark p-2">
                
            </pre>      
            <a target="_blank" href="">Docs</a>
            <hr>
            <hr> 

            <h3>Deleting Files</h3>                
            <pre class="text-white bg-dark p-2">
            Storage::delete('file.jpg');
            Storage::delete(['file.jpg', 'file2.jpg']);
            Storage::disk('s3')->delete('path/file.jpg');  
            </pre> 
            <hr>
            <hr> 

            <h3>Directories</h3>
            <p></p>     
            <pre class="text-white bg-dark p-2">
            $files = Storage::files($directory);
            $files = Storage::allFiles($directory);
            $directories = Storage::directories($directory);
            $directories = Storage::allDirectories($directory);

            Storage::makeDirectory($directory);
            Storage::deleteDirectory($directory);
            </pre>      
            <a target="_blank" href="https://laravel.com/docs/9.x/filesystem#directories">Docs</a>
            <hr>
            <hr> 

            <h3>Custom Filesystems</h3>              
            <a target="_blank" href="https://laravel.com/docs/9.x/filesystem#custom-filesystems">Docs</a>
            <hr>
            <hr> 

          
         
           
           

          
           </div> 
    
    </div>
</div>



<!-- 

        <h3>Temporary</h3>
        <p></p>     
        <pre class="text-white bg-dark p-2">
            
        </pre>      
        <a target="_blank" href="">Docs</a>
        <hr>
        <hr> 

-->

<?php include_once '../inc/footer.php'; ?>