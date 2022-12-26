<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">URLs</h1>

      <h3>Defination</h3>
      <div>
        <p>URLs (Uniform Resource Locators) are addresses that identify the resources being requested by clients on the World Wide Web. URLs consist of several parts, including the <code>scheme</code> (such as http or https), the <code>domain name</code> (such as example.com), and the <code>path</code> (such as /page).</p>

        <p>Here is an example of a <code>URL</code>:</p>
        <pre>
        https://example.com/page
        </pre>
        <p>https is the scheme, example.com is the domain name, and /page is the path.</p>   
        <hr />
        <hr />
      </div>

      <h3> query string</h3>
      <div>
        <p>URLs may also include a query string, which is a set of key-value pairs that are appended to the end of the URL and separated by a question mark (?). The query string is used to pass additional parameters or data to the server.</p>
        <pre>
        https://example.com/page?key1=value1&key2=value2
        </pre>
        <p>key1=value1&key2=value2 is the query string.</p>
        <hr />
        <hr />
      </div>

      <h3>Summary</h3>
      <div>
      <p>URLs are used by HTTP clients to send requests to servers, and servers use URLs to identify the resources being requested and generate the appropriate response. URLs are a critical component of the World Wide Web, and are used to access a wide variety of resources such as web pages, images, videos, and APIs.</p>
        <hr />
        <hr />
      </div>



      

    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
