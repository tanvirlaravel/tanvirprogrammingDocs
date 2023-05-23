<?php include_once '../../inc/header.php'; ?>
<div class="container">
  <?php include_once '../nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">What's in the head? Metadata in HTML</h1>

          

      <h3>Intro</h3>
      <div>
        <p>The head of an HTML document is the part that is not displayed in the web browser when the page is loaded. It contains information such as the page &lt;title>, links to CSS (if you choose to style your HTML content with CSS), links to custom favicons, and other metadata (data about the HTML, such as the author, and important keywords that describe the document). Web browsers use information contained in the head to render the HTML document correctly</p>
        <hr />
        <hr />
      </div>

      <h3>Adding a title</h3>
      <div>
        <p>We've already seen the &lt;title> element in action — this can be used to add a title to the document. This however can get confused with the h1 element, which is used to add a top level heading to your body content — this is also sometimes referred to as the page title.</p>
        <ul>
            <li>The h1 element appears on the page when loaded in the browser — generally this should be used once per page, to mark up the title of your page content (the story title, or news headline, or whatever is appropriate to your usage.)</li>
            <li>The &lt; title> element is metadata that represents the title of the overall HTML document (not the document's content.)</li>
        </ul>

        <p>
        The &lt;title> element contents are also used in other ways. For example, if you try bookmarking the page (Bookmarks > Bookmark This Page or the star icon in the URL bar in Firefox), you will see the &lt;title> contents filled in as the suggested bookmark name.
        </p>
        <hr />
        <hr />
      </div>

      <h3>Metadata: the &lt;meta> element</h3>
      <div>
        <p>Metadata is data that describes data, and HTML has an "official" way of adding metadata to a document — the &lt;meta> element. There are a lot of different types of &lt;meta> elements that can be included in your page's &lt;head>.</p>
        <hr />
        <hr />
      </div>

      <h3>Specifying your document's character encoding</h3>
      <div>
        <h1><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/The_head_metadata_in_HTML#specifying_your_documents_character_encoding" target="_blank">Docs</a></h1>
        <hr />
        <hr />
      </div>

      <h3>Adding custom icons to your site</h3>
      <div>
      <h1><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/The_head_metadata_in_HTML#adding_custom_icons_to_your_site" target="_blank">Docs</a></h1>
        <hr />
        <hr />
      </div>


      <h3>Applying CSS and JavaScript to HTML</h3>
      <div>
        <h1>Later</h1>
        <hr />
        <hr />
      </div> 
      
      <h3>Setting the primary language of the document</h3>
      <div>
        <h1>Later</h1>
        <hr />
        <hr />
      </div> 

      
      
    
    </div>
  </div>
</div>

<?php include_once '../../inc/footer.php'; ?>
