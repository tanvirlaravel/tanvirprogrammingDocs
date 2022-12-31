<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
           <div class="col-8">
           <h1 class="text-danger">Declarative Rendering</h1>
          
            <h3>imperative code</h3>
            <p>Imperative code is a type of programming code that specifies a series of steps or actions to be executed in order to achieve a desired result. It is called "imperative" because it tells the computer what to do, rather than declaratively specifying the result that is desired.</p> 
            <p>Imperative code is often used in procedural programming languages, such as C and FORTRAN, and is characterized by the use of loops, conditionals, and function calls to control the flow of the program.</p>
            <pre>
            for (let i = 0; i < array.length; i++) {
                console.log(array[i]);
            }

            </pre> 
            <p>Imperative code can be useful for certain types of tasks, such as low-level system programming or data manipulation, but it can be more verbose and difficult to maintain than declarative code, especially in larger applications. Declarative code, on the other hand, specifies the desired result rather than the steps to achieve it, and is often easier to read and understand.</p>
          
            <hr>
            <hr>

            <h3>Declarative code</h3>
            <p>Declarative code is a type of programming code that specifies the result that is desired, rather than the steps or actions needed to achieve it. It is called "declarative" because it specifies what the code should do, rather than how it should do it.</p>
            <p>Declarative code is often used in modern web development frameworks and libraries, such as Vue.js, React, and Angular, to build interactive, data-driven user interfaces. It is characterized by the use of declarative syntax, such as templates and directives, to specify the structure and behavior of the view.</p>
            <pre>
            &lt;template>
            &lt;ul>
                &lt;li v-for="item in items" :key="item.id">{{ item.name }}&lt;/li>
            &lt;/ul>
            &lt;/template>

            &lt;script>
            export default {
            data() {
                return {
                items: [
                    { id: 1, name: 'Item 1' },
                    { id: 2, name: 'Item 2' },
                    { id: 3, name: 'Item 3' },
                ],
                };
            },
            };
            &lt;/script>

            </pre>
            <p>In this example, the v-for directive is used to iterate over the items array and render a list item for each element. The :key directive is used to specify a unique identifier for each element, which is necessary for efficient rendering.</p>
            <p>Declarative code can make it easier to build complex, dynamic user interfaces because it separates the structure of the view from the underlying logic of the application. It is often easier to read and understand than imperative code, and can be more maintainable in larger applications.</p>
            <hr>
            <hr>
            
            <h3>Imperative vs Declarative</h3>
            <p>Imperative code and declarative code are two different styles of programming that have different strengths and characteristics.</p>
            <p><span class="text-info">Imperative</span> code is a type of programming code that specifies a series of steps or actions to be executed in order to achieve a desired result. It is called "imperative" because it tells the computer what to do, rather than declaratively specifying the result that is desired. Imperative code is often used in procedural programming languages, such as C and FORTRAN, and is characterized by the use of loops, conditionals, and function calls to control the flow of the program.</p>
            <p><span class="text-info">Declarative</span> code is a type of programming code that specifies the result that is desired, rather than the steps or actions needed to achieve it. It is called "declarative" because it specifies what the code should do, rather than how it should do it. Declarative code is often used in modern web development frameworks and libraries, such as Vue.js, React, and Angular, to build interactive, data-driven user interfaces. It is characterized by the use of declarative syntax, such as templates and directives, to specify the structure and behavior of the view.</p>
            <p>In general, declarative code is easier to read and understand than imperative code, and can be more maintainable in larger applications. However, imperative code can be more flexible and powerful in certain contexts, such as low-level system programming or data manipulation.</p>



           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>