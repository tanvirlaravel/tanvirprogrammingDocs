<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
         <div class="col-4">
            <ul id="sidebar_links">

            </ul>
         </div> <!-- end col-4 -->
         
         
         <div  iv class="col-8">
           <h2 class="text-danger">Introduction</h2>

           
                <h3>What is Vue?</h3>
                <div>
                    <p>Vue is a JavaScript framework for building <a href="http://tanvirprogrammingdocs.test/vue/Theory/user_interfaces.php" target="_blank" >user interfaces </a> ?. It builds on top of standard HTML, CSS, and JavaScript and provides a <a href="http://tanvirprogrammingdocs.test/vue/Theory/declarative_programming.php" target="_blank">declarative</a>  ? and <a href="http://tanvirprogrammingdocs.test/vue/Theory/component-based.php" target="_blank">component-based</a> ? programming model that helps you efficiently develop user interfaces, be they simple or complex.</p>
                    <h5>The two core features of Vue:</h5>
                    <ul>
                        <li><a href="http://tanvirprogrammingdocs.test/vue/Theory/Declarative_Rendering.php" target="_blank">Declarative Rendering</a></li>
                        <li><a href="http://tanvirprogrammingdocs.test/vue/Theory/vue_Reactivity.php" target="_blank">Reactivity</a></li>
                    </ul>
                    <p><strong>Reactivity</strong>: Vue automatically tracks JavaScript state changes and efficiently updates the DOM when changes happen.</p>
                   
                </div>


                 <h3>The Progressive Framework</h3>
                <div>
                    <p>Vue is a progressive JavaScript framework for building user interfaces. What this means is that Vue is designed to be highly flexible and adaptable, allowing developers to use as much or as little of the framework as they need to build their application.</p>
                    <p>At its core, Vue provides a set of essential features for building user interfaces, including reactive data binding, declarative rendering, and a component-based architecture. These features make it easy to create dynamic and responsive user interfaces without having to write a lot of complex code.</p>
                    <p>However, Vue also includes a wide range of optional features and plugins that can be added as needed to extend the functionality of the framework. This includes support for routing, state management, server-side rendering, and more.</p>
                    <p>This modular approach to building applications makes Vue a highly scalable and versatile framework. Developers can start small with just the core features and gradually add more advanced functionality as their application grows and their needs change.</p>
                    <p>The progressive nature of Vue also makes it easy for developers to integrate Vue into existing projects, or to use Vue alongside other frameworks or libraries. This makes Vue a popular choice for building applications of all sizes and types, from simple prototypes to complex enterprise applications.</p>
                    <p>Overall, Vue's progressive approach to building user interfaces makes it a highly flexible and adaptable framework that can be customized to meet the specific needs of any project.</p>
                   
                   
                    <hr>
                    <hr>
                </div>


                 <h3>Single-File Components</h3>
                <div>
                    <p>Single-File Components (SFCs) are a feature of the Vue.js framework that allows developers to define a Vue component in a single file. SFCs are an alternative to the traditional approach of defining a component in multiple separate files for the template, script, and style.</p>
                    <p>In an SFC, all of the necessary code for a component is defined in a single file with a .vue extension. This file includes three main sections:</p>
                    <ol>
                        <li>The template section defines the HTML markup for the component.</li>
                        <li>The script section defines the JavaScript logic for the component, including data, methods, and lifecycle hooks.</li>
                        <li>The style section defines the CSS styles for the component.</li>
                        
                    </ol>


                    <p>Using an SFC has several advantages over the traditional approach of defining a component in separate files. For example:</p>
                     <ul>
                        <li>SFCs make it easier to manage and organize component code, as everything is in a single file.</li>
                        <li>SFCs make it easier to share components between projects, as all of the necessary code is in a single file that can be easily copied or imported.</li>
                        <li>SFCs allow for more flexible tooling, as many code editors and IDEs provide specialized support for working with .vue files.</li>
                        
                    </ul>
                    <p>In addition to these benefits, SFCs also allow for more advanced features like scoped CSS, which ensures that CSS styles only apply to the component they are defined in, and not to other components on the page.</p>
                    <p>Overall, Single-File Components are a powerful feature of the Vue.js framework that make it easier to write, manage, and share components in a more organized and efficient way.</p>
                   
                    <hr>
                    <hr>
                </div>


                 <h3>API Styles</h3>
                <div>
                    <p>Vue components can be authored in two different API styles: Options API and Composition API.</p>
                   <h5>Options API</h5>
                   <p>With Options API, we define a component's logic using an object of options such as data, methods, and mounted. Properties defined by options are exposed on this inside functions, which points to the component instance:</p>

                   <h5>Composition API</h5>
                   <p>With Composition API, we define a component's logic using imported API functions. In SFCs, Composition API is typically used with &lt;script setup>. The setup attribute is a hint that makes Vue perform compile-time transforms that allow us to use Composition API with less boilerplate</p>
                    <hr>
                    <hr>
                </div>


                

         </div> <!-- end col-8 -->
   </div><!-- end row -->
</div> <!-- end container -->




<?php include_once '../../inc/footer.php'; ?>
