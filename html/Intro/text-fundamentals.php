<?php include_once '../../inc/header.php'; ?>
<div class="container">
  <?php include_once '../nav.php'; ?>

  <div class="row">
    <div class="col-4">
      <ul id="sidebar_links"></ul>
    </div>
    <div class="col-8">
      <h1 class="text-danger">HTML text fundamentals</h1>

          

      <h3>Intro</h3>
      <div>
        <p>One of HTML's main jobs is to give text structure so that a browser can display an HTML document the way its developer intends.</p>
        <hr />
        <hr />
      </div>

      <h3>The basics: headings and paragraphs</h3>
      <div>
        <p>Most structured text consists of headings and paragraphs, whether you are reading a story, a newspaper, a college textbook, a magazine, etc.</p>
        <img src="../img/newspaper_small.jpg" class="img-fluid" alt="">
        <hr />
        <hr />
      </div>

      <h3>Implementing structural hierarchy</h3>
      <div>
        <p>
        the &lt;h1> element represents the title of the story, the &lt;h2> elements represent the title of each chapter, and the &lt;h3> elements represent sub-sections of each chapter:
        </p>
        <pre>
&lt;h1>The Crushing Bore&lt;/h1>

&lt;p>By Chris Mills&lt;/p>

&lt;h2>Chapter 1: The dark night&lt;/h2>

&lt;p>
  It was a dark night. Somewhere, an owl hooted. The rain lashed down on the…
&lt;/p>

&lt;h2>Chapter 2: The eternal silence&lt;/h2>

&lt;p>Our protagonist could not so much as a whisper out of the shadowy figure…&lt;/p>

&lt;h3>The specter speaks&lt;/h3>

&lt;p>
  Several more hours had passed, when all of a sudden the specter sat bolt
  upright and exclaimed, "Please have mercy on my soul!"
&lt;/p>

        </pre>

        <ul>
            <li>Preferably, you should use a single &lt;h1> per page—this is the top level heading, and all others sit below this in the hierarchy.</li>
            <li>Make sure you use the headings in the correct order in the hierarchy. Don't use &lt;h3> elements to represent subheadings, followed by &lt;h2> elements to represent sub-subheadings—that doesn't make sense and will lead to weird results.</li>
            <li>Of the six heading levels available, you should aim to use no more than three per page, unless you feel it is necessary. Documents with many levels (for example, a deep heading hierarchy) become unwieldy and difficult to navigate. On such occasions, it is advisable to spread the content over multiple pages if possible.</li>
        </ul>
        <hr />
        <hr />
      </div>

      <h3>Why do we need structure?</h3>
      <div>
        <pre>
&lt;!DOCTYPE html>
&lt;html lang="en-us">
  &lt;head>
    &lt;meta charset="utf-8">
    &lt;meta name="viewport" content="width=device-width">
    &lt;title>Quick hummus recipe&lt;/title>
  &lt;/head>
  &lt;body>
    Quick hummus recipe

    This recipe makes quick, tasty hummus, with no messing. It has been adapted from a number of different recipes that I have read over the years.

    Hummus is a delicious thick paste used heavily in Greek and Middle Eastern dishes. It is very tasty with salad, grilled meats and pitta breads.

    Ingredients

    1 can (400g) of chick peas (garbanzo beans)
    175g of tahini
    6 sundried tomatoes
    Half a red pepper
    A pinch of cayenne pepper
    1 clove of garlic
    A dash of olive oil

    Instructions

    Remove the skin from the garlic, and chop coarsely
    Remove all the seeds and stalk from the pepper, and chop coarsely
    Add all the ingredients into a food processor
    Process all the ingredients into a paste.
    If you want a coarse "chunky" hummus, process it for a short time
    If you want a smooth hummus, process it for a longer time

    For a different flavour, you could try blending in a small measure of lemon and coriander, chili pepper, lime and chipotle, harissa and mint, or spinach and feta cheese. Experiment and see what works for you.

    Storage

    Refrigerate the finished hummus in a sealed container. You should be able to use it for about a week after you've made it. If it starts to become fizzy, you should definitely discard it.

    Hummus is suitable for freezing; you should thaw it and use it within a couple of months.


  &lt;/body>
&lt;/html>
        </pre>
        <p>However, when you open the document in your browser, you'll see that the text appears as a big chunk!</p>
        <img src="../img/screen_shot_2017-03-29_at_09.20.35.png" class="img-fluid" alt="">
        <p>This is because there are no elements to give the content structure, so the browser does not know what is a heading and what is a paragraph.</p>

        <ul>
            <li>Users looking at a web page tend to scan quickly to find relevant content, often just reading the headings, to begin with. (We usually spend a very short time on a web page.) If they can't see anything useful within a few seconds, they'll likely get frustrated and go somewhere else.</li>
            <li>Search engines indexing your page consider the contents of headings as important keywords for influencing the page's search rankings. Without headings, your page will perform poorly in terms of SEO (Search Engine Optimization).</li>
            <li>Severely visually impaired people often don't read web pages; they listen to them instead. This is done with software called a screen reader. This software provides ways to get fast access to given text content. Among the various techniques used, they provide an outline of the document by reading out the headings, allowing their users to find the information they need quickly. If headings are not available, they will be forced to listen to the whole document read out loud.</li>
            <li>To style content with CSS, or make it do interesting things with JavaScript, you need to have elements wrapping the relevant content, so CSS/JavaScript can effectively target it.</li>
        </ul>

        <p>Therefore, we need to give our content structural markup.</p>
        <hr />
        <hr />
      </div>

      <h3>Why do we need semantics?</h3>
      <div>
        <p>Semantics are relied on everywhere around us—we rely on previous experience to tell us what the function of an everyday object is; when we see something, we know what its function will be. So, for example, we expect a red traffic light to mean "stop," and a green traffic light to mean "go." Things can get tricky very quickly if the wrong semantics are applied. (Do any countries use red to mean "go"? We hope not.)</p>

        <p>In a similar way, we need to make sure we are using the correct elements, giving our content the correct meaning, function, or appearance. In this context, the h1 element is also a semantic element, which gives the text it wraps around the role (or meaning) of "a top level heading on your page."</p>

        <p>This is a &lt;span> element. It has no semantics. You use it to wrap content when you want to apply CSS to it (or do something to it with JavaScript) without giving it any extra meaning. </p>
        <hr />
        <hr />
      </div>


      <h3>Lists</h3>
      <div>
        <h1>Later</h1>
        <hr />
        <hr />
      </div>     

      <h3>Emphasis and importance</h3>
      <div>
        <h1>Later</h1>
        <hr />
        <hr />
      </div> 

      <h3>Lists</h3>
      <div>
        <h1>Later</h1>
        <hr />
        <hr />
      </div> 

      <h3></h3>
      <div>
        <hr />
        <hr />
      </div>     

      <h3></h3>
      <div>
        <hr />
        <hr />
      </div>     

      <h3></h3>
      <div>
        <hr />
        <hr />
      </div>     

      <h3></h3>
      <div>
        <hr />
        <hr />
      </div>     

      <h3></h3>
      <div>
        <hr />
        <hr />
      </div>     

      <h3></h3>
      <div>
        <hr />
        <hr />
      </div>     

      <h3></h3>
      <div>
        <hr />
        <hr />
      </div>     

      <h3></h3>
      <div>
        <hr />
        <hr />
      </div>     

         
      
    
    </div>
  </div>
</div>

<?php include_once '../../inc/footer.php'; ?>
