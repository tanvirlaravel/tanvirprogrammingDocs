<?php include_once '../../inc/header.php'; ?>
<div class="container">
  <?php include_once '../nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">Getting started with HTML</h1>

          

      <h3>What is HTML?</h3>
      <div>
        <p> HTML consists of a series of elements, which you use to enclose, wrap, or mark up different parts of content to make it appear or act in a certain way</p>
        <p class="p-2 bg-dark text-warning">
        Note: Tags in HTML are not case-sensitive. This means they can be written in uppercase or lowercase. For example, a &lt;title> tag could be written as &lt;title>, &lt;TITLE>, &lt;Title>, &lt;TiTlE>, etc., and it will work. However, it is best practice to write all tags in lowercase for consistency and readability.
        </p>
        
        <hr />
        <hr />
      </div>

     
      <h3>Boolean attributes</h3>
      <div>
        <p>Sometimes you will see attributes written without values. This is entirely acceptable. These are called Boolean attributes. Boolean attributes can only have one value, which is generally the same as the attribute name.</p>
        <pre>
            &lt;input type="text" disabled="disabled" />

            &lt;!-- using the disabled attribute prevents the end user from entering 
            text into the input box -->
            &lt;input type="text" disabled />

            &lt;!-- text input is allowed, as it doesn't contain the disabled attribute -->
            &lt;input type="text" />


        </pre>

        <hr />
        <hr />
      </div>

      <h3>Whitespace in HTML</h3>
      <div>
        <p>In the examples above, you may have noticed that a lot of whitespace is included in the code. This is optional. These two code snippets are equivalent:</p>
        <pre>
        &lt;p>Dogs are silly.&lt;/p>

        &lt;p>Dogs        are
         silly.&lt;/p>

        </pre>
        <p>No matter how much whitespace you use inside HTML element content (which can include one or more space character, but also line breaks), the HTML parser reduces each sequence of whitespace to a single space when rendering the code. So why use so much whitespace? The answer is readability.</p>
        <hr />
        <hr />
      </div>

      <h3>Entity references</h3>
      <div>
        <p>In HTML, the characters <, >,",' and & are special characters. They are parts of the HTML syntax itself.</p>
        <hr />
        <hr />
      </div>


    
         
      
    
    </div>
  </div>
</div>

<?php include_once '../../inc/footer.php'; ?>
