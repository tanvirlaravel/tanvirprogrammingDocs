<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
           <h2 class="text-danger">Polymorphic Relationships</h2>


           <h3 class="text-success">Introduction</h3>
           <div>
           <p>In the Laravel web framework, polymorphic relationships allow a model to belong to more than one other model, on a single association. For example, a Comment model might belong to either a Post or a Video, and you can use a polymorphic relationship to represent this association.</p>
           <p>A polymorphic relationship allows the child model to belong to more than one type of model using a single association. For example, imagine you are building an application that allows users to share blog posts and videos. In such an application, a Comment model might belong to both the Post and Video models.</p>
           <p>To set up a polymorphic relationship in Laravel, you will need to set up two additional database tables to hold the foreign keys for the relationship. For example, you might have a commentable_id column that holds the ID of the Post or Video that the comment belongs to, and a commentable_type column that holds the class name of the parent model (e.g. App\Post or App\Video).</p>

           <p>In your Laravel models, you can then define the polymorphic relationship using the morphTo() method</p>
           <pre>
           class Comment extends Model
            {
                public function commentable()
                {
                    return $this->morphTo();
                }
            }

           </pre>
           <p>Then, in your Post or Video models, you can define the inverse of the relationship using the morphMany() method:</p>
         
          <pre>
           class Post extends Model
            {
                public function comments()
                {
                    return $this->morphMany(Comment::class, 'commentable');
                }
            }

          </pre>
          <p>You can then use these relationships in your Laravel application just like any other relationship, using methods like $post->comments()->create() or $comment->commentable()->title.</p>
        </div>

            <h3>One To One (Polymorphic) vs One To One </h3>
            <div>
                <p>A one-to-one polymorphic relationship is a one-to-one relationship between two models that is polymorphic, meaning that the two models can be of different types and share a common interface. This allows for greater flexibility and modularity in the relationship, as the models can be swapped out or extended without breaking the overall system.</p>
                <p>A one-to-one relationship, on the other hand, is a one-to-one relationship between two models where the models are not polymorphic. This means that the models are fixed and cannot be changed or extended without potentially breaking the relationship.</p>
                <p>One-to-one polymorphic relationships are often used when there is a need for flexibility and extensibility in the relationship between the models. For example, if you have a Comment model that can belong to either a Post or a Video, you might use a one-to-one polymorphic relationship to represent this association.</p>
                <p>On the other hand, one-to-one relationships are often used when the relationship between the models is more static and does not need to be extended or changed. For example, if you have a User model and a Profile model, and each user has exactly one profile, you might use a one-to-one relationship to represent this association.</p>
              
            </div>


            <h3>One To One (Polymorphic)</h3>
            <div>
                <p>A one-to-one polymorphic relation is similar to a typical one-to-one relation; however, the child model can belong to more than one type of model using a single association</p>
                <p> For example, a blog Post and a User may share a polymorphic relation to an Image model. Using a one-to-one polymorphic relation allows you to have a single table of unique images that may be associated with posts and users.</p>
                <pre>
                posts
                    id - integer
                    name - string
                
                users
                    id - integer
                    name - string
                
                images
                    id - integer
                    url - string
                    imageable_id - integer
                    imageable_type - string
                </pre>
                <p>Note the <code>imageable_id</code> and <code>imageable_type</code> columns on the images table. The <code>imageable_id</code> column will contain the ID value of the <code>post or user</code>, while the <code>imageable_type</code> column will contain the <code>class name of the parent model</code>. The <code>imageable_type</code> column is <code>used by Eloquent</code> to determine which "type" of parent model to return when accessing the <code>imageable relation</code> . In this case, the column would contain either <code>App\Models\Post</code> or <code>App\Models\User.</code></p>
                
            </div>


            <h3>Model Structure One To One</h3>
            <div>
                <pre>               
                class Image extends Model
                {                   
                    public function imageable()
                    {
                        return $this->morphTo();
                    }
                }
                
                class Post extends Model
                {
                    public function image()
                    {
                        return $this->morphOne(Image::class, 'imageable');
                    }
                }
                
                class User extends Model
                {
                    public function image()
                    {
                        return $this->morphOne(Image::class, 'imageable');
                    }
                }
                </pre>
            </div>

            <h3>Retrieving Relationship One To One</h3>
            <div></div>

            <h3></h3>
            <div></div>

            <h3></h3>
            <div></div>

            <h3></h3>
            <div></div>

            <h3></h3>
            <div></div>

            <h3></h3>
            <div></div>
            

           </div>
    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
