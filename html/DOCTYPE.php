<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">DOCTYPE html</h1>

      <h3>Defination</h3>
      <div>
      <p>The DOCTYPE (Document Type Declaration) is a required element at the beginning of an HTML document. It specifies the type of document and the version of HTML being used</p>
       
        <p>In HTML5, the DOCTYPE is simply <!DOCTYPE html>. This tells the browser that the document is an HTML5 document and that it should use the latest HTML5 standards when rendering the page.</p>
       
        <p>
        The DOCTYPE is not an HTML element and does not have any attributes. It is simply a declaration that is used to tell the browser what kind of document it is dealing with.
        </p>
        <p>The DOCTYPE is important because it tells the browser how to interpret the HTML code in the document. Different versions of HTML have different syntax and features, so the browser needs to know which version of HTML to use when rendering the page.</p>
        
        <p>In previous versions of HTML, the DOCTYPE was more complex and included a reference to a specific DTD (Document Type Definition) that defined the syntax and rules for the HTML version being used. In HTML5, the DOCTYPE is much simpler and does not require a reference to a DTD.</p>
        <hr />
        <hr />
      </div>
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
