<?php include_once '../../inc/header.php'; ?>

    <div class="container">
    <?php include_once '../js.nav.php'; ?>
      
    <h4 class="mb-3">es6 | module bundler</h4>
    
        <div class="row">
            
            <div class="col-4">
                <ul id="sidebar_links"></ul>
            </div> 

           <div class="col-8">
            <h3>Introduction</h3>
            <p>A module bundler is a tool that packages multiple modules (usually written in JavaScript) into a single file (or a set of files) that can be loaded by a web browser. Module bundlers are commonly used to create production-ready builds of JavaScript applications, as they can optimize and minimize the bundled code, as well as process and transform various types of assets (such as images and fonts)..</p>
            <p>There are several popular module bundlers available for JavaScript, including Webpack, Browserify, and Rollup. Each of these tools has its own unique features and capabilities, and can be used in different contexts and with different types of projects.</p>
            <p>To use a module bundler, you will typically need to create a configuration file that defines how your code should be bundled. This configuration file specifies the entry point for your application (the root file where the bundling process should start), as well as any loaders and plugins that should be applied to your code.</p>
            <p>Once you have defined your configuration, you can run the module bundler from the command line to create a production-ready build of your application.</p>
            <p>Module bundlers are an essential part of modern JavaScript development, as they allow you to organize and reuse code, optimize your application's performance, and manage complex dependencies.</p>
             <hr>
            <hr>

            <h3>Webpack</h3>
           <div>
            <p>Webpack is a static module bundler for modern JavaScript applications. It takes your code, which may be written in a variety of languages and formats (such as JavaScript, TypeScript, SCSS, and more), and bundles it into a single file or a set of files that can be loaded by a web browser.</p>
            <p>Webpack is commonly used to create production-ready builds of JavaScript applications, as it can optimize and minimize the bundled code, as well as process and transform various types of assets (such as images and fonts).</p>
            <p>To use Webpack, you will need to create a configuration file (usually called webpack.config.js) that defines how your code should be bundled. This configuration file specifies the entry point for your application (the root file where the bundling process should start), as well as any loaders and plugins that should be applied to your code.</p>
            
            <pre>
            module.exports = {
            entry: './src/index.js',
            output: {
                path: __dirname + '/dist',
                filename: 'bundle.js'
            }
            };

            </pre>
            <p>You can then run Webpack from the command line using the webpack command, which will bundle your code according to the configuration defined in the webpack.config.js file.</p>
            <p>Webpack is a powerful tool that offers many options and customization possibilities. It can be used with a variety of languages and frameworks, including React, Angular, and Vue.js.</p>
           </div>  
            <hr>
            <hr>


            <h3>Vite </h3>
            <div>
           <p>Vite (pronounced "veet") is a modern JavaScript build tool that aims to be fast and lightweight, with a focus on simplicity and ease of use. It was designed to be an alternative to larger, more complex build tools like Webpack and Rollup, and is particularly well-suited for building smaller-scale projects or prototypes.</p>
           <p>One of the key features of Vite is its use of native ES module import syntax for bundling and building, which allows it to perform faster and with less configuration than other build tools that rely on a separate module system (such as CommonJS or AMD). Vite also supports live reloading of code changes, automatic TypeScript type checking, and a range of other features.</p>
           <p>To use Vite, you will need to install it using npm or yarn, and then create a configuration file (called vite.config.js) that defines your build settings. Here is a simple example of a Vite configuration file:</p>
           <pre>
           module.exports = {
            outDir: 'dist',
            publicUrl: '/'
           }

           </pre>
           <p>You can then run Vite from the command line using the vite command, which will build your code according to the configuration defined in the vite.config.js file.</p>
           <p>Vite is a relatively new tool and is still under active development, but it has gained a lot of popularity due to its simplicity and performance. It is particularly well-suited for building small- to medium-sized projects that do not require a lot of complex configuration or optimization.</p>

           <h5>Vite Configure file</h5>
           <p>In the Vite build tool, the vite.config.js file is a configuration file that specifies how your code should be built and bundled.</p>
           <pre>
           module.exports = {
            outDir: 'dist',
            publicUrl: '/'
            }



            outDir: Specifies the directory where the built code should be output.

            publicUrl: Specifies the public URL of the application, which is used to resolve 
            asset URLs and generate the base tag in the generated HTML file.

            assetsDir: Specifies the directory where static assets (such as images and fonts) 
            should be placed.

            rollupOptions: Allows you to configure advanced Rollup options for bundling and
             optimization.

            define: Defines global constants that can be accessed from your code.

            alias: Allows you to create aliases for module imports, to simplify the import 
            paths in your code.

            optimizeDeps: Controls the optimization of third-party dependencies.

            minify: Enables minification of the built code.

            sourcemap: Controls the generation of source maps for the built code.

            esbuildTarget: Specifies the target JavaScript language version to be compiled 
            to by esbuild.

            experiments: Enables experimental features that are still in development.

            devOptions: Allows you to customize the development server options, such as the
             port number and the hostname.

           </pre>
           
            <hr>
            <hr>
            </div>
           
            



            <h3>Browserify</h3>
           <div>
            <p>Browserify is a JavaScript tool that allows you to use the CommonJS module system (used in Node.js) in the browser. It bundles your code and its dependencies into a single file that can be loaded by a web browser.</p>
            <p>To use Browserify, you will need to install it using npm or yarn, and then create a configuration file (usually called package.json) that defines your project dependencies. You can then use the browserify command from the command line to bundle your code.</p>
            <pre>
            // main.js

            const myModule = require('./myModule');

            console.log(myModule.hello());

            // myModule.js

            exports.hello = () => {
            return 'Hello from the module';
            }


            To bundle this code using Browserify, you can use the following command:
            browserify main.js -o bundle.js


            </pre>
            <p>This will create a file called bundle.js that contains both main.js and myModule.js, as well as any other dependencies that are required. You can then include bundle.js in your HTML file and run the code in the browser.</p>
            <p>Browserify is a popular tool for bundling JavaScript code, but it has been largely superseded by newer tools such as Webpack and Rollup, which offer more advanced features and better performance.</p>
            <p></p>
           </div>
            <pre>
            <script type="module" src="./app.js"></script>
            </pre>
           
            <hr>
            <hr>


            <h3>Rollup</h3>
            <div>
                <p>Rollup is a JavaScript module bundler that allows you to create small, optimized builds of your code and its dependencies. It uses the ES module syntax (used in modern JavaScript) to analyze your code and create a dependency graph, and then bundles the code into a single file or a set of files that can be loaded by a web browser.</p>
                <p>To use Rollup, you will need to install it using npm or yarn, and then create a configuration file (usually called rollup.config.js) that defines your build settings. This configuration file specifies the entry point for your application (the root file where the bundling process should start), as well as any plugins and options that should be applied to your code.</p>
                <pre>
                import commonjs from '@rollup/plugin-commonjs';
                import resolve from '@rollup/plugin-node-resolve';

                export default {
                input: 'src/index.js',
                output: {
                    file: 'dist/bundle.js',
                    format: 'cjs'
                },
                plugins: [
                    commonjs(),
                    resolve()
                ]
                };

                </pre>
                <p>You can then run Rollup from the command line using the rollup command, which will bundle your code according to the configuration defined in the rollup.config.js file.</p>
                <p>Rollup is a popular tool for bundling JavaScript code, particularly for creating smaller, optimized builds of libraries and frameworks. It offers a wide range of plugins and customization options, and can be used with a variety of languages and tools, including TypeScript and Babel.</p>
                
            </div>
     
           
            <hr>
            <hr>
            
            </div>
        </div>
          
           
           
      
    </div>
    
    

<?php include_once '../../inc/footer.php'; ?>


