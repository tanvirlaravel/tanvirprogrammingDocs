<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>
    <h2>Component</h2>

    <div class="row">

           <div class="col-4">
            <ul id="sidebar_links">
            </ul>           
           </div>


           <div class="col-8">


           <h3>Introduction</h3>
            <div>
                <p>React applications are built from <code>isolated</code> pieces of UI called components </p>

                <p>A component is a piece of the UI (user interface) that has its own logic and appearance.</p>
                <p> A component can be as small as a button, or as large as an entire page.</p>

                <p>React is a JavaScript library for rendering user interfaces (UI). UI is built from small units like buttons, text, and images. React lets you combine them into reusable, nestable components. From web sites to phone apps, everything on the screen can be broken down into components.</p>

                <p>React components are JavaScript functions that return markup:</p>

                <pre>
                function MyButton() {
                    return (
                        &lt;button>I'm a button&lt;/button>
                    );
                }
                </pre>

                <p>Notice that  &lt;MyButton /> starts with a capital letter. That’s how you know it’s a React component. React component names must always start with a capital letter, while HTML tags must be lowercase.</p>

                <p>The export default keywords specify the main component in the file.</p>
            </div>
           <hr>
           <hr>


           <!-- <h3>Introduction</h3>
            <div>
                <p></p>
            </div>
           <hr>
           <hr> -->











           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
