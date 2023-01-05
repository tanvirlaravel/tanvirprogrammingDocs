<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
           <h2 class="text-danger">Eloquent: Relationships</h2>


           <h3 class="text-success">Introduction</h3>
          <div>
          <p>Database tables are often related to one another</p>
           <ol>
             <li>One To One</li>
             <li>One To Many</li>
             <li>Many To Many</li>
             <li>Has One Through</li>
             <li>Has Many Through</li>
             <li>One To One (Polymorphic)</li>
             <li>One To Many (Polymorphic)</li>
             <li>Many To Many (Polymorphic)</li>
           </ol>
           
           <hr>
           <hr>
          </div>



           <h3 class="text-success">Defining Relationships</h3>
          <div>
          <p>Eloquent relationships are defined <code>as methods</code> on your Eloquent model classes. Since relationships also serve as powerful query builders, defining relationships as methods provides powerful method chaining and querying capabilities.</p>
           <pre>
           $user->posts()->where('active', 1)->get();
           </pre>

           <hr>
           <hr>
          </div>
          


           <h3 class="text-success">One To One</h3>
           <div>
          <p><code>User</code> model (parent) & <code>Phone</code> model (child)</p>
          <p>a User model might be associated with one Phone model.</p>
          <p>In Laravel, a one-to-one relationship is a relationship where a model has a single related model. For example, a User model might have a single Phone model, indicating that each user has a single phone.</p>
          <p class="text-primary">To define a one-to-one relationship in Laravel</p>
          <pre>
           class User extends Model
            {
                public function phone()
                {
                    return $this->hasOne(Phone::class);
                }
            }
           </pre>

           <p class="text-primary">Inverse Of The One To One</p>
           <pre>
           class Phone extends Model
            {
                public function user()
                {
                    return $this->belongsTo(User::class);
                }
            }
           </pre>

            <hr>
            <hr>
          </div>

             <h3 class="text-success">One To One Use</h3>
             <div>
               <p>With these relationships defined, you can access the related model using the name of the relationship method.
      <pre class="p-2 bg-dark text-white">
      // to get the phone for a user
      <span class="text-warning">
      $user->phone
      </span>      
      // To get the user for a phone
      // When invoking the user method, Eloquent will attempt to find a User model that 
      has an id which matches the user_id column on the Phone model     
      <span class="text-warning">
      $phone->user
      </span>      
      // Eager load the related models when querying the database 
      // This will retrieve all users, along with their associated phone models, in a 
      single database query.
      <span class="text-warning">
      $users = App\User::with('phone')->get();
      </span>
      //create a new phone for a user or update an existing phone for a user: 
        <span class="text-warning">
      $user = User::find(1);
      $phone = new Phone();
      $phone->number = '123-456-7890';

      $phone->save();                
      $user->phone()->save($phone);
      </span>
      or
      <span class="text-warning">
      $user = User::find(1);
      $phone = $user->phone;
      $phone->number = '123-456-7891';
      $phone->save();
      </span>

      

      </pre>

               <hr>
               <hr>
             </div>

             <h3 class="text-success">One To One Factory</h3>
             <div>

              <hr><hr>
             </div>

            <h3 class="text-success">One To Many</h3>
            <div>
            <p><code>Post</code> model has many <code>Comment</code> models</p>
            <p>A one-to-many relationship is used to define relationships where a <code>single</code> model is the <code>parent</code> to one or <code>more child models</code></p>
            <p>
            In Laravel, a one-to-many relationship is a relationship where a model has multiple related models. For example, a User model might have multiple Post models, indicating that each user has written multiple posts.
            </p>

            <p class="text-primary">Define One To Many relationship</p>
            <pre>
            <span class="text-warning">Post</span> Model 

            class Post extends Model
            {

                public function <span class="text-warning">comments()</span>
                {
                    return $this->hasMany(<span class="text-warning">Comment::class</span>);
                }
            }
            </pre>

            <p>Eloquent will assume the foreign key column on the <code>Comment</code> model is <code>post_id</code>.</p>


            <p class="text-primary">One To Many (Inverse) / <code>Belongs To</code></p>
            <pre>
            class Comment extends Model
            {
                public function <span class="text-warning">post()</span>
                {
                    return $this->belongsTo(<span class="text-warning">Post::class</span>);
                }
            }
            </pre>
            <p>In the example above, Eloquent will attempt to find a <code>Post</code> model . <code>Post</code> model <code>id</code> will match with <code>Comment</code> models <code>post_id</code></p>           
            <hr>
            <hr>
            </div>

            <h3 class="text-success">One To Many Use</h3>
            <div>
          
            <pre>
            // to get the comments for a post
            <span class="text-warning">$post->comments</span>

            // To get the post for a comment, 
            <span class="text-warning">$comment->post</span>

           // eager load 
           <span class="text-warning">$posts = App\Post::with('comments')->get();</span>          

            // create new posts for a user or update existing posts for a user:
            $post = Post::find(1);
            $comment = new Comment();
            $comment->title = 'My First comment';
            $comment->body = 'This is the body of my first comment.';
            $comment->save();

            $post->comments()->save($comment);


            $post = Post::find(1);
            $comment = $post->comments()->where('title', 'My First Post')->first();
            $comment->title = 'Updated Title';
            $comment->save();
            </pre>
              <hr>
              <hr>
            </div>

            <h3 class="text-success">One To Many Factory</h3>
            <div>
              <hr>
              <hr>
            </div>

            <h3>Belongs To Relationships</h3>
            <div>
            <p>Post belongs to User </p>
            <p>In Laravel's Eloquent ORM, a "belongs to" relationship is a one-to-one relationship where a model belongs to a single parent model. For example, a Post model might belong to a User model, where each post is written by a single user.</p>
            <pre>
              class Post extends Model
              {
                  public function user()
                  {
                      return $this->belongsTo(User::class);
                  }
              }

            </pre>
            <p>This defines a user method on the Post model which returns the relationship between the post and the user who wrote it.</p>
            <p>To access the user that a post belongs to, you can use the user method like this:</p>
            <pre>
              $post = App\Post::find(1);

              $user = $post->user;

              </pre>
            <p>This will retrieve the user that the post belongs to. You can then access the user's attributes using dot notation:</p>
            <pre>
              $name = $post->user->name;
            </pre>
            <p>You can also use the with method to eager load the relationship when querying the posts:</p>
            <pre>
              $posts = App\Post::with('user')->get();

              foreach ($posts as $post) {
                  echo $post->user->name;
              }

              </pre>
            <p>This will execute a single query to retrieve all the posts and their associated users, rather than executing a separate query for each post.</p>
            </div>

              <h3>Polymorphic Relationships</h3>
              <div>
                <h5>Defination</h5>
              </div>

           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
