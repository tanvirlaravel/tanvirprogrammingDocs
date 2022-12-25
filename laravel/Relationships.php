<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
           <h2 class="text-danger">Eloquent: Relationships</h2>


           <h3 class="text-success">Introduction</h3>
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

           
           <h3 class="text-success">Defining Relationships</h3>
          
           <p>Eloquent relationships are defined <code>as methods</code> on your Eloquent model classes. Since relationships also serve as powerful query builders, defining relationships as methods provides powerful method chaining and querying capabilities.</p>          
           <pre>
           $user->posts()->where('active', 1)->get();
           </pre>
          
           <hr>
           <hr>
           

           <h3 class="text-success">One To One</h3>
          <p><code>User</code> model (parent) & <code>Phone</code> model (child)</p>
          <p>a User model might be associated with one Phone model.</p>
          <pre>
           class User extends Model
            {                
                public function phone()
                {
                    return $this->hasOne(Phone::class);
                }
            }
           </pre> 

           <h5>Inverse Of The One To One</h5>
           <pre>
           class Phone extends Model
            {
                public function user()
                {
                    return $this->belongsTo(User::class);
                }
            }
           </pre>
           <p>When invoking the user method, Eloquent will attempt to find a User model that has an id which matches the user_id column on the Phone model.</p>         


            <h5>create a new phone for a user or update an existing phone for a user:</h5>
            <pre>
            $user = User::find(1);
            $phone = new Phone();
            $phone->number = '123-456-7890';
            $phone->save();

            $user->phone()->save($phone);

            </pre>
            <hr>
            <pre>
            $user = User::find(1);
            $phone = $user->phone;
            $phone->number = '123-456-7891';
            $phone->save();

            </pre>
            <hr>
            <hr>

            <h3 class="text-success">One To Many</h3>
            <p><code>Post</code> model & <code>Comment</code> model</p>
            <p>A one-to-many relationship is used to define relationships where a <code>single</code> model is the <code>parent</code> to one or <code>more child models</code></p>
            <pre>
            class Post extends Model
            {
            
                public function comments()
                {
                    return $this->hasMany(Comment::class);
                }
            }
            </pre>
            <p>Eloquent will assume the foreign key column on the Comment model is post_id.</p>

           
            <h4>One To Many (Inverse) / <code>Belongs To</code></h4>
            <pre>
            class Comment extends Model
            {
                public function post()
                {
                    return $this->belongsTo(Post::class);
                }
            }
            </pre>
            <p>In the example above, Eloquent will attempt to find a Post model that has an id which matches the post_id column on the Comment model.</p>

            <h5>create new posts for a user or update existing posts for a user:</h5>
            <pre>
            $user = User::find(1);
            $post = new Post();
            $post->title = 'My First Post';
            $post->body = 'This is the body of my first post.';
            $post->save();

            $user->posts()->save($post);


            $user = User::find(1);
            $post = $user->posts()->where('title', 'My First Post')->first();
            $post->title = 'Updated Title';
            $post->save();
            </pre>


            
          
           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>