<?php include_once '../../inc/header.php'; ?>
<div class="container">

    <?php include_once '../nav.php'; ?>


    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">

            </ul>
           </div><!-- cold-4 end -->

           <div class="col-8">
           <h2 class="text-info">Lifecycle Hooks</h2>
            
            <h3>vue 2</h3>

            <p> In Vue, a component's lifecycle is divided into several stages, each of which has its own lifecycle hooks that are automatically called by Vue. Here is a high-level overview of how the Vue lifecycle works:</p>
            <p>Creation: In this stage, Vue creates a new component instance and sets up its data and events. The beforeCreate and created hooks are called during this stage.</p>
            <p>Mounting: In this stage, Vue inserts the component into the DOM and renders its template. The beforeMount and mounted hooks are called during this stage.</p>
            <p>Updating: In this stage, Vue updates the component when its data changes. The beforeUpdate and updated hooks are called during this stage.</p>
            <p>Destruction: In this stage, Vue removes the component from the DOM and performs any necessary cleanup tasks. The beforeUnmount and unmounted hooks are called during this stage.</p>
            <p>Throughout the lifecycle, there are other hooks that can be called, such as errorCaptured and renderTracked. These hooks are used for error handling and debugging purposes.</p>
            <p>It's worth noting that with Vue 3, the lifecycle hooks have been simplified and streamlined with the introduction of the setup function and the new onBeforeUnmount hook. Additionally, the new composition API provides a new way of working with the component's lifecycle, making it more flexible and easier to reason about.   </p>



           <h3>vue 3</h3>


            <p>  Vue 3 introduces a new composition API, which changes how developers work with the lifecycle of a Vue component. In addition, some of the lifecycle hooks from Vue 2 have been updated or removed. Here is an overview of the Vue 3 lifecycle hooks:
</p>
            <p>setup: This is a new hook that replaces the beforeCreate and created hooks from Vue 2. It is called before the component is created and is where you can initialize data, set up watchers, and perform other setup tasks.</p>
            <p>
onBeforeMount: This hook is called right before the component is mounted to the DOM. It is useful for performing tasks that need to happen before the component is visible.
</p>
            <p>onMounted: This hook is called after the component is mounted to the DOM. It is useful for performing tasks that need to happen after the component is visible, such as fetching data or setting up event listeners.</p>
            <p>onBeforeUpdate: This hook is called right before the component is updated. It is useful for performing tasks that need to happen before the component's data changes.</p>
            <p>onUpdated: This hook is called after the component is updated. It is useful for performing tasks that need to happen after the component's data changes, such as updating the component's state.</p>
            <p>onBeforeUnmount: This hook is called right before the component is unmounted from the DOM. It is useful for performing cleanup tasks, such as removing event listeners.</p>
            <p>onUnmounted: This hook is called after the component is unmounted from the DOM. It is useful for performing final cleanup tasks, such as resetting data or removing any remaining references to the component.</p>
            <p>In addition to these hooks, Vue 3 also includes some other hooks that are related to component composition, such as onRenderTracked and onRenderTriggered. These hooks are used to track component rendering and reactivity, and are mainly used for debugging and optimization purposes.</p>








           </div><!-- cold-8 end -->
    </div><!-- row end -->
</div><!-- container end -->



<?php include_once '../../inc/footer.php'; ?>
