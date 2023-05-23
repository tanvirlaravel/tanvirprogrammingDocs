<?php include_once '../inc/header.php'; ?>
<div class="container">
  <?php include_once 'nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">Basics</h1>

      <h3>Intro</h3>
        <div>
        <p>HTML (HyperText Markup Language) is the <code>code</code> that is used to structure a web page.</p>
        <p>content could be structured within a set of <code>paragraphs</code>, a <code>list of bulleted points</code>, or using <code>images</code> and data <code>tables</code></p>
        <p></p>
        <p></p>
        <hr />
        <hr />
        </div>


        
      <h3>So what is HTML?</h3>
      <div>
        <p>HTML is a <code>markup language</code> that defines the structure of your content. HTML consists of a series of <code>elements</code>, which you use to enclose, or wrap, different parts of the content to make it appear a certain way, or act a certain way. The enclosing tags can make a word or image hyperlink to somewhere else, can italicize words, can make the font bigger or smaller, and so on.</p>
       
        <hr />
        <hr />
      </div>

      <h3>Anatomy of an HTML element</h3>
      <div>
        <img src="./img/grumpy-cat-small.png" alt="" class="img-fluid">
      <p>The element: The opening tag, the closing tag, and the content together comprise the element.</p>     
       
        <hr />
        <hr />
      </div>

      <h3>attributes </h3>
      <div>
        <img src="./img/grumpy-cat-attribute-small.png" alt="" class="img-fluid">
        <p class="mt-3">Attributes contain extra information about the element that you don't want to appear in the actual content. Here, class is the attribute name and editor-note is the attribute value.</p>
        <hr />
        <hr />
      </div>

      <h3>Nesting elements</h3>
      <div>
        <p>You can put elements inside other elements too — this is called nesting.</p>
       
        <hr />
        <hr />
      </div>

      <h3>Void elements</h3>
      <div>
         <p>Some elements have no content and are called void elements.  the &lt;img> element</p>
        <p></p>
        <hr />
        <hr />
      </div>


      <h3>Anatomy of an HTML document</h3>
      <div>
        <pre class="bg-dark text-white p-3">
          &lt;!DOCTYPE html>
          &lt;html lang="en-US">
            &lt;head>
              &lt;meta charset="utf-8" />
              &lt;meta name="viewport" content="width=device-width" />
              &lt;title>My test page&lt;/title>
            &lt;/head>
            &lt;body>
              &lt;img src="images/firefox-icon.png" alt="My test image" />
            &lt;/body>
          &lt;/html>

        </pre>
        <ul>
          <li>&lt;!DOCTYPE html> — doctype. It is a required preamble. In the mists of time, when HTML was young (around 1991/92), doctypes were meant to act as links to a set of rules that the HTML page had to follow to be considered good HTML, which could mean automatic error checking and other useful things. However, these days, they don't do much and are basically just needed to make sure your document behaves correctly. That's all you need to know for now.</li>
          <li>&lt;html>&lt;/html> — the &lt;html> element. This element wraps all the content on the entire page and is sometimes known as the root element. It also includes the lang attribute, setting the primary language of the document.</li>
          <li>&lt;head>&lt;/head> — the &lt;head> element. This element acts as a container for all the stuff you want to include on the HTML page that isn't the content you are showing to your page's viewers. This includes things like keywords and a page description that you want to appear in search results, CSS to style our content, character set declarations, and more.</li>
          <li>&lt;meta charset="utf-8"> — This element sets the character set your document should use to UTF-8 which includes most characters from the vast majority of written languages. Essentially, it can now handle any textual content you might put on it. There is no reason not to set this, and it can help avoid some problems later on.</li>
          <li>&lt;meta name="viewport" content="width=device-width"> — This viewport element ensures the page renders at the width of viewport, preventing mobile browsers from rendering pages wider than the viewport and then shrinking them down.</li>
          <li>&lt;title>&lt;/title> — the &lt;title> element. This sets the title of your page, which is the title that appears in the browser tab the page is loaded in. It is also used to describe the page when you bookmark/favorite it.</li>
          <li>&lt;body>&lt;/body> — the &lt;body> element. This contains all the content that you want to show to web users when they visit your page, whether that's text, images, videos, games, playable audio tracks, or whatever else.</li>
        </ul>
        <hr />
        <hr />
      </div>

     

      <h3>Headings</h3>
      <div>
        <pre class="bg-dark p-3 text-warning">
      Note: You'll see that your heading level 1 has an implicit style. Don't use heading
      elements to make text bigger or bold, because they are used for accessibility 
      and other reasons such as SEO. Try to create a meaningful sequence of headings on 
      your pages, without skipping levels.
        </pre>
        <hr />
        <hr />
      </div>
    
      
    
    </div>
  </div>
</div>

<?php include_once '../inc/footer.php'; ?>
