<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">MetaData</h1>

      <h3>Defination</h3>
      <div>
    <p>HTML metadata is information about an HTML document that is not displayed directly on the webpage, but is used by web browsers and search engines to understand the content and context of the page.</p>
   

    <p>HTML metadata is typically contained in the <head> element of an HTML document. There are several types of metadata that can be included in the <head> element, including:</p>
    <hr />
        <hr />
      </div>

      <h3>List</h3>
      <div>
    <pre>
    &lt;title>: specifies the title of the webpage, which is displayed in the browser's title bar or tab.
    &lt;meta>: specifies metadata about the webpage, such as a description or keywords for search engines. &lt;meta> elements are usually placed in the &lt;head> element, but can also be placed in the &lt;body> element.
    &lt;link>: specifies relationships between the webpage and other resources, such as stylesheets or external scripts.
    &lt;style>: specifies styles for the webpage.

  

&lt;html>
  &lt;head>
    &lt;title>My Webpage&lt;/title>
    &lt;meta name="description" content="A description of my webpage.">
    &lt;meta name="keywords" content="webpage, example">
    &lt;link rel="stylesheet" href="styles.css">
    &lt;style>
      /* styles go here */
    &lt;/style>
  &lt;/head>
  &lt;body>
    &lt;!-- webpage content goes here -->
  &lt;/body>
&lt;/html>

</pre>
       
        <hr />
        <hr />
      </div>

      <h3>Summary</h3>
      <div>
      <p>Metadata is important for search engines and other web applications because it helps them understand the content and context of a webpage, which can influence how the webpage is ranked or displayed. It can also be used to improve the user experience, such as by specifying the character encoding of a webpage or providing a link to a favicon.</p>
        <hr />
        <hr />
      </div>
    
      
    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
