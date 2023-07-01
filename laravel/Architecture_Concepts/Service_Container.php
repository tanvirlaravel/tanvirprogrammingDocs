<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
           <h1 class="text-danger">Service Container</h1>

           <h3>php class dependencies</h3>
           <div>
             <p>In object-oriented programming, a class dependency refers to a relationship between two classes where one class depends on another class. This can happen in a few different ways:</p>
             <ul>

                <li>A class may use another class as a type hint in its constructor, method, or property. For example:
                  <pre>
                    class A {
                        public function __construct(B $b) {
                            // Class A depends on class B
                        }
                    }
                  </pre>
                </li>
                <li>A class may use another class as a property type hint. For example:
                  <pre>
                    class A {
                        public B $b;

                        // Class A depends on class B
                    }
                  </pre>
                </li>

             </ul>
             <p>In these examples, class A depends on class B because it requires an instance of class B in order to function correctly. This means that class A has a dependency on class B.</p>
             <p>Managing class dependencies is important because it helps to decouple your code and make it more maintainable. For example, if class A has a direct dependency on class B, then changing class B could potentially break class A. By using techniques such as dependency injection, you can make your code more flexible and easier to change.</p>

           </div>
            <hr>
            <hr>


           <h3>dependency injection</h3>
           <div>
           <p>Dependency injection is a technique for managing class dependencies in which an object's dependencies are injected into the object, rather than being hardcoded into the object's code. This makes the object more flexible and easier to change, because you can use different implementations of the dependencies without changing the object's code.</p>
           <pre>
             class A {
                  protected $b;

                  public function __construct(B $b) {
                      $this->b = $b;
                  }
              }

              $b = new B;
              $a = new A($b);
           </pre>
           <p>In this example, the A class has a dependency on the B class. Instead of hardcoding the dependency into the A class, we use dependency injection to pass an instance of B into the A class when it is constructed.</p>
           <p>This means that we can use different implementations of the B class without changing the A class. For example, we could create a MockB class for testing and use that instead of the B class:</p>
           <pre>
             $b = new MockB;
            $a = new A($b);
           </pre>
           <p>Dependency injection is a powerful tool for managing class dependencies and making your code more flexible and maintainable.</p>
            </div>
           <hr>
           <hr>

           <h3>application service</h3>
           <p>An application service is a <code>class</code> that provides a specific service to the rest of the application. It is typically designed <code>to perform a single, well-defined task or a set of related tasks</code>.</p>
           <p>Here are some tips for programming an application service:</p>
           <ul>
             <li>Keep it simple: An application service should be focused on a single responsibility. Don't try to do too much in a single service.</li>
             <li>Use dependency injection: Dependency injection can make your application services more flexible and easier to test. Use constructor injection to inject any dependencies that the service needs to function.</li>
             <li>Use interfaces: Interfaces can help to decouple your application services from their concrete implementations. This makes it easier to change the implementation of a service without affecting the rest of the application.</li>
             <li>Test your service: It's important to test your application services to ensure that they are working correctly. You can use PHPUnit or another testing framework to write unit tests for your services.</li>
             <li>Document your service: Documenting your application service can help other developers understand how to use it. You can use PHPDoc blocks to document the service's methods and their input and output.</li>

           </ul>

           <hr>
           <hr>


           <h3>laravel application service</h3>
           <p>In Laravel, an application service is a <code>class</code> that provides a specific service to the rest of the application. This could be anything from sending emails to interacting with an external API.</p>
           <p>Application services are typically registered with the Laravel service container, which allows them to be resolved and injected into other parts of the application as needed. This makes it easy to use and manage the services throughout the application.</p>
           <pre>
             namespace App\Services;

              use App\Models\User;
              use App\Mail\WelcomeEmail;
              use Illuminate\Support\Facades\Mail;

              class UserService
              {
                  public function create(array $data)
                  {
                      $user = User::create($data);

                      Mail::to($user->email)->send(new WelcomeEmail($user));

                      return $user;
                  }
              }
           </pre>
           <p>In this example, the UserService class provides a create method that creates a new user and sends a welcome email to the user's email address. This service could be used anywhere in the application where a new user needs to be created.</p>
           <hr>
           <hr>

           <h3>class is resolved</h3>
           <p>In the context of the Laravel service container, "resolving" a class means creating an instance of the class and injecting its dependencies.</p>
           <pre>
             class A {
                  public function __construct(B $b) {
                      // Class A depends on class B
                  }
              }

              $a = app(A::class);
              </pre>
           <p>In this example, the app function is used to resolve the A class. The service container will create an instance of the A class and pass an instance of the B class as an argument to the constructor. This creates an instance of the A class with all of its dependencies injected.</p>
           <pre>
             $a = resolve(A::class);
           </pre>
           <p>Resolving a class is a useful way to manage class dependencies and make your code more flexible and maintainable.</p>
           <hr>
           <hr>


           <h3 class="text-success">Introduction</h3>
          <div>
          <p>The Laravel service container is a powerful tool for managing class dependencies and performing dependency injection. It's a central place where all of the services your application uses are registered and managed.</p>

          <p>Here are a few key things you can do with the Laravel service container:</p>

          <ul>
              <li>Register a class as a service: You can register a class as a service by binding it to a key in the service container. You can then use the service container to resolve the class whenever it is needed.</li>
              <li>Perform dependency injection: You can use the service container to inject dependencies into your classes. This means that you don't have to hardcode the dependencies of a class, but can instead specify them in the service container and have them automatically injected when the class is resolved.</li>
              <li>Use automatic resolution: The service container can automatically resolve the dependencies of a class and instantiate it for you. This means you don't have to worry about manually instantiating dependencies or passing them to the class.</li>

          </ul>

           <hr>
           <hr>
          </div>

        <h3>Binding</h3>
        <div>
          <p>In the Laravel service container, a binding is a way to register a class or interface with the container and specify how the container should resolve it.</p>
          <pre>
            app()->bind(LoggerInterface::class, FileLogger::class);

            // Now you can use the service container to resolve an instance of the FileLogger class
            $logger = app(LoggerInterface::class);
          </pre>
          <p>In this example, we are binding the LoggerInterface interface to the FileLogger class. This means that whenever the service container is asked to resolve the LoggerInterface interface, it will return an instance of the FileLogger class.</p>

          <p>You can also use the singleton method to create a singleton binding, which will always return the same instance of the class:</p>
          <pre>
            app()->singleton(LoggerInterface::class, FileLogger::class);

            // Both of these calls will return the same instance of the FileLogger class
            $logger1 = app(LoggerInterface::class);
            $logger2 = app(LoggerInterface::class);

          </pre>
          <p>Bindings are a useful way to manage class dependencies and make your code more flexible and maintainable.</p>
        <hr>
        <hr>
        </div>


        <h3>Resolving</h3>
        <div>
          <p>In the Laravel service container, resolving a class means creating an instance of the class and injecting its dependencies.</p>
          <pre>
            class A {
                public function __construct(B $b) {
                    // Class A depends on class B
                }
            }

            $a = app(A::class);

          </pre>
          <p>In this example, the app function is used to resolve the A class. The service container will create an instance of the A class and pass an instance of the B class as an argument to the constructor. This creates an instance of the A class with all of its dependencies injected.</p>
          <p>You can also use the resolve function to resolve a class:</p>
          <pre>
            $a = resolve(A::class);
</pre>
          <p>Resolving a class is a useful way to manage class dependencies and make your code more flexible and maintainable.</p>
        <hr>
        <hr>
        </div>

        <h3>Method Invocation & Injection</h3>
        <div>
        <hr>
        <hr>
        </div>

        <h3>PSR-11</h3>
        <div>
        <hr>
        <hr>
        </div>




           </div>

    </div>
</div>



<?php include_once '../../inc/footer.php'; ?>
