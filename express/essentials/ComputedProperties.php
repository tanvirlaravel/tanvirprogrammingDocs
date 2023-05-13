<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div><!-- cold-4 end -->

           <div class="col-8">
           <h2 class="text-info">Computed Properties</h2>

           <div>
               <h3>Basic Example</h3>
               <p>for complex logic that includes <code>reactive data</code>, it is recommended to use a computed property</p>
               <pre>                  
<span>{{ author.books.length > 0 ? 'Yes' : 'No' }}</span>
OR
const publishedBooksMessage = computed(() => {
  return author.books.length > 0 ? 'Yes' : 'No'
})

               </pre>
               <p>the returned value is a computed ref. Similar to normal refs, you can access the computed result as publishedBooksMessage.value. Computed refs are also auto-unwrapped in templates so you can reference them without .value in template expressions.</p>
           </div>
           <hr>
           <hr>


            <div>
               <h3>Computed Caching vs. Methods</h3>
               <p>Instead of a computed property, we can define the same function as a method. For the end result, the two approaches are indeed exactly the same. However, the difference is that computed properties are cached based on their reactive dependencies. A computed property will only re-evaluate when some of its reactive dependencies have changed. This means as long as author.books has not changed, multiple access to publishedBooksMessage will immediately return the previously computed result without having to run the getter function again.</p>
           </div>
           <hr>
           <hr>


            <div>
               <h3>Writable Computed</h3>
               <p><a href="https://vuejs.org/guide/essentials/computed.html#writable-computed" target="_blank">Doc's</a></p>
           </div>
           <hr>
           <hr>


            <div>
               <h3>Best Practices</h3>
               <h5>Getters should be side-effect free</h5>
               <p>It is important to remember that computed getter functions should only perform pure computation and be free of side effects. For example, don't make async requests or mutate the DOM inside a computed getter! Think of a computed property as declaratively describing how to derive a value based on other values - its only responsibility should be computing and returning that value.</p>
           </div>
           <hr>
           <hr>


           




           </div><!-- cold-8 end -->
    </div><!-- row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>
