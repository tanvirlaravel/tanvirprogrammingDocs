<?php include_once '../inc/header.php'; ?>
<div class="container">

    <?php include_once 'nav.php'; ?>


    <div class="row">
           <div class="col-3">
            <a href="#e" class="p-2 display-4 d-inline-block bg-dark text-warning ">E</a>
            <a href="#n" class="p-2 display-4 d-inline-block bg-dark text-warning ">N</a>
           </div>
           <div class="col-9">
           <!
            ================
            eager load
            ================
            -->
            <section class="eager load">
            <h1 id="e">E</h1> <a href="#variable">eager load</a>

            <h3 id="Hoisting">eager load</h3>
            <p>Eager loading is a technique in Laravel's Eloquent ORM that allows you to pre-load relationships when querying a model, reducing the number of database queries needed to load the related data.</p>
            <p>For example, consider a blog with posts and comments. Each post has many comments, and each comment belongs to a single post. To retrieve all the comments for a post, you would normally use a loop like this:</p>

            <pre>
              $comments = [];
              foreach ($posts as $post) {
                  $comments[] = $post->comments;
              }
            </pre>

            <p>This would execute a separate database query for each post to retrieve its comments, which can be inefficient if you have a large number of posts.</p>
            <p>To avoid this, you can use eager loading to pre-load the comments for all the posts in a single query:</p>

            <pre>
              $posts = App\Post::with('comments')->get();

              foreach ($posts as $post) {
                  $comments[] = $post->comments;
              }
            </pre>
            <p>This will execute a single query to retrieve all the posts and their associated comments, rather than executing a separate query for each post.</p>
            <p>Eager loading is especially useful when you have nested relationships, as it can help to avoid the "N+1" query problem, where one query is executed for each level of the relationship.</p>
            <p>To eager load multiple relationships, you can pass an array to the with method:</p>
            <pre>
              $posts = App\Post::with(['comments', 'tags'])->get();
            </pre>
            <p>This will pre-load the comments and tags for all the posts in a single query.</p>



            <a href="#h" class="p-1 d-inline-block bg-dark text-warning  float-right">H Top</a>
            </section>
            <hr>
            <hr>

            <!
             ================
             "N+1" query problem
             ================
             -->
             <section class="eager load">
             <h1 id="n">N</h1> <a href="#variable">"N+1" query problem</a>

             <h3 id="Hoisting">"N+1" query problem</h3>
             <p>The N+1 query problem is a performance issue that can occur when a computer program retrieves data from a database. It occurs when the program makes one initial query to retrieve a list of items, and then makes an additional query for each item in the list. This can be inefficient because it requires many separate trips to the database, and can lead to slower performance as the number of items in the list increases.</p>
             <p>One way to address the N+1 query problem is to use a technique called "eager loading", which allows the program to retrieve all of the necessary data in a single query, rather than making multiple separate queries. This can be more efficient, as it reduces the number of trips to the database and minimizes the amount of time spent waiting for data to be retrieved.</p>
             <p>There are various strategies that can be used to optimize database queries and avoid the N+1 query problem. These may include using appropriate indexing, optimizing the database schema, and using techniques such as caching to reduce the number of queries that need to be made.</p>


             <a href="#h" class="p-1 d-inline-block bg-dark text-warning  float-right">H Top</a>
             </section>
             <hr>
             <hr>







           </div>
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>
