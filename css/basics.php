<?php include_once '../inc/header.php'; ?>
<div class="container">

<?php include_once './nav.php'; ?>


<div class="row">

    <div class="col-4">
        <ul id="sidebar_links"></ul>
    </div>


    <div class="col-8">
        <h1 class="text-danger">Basics</h1>

        <h3>Intro</h3>
        <div>
            <p>CSS describes how elements should be rendered on screen, on paper, in speech, or on other media.</p>
            <p>CSS (Cascading Style Sheets) is the code that styles web content.</p>
            <p>We'll answer questions like</p>
            <ul>
                <li>How do I make text red?</li>
                <li>How do I make content display at a certain location in the (webpage) layout?</li>
                <li>How do I decorate my webpage with background images and colors?</li>
            </ul>
            <p></p>
        </div>
        <hr>
        <hr>


        <h3>What is CSS?</h3>
        <div>
           
            <p>Like HTML, CSS is not a programming language. It's not a markup language either. CSS is a style sheet language. CSS is what you use to selectively style HTML elements. </p>
        </div>
        <hr>
        <hr>

        

        <h3>Anatomy of a CSS ruleset</h3>
        <div>
            <img src="./img/css-declaration-small.png" alt="" class="img-fluid">
        </div>
        <hr>
        <hr>

        <h3>Different types of selectors</h3>
        <div>
           <ul>
            <li>Element selector (sometimes called a tag or type selector)</li>
            <li>ID selector</li>
            <li>Class selector</li>
            <li>Attribute selector: <code>img[src]</code></li>
            <li>Pseudo-class selector : <code>a:hover</code> </li>
           </ul>          
        </div>
        <hr>
        <hr>

    
        <h3>Fonts and text</h3>
        later

        <h3>CSS: all about boxes</h3>
        <div>
            <p>Something you'll notice about writing CSS: a lot of it is about boxes. This includes setting size, color, and position. Most HTML elements on your page can be thought of as boxes sitting on top of other boxes.</p>
            <img src="./img/boxes.jpg" alt="" class="img-fluid">
            <p>CSS layout is mostly based on the box model. Each box taking up space on your page has properties like:</p>

            <ol>
                <li>padding, the space around the content. In the example below, it is the space around the paragraph text.</li>
                <li>border, the solid line that is just outside the padding.</li>
                <li>margin, the space around the outside of the border.</li>
            </ol>
        </div>
        <hr>        
        <hr>        

    </div>
</div>
</div>



<?php include_once '../inc/footer.php'; ?>
