<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div><!-- cold-4 end -->

           <div class="col-8">
           <h2 class="text-info">Class and Style Bindings</h2>


           
            <div>
               <h3>Intro</h3>
               <p>Since class and style are both attributes, we can use v-bind to assign them a string value dynamically, much like with other attributes</p>
           </div>
           <hr>
           <hr>


            <div>
               <h3>Binding HTML Classes</h3>
               <pre>
&lt;div :class="{ active: isActive }">&lt;/div>


const isActive = ref(true)
const hasError = ref(false)
&lt;div
  class="static"
  :class="{ active: isActive, 'text-danger': hasError }"
>&lt;/div>
It will render: &lt;div class="static active">&lt;/div>


const classObject = reactive({
  active: true,
  'text-danger': false
})
&lt;div :class="classObject">&lt;/div>



const isActive = ref(true)
const error = ref(null)

const classObject = computed(() => ({
  active: isActive.value && !error.value,
  'text-danger': error.value && error.value.type === 'fatal'
}))
&lt;div :class="classObject">&lt;/div>


const activeClass = ref('active')
const errorClass = ref('text-danger')
&lt;div :class="[activeClass, errorClass]">&lt;/div>
Which will render: &lt;div class="active text-danger">&lt;/div>


               </pre>
               <h5>With Components</h5>
               <!-- <pre> -->
<!-- child component template -->
<!-- &lt;p class="foo bar">Hi!&lt;/p>

&lt;!-- when using the component -->
&lt;MyComponent class="baz boo" />

The rendered HTML will be: &lt;p class="foo bar baz boo">Hi!&lt;/p>

 -->
 <h1>Later</h1>
               </pre>
           </div>
           <hr>
           <hr>


            <div>
               <h3>Binding Inline Styles</h3>
               <pre>

    &lt;div :style="{ color: activeColor, fontSize: fontSize + 'px' }">&lt;/div>
    &lt;div :style="{ 'font-size': fontSize + 'px' }">&lt;/div>
    camelCase keys are recommended


    const styleObject = reactive({
      color: 'red',
      fontSize: '13px'
    })
    &lt;div :style="styleObject">&lt;/div>
               </pre>
               <h5>Binding to Arrays</h5>
               <pre>
                   &lt;div :style="[baseStyles, overridingStyles]">&lt;/div>
               </pre>

               <h5>Auto-prefixing</h5>
               <p>When you use a CSS property that requires a vendor prefix in :style, Vue will automatically add the appropriate prefix. Vue does this by checking at runtime to see which style properties are supported in the current browser. If the browser doesn't support a particular property then various prefixed variants will be tested to try to find one that is supported.</p>
           </div>
           <hr>
           <hr>

           



           </div><!-- cold-8 end -->
    </div><!-- row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>
