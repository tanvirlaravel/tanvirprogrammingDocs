<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>

    <h4 class="mb-3">es6 | Vite</h4>

        <div class="row">

            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div>

           <div class="col-8">
            <h3>Introduction</h3>
            <p>Vite (pronounced "veet") is a web development build tool that is designed to be lightweight and fast. It is similar to tools like webpack and Rollup, but with a focus on simplicity and ease of use. One of the main features of Vite is its instant reloading, which allows you to see changes to your code almost instantly in the browser without the need for a full rebuild. Vite is also built with modern JavaScript and TypeScript in mind, and can support features like JSX, CSS Modules, and TypeScript out of the box. Vite is still relatively new and is not as widely used as other tools like webpack, but it has gained popularity in recent years due to its simplicity and performance.</p>

            <hr>
            <hr>

            <h3>vite.config.js</h3>
            <p>The Vite configuration file is a JavaScript module that exports an object containing various options and settings for your Vite project. This file is typically named vite.config.js and is placed in the root directory of your project.</p>

            <pre>
              module.exports = {
                    // Root directory of your app.
                    root: "src",

                    // Entry point of your app.
                    // This can be a single file or an array of files.
                    entry: "index.js",

                    // Output directory and file name for the final build.
                    outDir: "dist",
                    outFile: "index.js",

                    // Enable TypeScript support.
                    typescript: true,

                    // Enable JSX support.
                    jsx: "react",

                    // Enable CSS Modules support.
                    css: {
                      modules: true
                    }
              }

            </pre>

            <hr>
            <hr>

            </div>
        </div>




    </div>



<?php include_once '../../inc/footer.php'; ?>
