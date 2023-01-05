<?php include_once '../inc/header.php'; ?>
<div class="container">

    <?php include_once 'nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div>
           <div class="col-8">
             <h1>Components</h1>


           <h3>Introduction</h3>
            <div>
              <p>Components and slots provide similar benefits to sections, layouts, and includes.</p>
              <hr>
              <hr>
            </div>


           <h3>Make Components</h3>
           <div>
             <pre>
               php artisan make:component Alert
             </pre>
             <p>
               When writing components for your own application, components are automatically discovered within the <code>app/View/Components</code> directory and <code>resources/views/components</code> directory, so no further component registration is typically required.
             </p>
             <h5> create an anonymous component (a component with only a Blade template and no class)</h5>
             <pre>
                php artisan make:component Alert --view
             </pre>
             <hr>
             <hr>
           </div>


           <h3>Rendering Components</h3>
           <pre>
            &lt;x-alert/>

            &lt;x-user-profile/>
           </pre>
           <p>app/View/Components/Inputs/Button.php</p>
           <pre>
           &lt;x-inputs.button/>
          </pre>
          <hr>
           <hr>

           <h3>Passing Data To Components</h3>
           <p>You may pass data to Blade components using HTML attributes. Hard-coded, primitive values may be passed to the component using simple HTML attribute strings. PHP expressions and variables should be passed to the component via attributes that use the : character as a prefix:</p>
           <pre>
           &lt;x-alert type="error" :message="$message"/>
           </pre>
           <p>All public properties on a component will automatically be made available to the component's view.</p>
           <pre>

           class Alert extends Component
          {
              public $type;
              public $message;

              public function __construct($type, $message)
              {
                  $this->type = $type;
                  $this->message = $message;
              }

           </pre>

           <p>When your component is rendered, you may display the contents of your component's public variables by echoing the variables by name:</p>
           <pre>
             &lt;div class="alert alert-{{ $type }}">
                {{ $message }}
             &lt;/div>
           </pre>
           <h5>Casing</h5>
           <p>Component constructor arguments should be specified using camelCase, while kebab-case should be used when referencing the argument names in your HTML attributes.</p>
           <pre>
             public function __construct($alertType)
              {
                  $this->alertType = $alertType;
              }

              &lt;x-alert alert-type="danger" />
           </pre>

           <h5>Short Attribute Syntax</h5>
           <pre>
              {{-- Short attribute syntax... --}}
                &lt;x-profile :$userId :$name />

              {{-- Is equivalent to... --}}
                &lt;x-profile :user-id="$userId" :name="$name" />

           </pre>

           <h5>Escaping Attribute Rendering</h5>
           <pre>
               &lt;x-button ::class="{ danger: isDeleting }">
                 Submit
               &lt;/x-button>

             The following HTML will be rendered by Blade:
               &lt;button :class="{ danger: isDeleting }">
                Submit
              &lt;/button>
           </pre>

           <h5>Component Methods</h5>
           <pre>
             public function isSelected($option)
              {
                 return $option === $this->selected;
              }

              &lt;option {{ $isSelected($value) ? 'selected' : '' }} value="{{ $value }}">
                 {{ $label }}
              &lt;/option>
           </pre>

           <h5>Accessing Attributes & Slots Within Component Classes</h5>
           <h1>Later</h1>

           <h5>Additional Dependencies</h5>
           <h1>Later</h1>

           <h5>Hiding Attributes / Methods</h5>
           <pre>
             class Alert extends Component
             {
                 public $type;

                 /** * The properties / methods that should not be exposed to the component template.    */
                 protected $except = ['type'];
             }
           </pre>

           <hr>
           <hr>

           <h3>Component Attributes</h3>
           <p>Sometimes you may need to specify additional HTML attributes, such as class, that are not part of the data required for a component to function. </p>

           <pre>
           &lt;x-alert type="error" :message="$message" class="mt-4"/>
          </pre>
           <p>All of the attributes that are not part of the component's constructor will automatically be added to the component's "attribute bag". This attribute bag is automatically made available to the component via the $attributes variable. All of the attributes may be rendered within the component by echoing this variable:</p>
           <pre>
              &lt;div {{ $attributes }}>
               <!-- Component content -->
              &lt;/div>
            </pre>
            <h5>Default / Merged Attributes</h5>
            <pre>
              &lt;x-alert type="error" :message="$message" class="mb-4"/>


              &lt;div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
                  {{ $message }}
              &lt;/div>

              // output
              &lt;div class="alert alert-error mb-4">
                  &lt;!-- Contents of the $message variable -->
              &lt;/div>
            </pre>

            <h5>Conditionally Merge Classes</h5>
            <h1>Later</h1>

            <h5>Non-Class Attribute Merging</h5>
            <p>unlike the class attribute, these attributes will not be merged with injected attribute values. Instead, they will be overwritten</p>
            <pre>
              &lt;x-button type="submit">
                  Submit
              &lt;/x-button>

              &lt;button {{ $attributes->merge(['type' => 'button']) }}>
                  {{ $slot }}
              &lt;/button>

              // output
              &lt;button type="submit">
                  Submit
              &lt;/button>
            </pre>

            <p>If you would like an attribute other than class to have its default value and injected values joined together, you may use the prepends method.</p>
            <pre>
&lt;div {{ $attributes->merge(['data-controller' => $attributes->prepends('profile-controller')]) }}>
  {{ $slot }}
&lt;/div>
            </pre>

            <h5>Retrieving & Filtering Attributes</h5>
            <p>See Documentaion</p>
            <hr>
            <hr>

            <h3>Reserved Keywords</h3>
            <p><a href="" target="_blank">https://laravel.com/docs/9.x/blade#reserved-keywords</a></p>
            <hr>
            <hr>

            <h3>Slots</h3>


            <p>You may define the content of the named slot using the x-slot tag. Any content not within an explicit x-slot tag will be passed to the component in the $slot variable:</p>
            <pre>
              &lt;x-alert>
                  &lt;x-slot:title>
                      Server Error
                  &lt;/x-slot>

                  &lt;strong>Whoops!&lt;/strong> Something went wrong!
              &lt;/x-alert>
            </pre>

            <h5>Scoped Slots</h5>
            <p>we will assume that the x-alert component has a public formatAlert method defined on its component class:</p>
            <pre>

              &lt;x-alert>
                  &lt;x-slot:title>
                      {{ $component->formatAlert('Server Error') }}
                  &lt;/x-slot>

                  &lt;strong>Whoops!&lt;/strong> Something went wrong!
              &lt;/x-alert>
            </pre>

            <h5>Slot Attributes</h5>
            <pre>
              &lt;x-card class="shadow-sm">
                  &lt;x-slot:heading class="font-bold">
                      Heading
                  &lt;/x-slot>

                  Content

                  &lt;x-slot:footer class="text-sm">
                      Footer
                  &lt;/x-slot>
              &lt;/x-card>

              @props([
                  'heading',
                  'footer',
              ])

              &lt;div {{ $attributes->class(['border']) }}>
                  &lt;h1 {{ $heading->attributes->class(['text-lg']) }}>
                      {{ $heading }}
                  &lt;/h1>

                  {{ $slot }}

                  &lt;footer {{ $footer->attributes->class(['text-gray-700']) }}>
                      {{ $footer }}
                  &lt;/footer>
              &lt;/div>
            </pre>



           </div>

    </div>
</div>



<?php include_once '../inc/footer.php'; ?>
