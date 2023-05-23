<?php include_once '../../inc/header.php'; ?>
<div class="container">
  <?php include_once '../nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">Dealing with files</h1>

          

      <h3>Intro</h3>
      <div>
        <p>A website consists of many files: text content, code, stylesheets, media content, and so on. When you're building a website, you need to assemble these files into a sensible structure on your local computer, make sure they can talk to one another, and get all your content looking right before you eventually upload them to a server.</p>
       
        <hr />
        <hr />
      </div>

      <h3>An aside on casing and spacing</h3>
      <div>
        <p>You'll notice that throughout this article, we ask you to name folders and files completely in lowercase with no spaces. This is because:</p>
        <ul>
            <li>Many computers, particularly web servers, are case-sensitive. So for example, if you put an image on your website at test-site/MyImage.jpg and then in a different file you try to invoke the image as test-site/myimage.jpg, it may not work.</li>
            <li>Browsers, web servers, and programming languages do not handle spaces consistently. For example, if you use spaces in your filename, some systems may treat the filename as two filenames. Some servers will replace the areas in your filenames with "%20" (the character code for spaces in URLs), resulting in all your links being broken. It's better to separate words with hyphens, rather than underscores: my-file.html vs. my_file.html.</li>
        </ul>
        <p>The short answer is that you should use a hyphen for your file names. The Google search engine treats a hyphen as a word separator but does not regard an underscore that way. For these reasons, it is best to get into the habit of writing your folder and file names lowercase with no spaces and with words separated by hyphens, at least until you know what you're doing. That way you'll bump into fewer problems later down the road.</p>
       
        <hr />
        <hr />
      </div>

      <h3>File paths</h3>
      <div>
        <p>To make files talk to one another, you have to provide a file path between them — basically a route, so one file knows where another one is.</p>
        <p class="bg-dark text-warning p-3">Note: The Windows file system tends to use backslashes, not forward slashes, e.g. C:\Windows. This doesn't matter in HTML — even if you are developing your website on Windows, you should still use forward slashes in your code.</p>
      
        <hr />
        <hr />
      </div>

     
         
      
    
    </div>
  </div>
</div>

<?php include_once '../../inc/footer.php'; ?>
