<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>
    <h2>Eloquent: Getting Started</h2>

    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
            <span class="text-danger">activity</span>
           </div>
           <div class="col-8">
           <h3>Introduction</h3>
           <p><a href="http://tanvirprogrammingdocs.test/database/orm.php" target="_blank">ORM</a></p>
           <p>When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table.</p>
           <hr>
           <hr>

           <h3>Inspecting Models</h3>
            <p>a convenient overview of all the model's attributes and relations:</p>
           <pre class="bg-dark text-white p-2">
           php artisan model:show Flight
           </pre>
           <hr>
           <hr>

           <h3>Eloquent Model Conventions</h3>
           <h5>Table Names</h5>
           <p>By convention, the "snake case", plural name of the class will be used as the table name unless another name is explicitly specified</p>
           <p><span class="text-danger">AirTrafficController</span> model would store records in an <span class="text-danger">air_traffic_controllers</span> table</p>
           <pre class="bg-dark p-2 text-white">
           class Flight extends Model
            {
              protected $table = 'my_flights';
            }
           </pre>

           <h5>Primary Keys</h5>
           <p>primary key column named id</p>
           <pre class="bg-dark p-2 text-white">
           class Flight extends Model
            {
                protected $primaryKey = 'flight_id';
            }
           </pre>

           <h5>Timestamps</h5>
           <p>By default, Eloquent expects created_at and updated_at columns to exist on your model's corresponding database table. </p>
           <pre class="bg-dark p-2 text-white">
           class Flight extends Model
            {
                public $timestamps = false;
            }
           </pre>

           <h5>Database Connections</h5>
           <p>By default, all Eloquent models will use the default database connection that is configured for your application.</p>
           <pre class="bg-dark p-2 text-white">
           class Flight extends Model
            {
                protected $connection = 'sqlite';
            }
           </pre>

           <h5>Default Attribute Values</h5>
           <pre class="bg-dark p-2 text-white">
           class Flight extends Model
            {
                protected $attributes = [
                    'delayed' => false,
                ];
            }
           </pre>

           <h5>Configuring Eloquent Strictness</h5>
           <a href="https://laravel.com/docs/9.x/eloquent#configuring-eloquent-strictness" target="_blank">Docs</a>
           <hr>
           <hr>

           <h3>Retrieving Models</h3>
           <p> each Eloquent model as a powerful query builder allowing you to fluently query the database table associated with the model. .</p>
           <pre class="bg-dark p-2 text-white">
           use App\Models\Flight;

           // retrieve all of the records
           Flight::all()

           // Building Queries
           $flights = Flight::where('active', 1)
               ->orderBy('name')
               ->take(10)
               ->get();

            // Refreshing Models
            $flight = Flight::where('number', 'FR 900')->first();
            $flight->fresh();
            $flight->refresh();
           </pre>
           <hr>
           <hr>

           <h3>Collections</h3>
           <p> Eloquent methods like all and get retrieve multiple records from the database. However, these methods don't return a plain PHP array. Instead, an instance of <span class="text-danger">Illuminate\Database\Eloquent\Collection</span> is returned. which provides a variety of helpful <span class="text-danger">methods</span> for interacting with data collections.</p>
           <hr>
           <hr>

           <h3>Chunking Results</h3>
           <p><a href="https://laravel.com/docs/9.x/eloquent#chunking-results">Docs</a></p>
           <hr>
           <hr>











           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
