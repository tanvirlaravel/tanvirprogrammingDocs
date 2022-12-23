<?php include_once '../../inc/header.php' ?>
<?php include_once '../../inc/nav.php' ?>

<h2 class="my-4 text-success text-center">First Step</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">A high-level definition</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">So what can it really do?</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">What is JavaScript doing on your page?</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Browser security</a>

            <a class="nav-link" data-toggle="pill" href="#Interpretedversuscompiledcode">Interpreted versus compiled code</a>

            <a class="nav-link" data-toggle="pill" href="#Server-side-client-side"> Server-side versus client-side code</a>

            <a class="nav-link" data-toggle="pill" href="#Scriptloadingstrategies">Script loading strategies</a>

        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p>displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved.</p>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <p>Running code in response to certain events occurring on a web page.</p>
                <p>APIs are ready-made sets of code building blocks that allow a developer to implement programs that would otherwise be hard or impossible to implement. They do the same thing for programming that ready-made furniture kits do for home building — it is much easier to take ready-cut panels and screw them together to make a bookshelf than it is to work out the design yourself, go and find the correct wood, cut all the panels to the right size and shape, find the correct-sized screws, and then put them together to make a bookshelf.</p>
                <p>Browser APIs are built into your web browser, and are able to expose data from the surrounding computer environment, or do useful complex things.</p>
                <ul>
                    <li>The DOM (Document Object Model) API allows you to manipulate HTML and CSS, creating, removing and changing HTML, dynamically applying new styles to your page, etc</li>
                    <li>The Geolocation API retrieves geographical information. This is how Google Maps is able to find your location and plot it on a map.</li>
                    <li>The Canvas and WebGL APIs allow you to create animated 2D and 3D graphics.</li>
                    <li>Audio and Video APIs like HTMLMediaElement and WebRTC allow you to do really interesting things with multimedia, such as play audio and video right in a web page, or grab video from your web camera and display it on someone else's computer </li>
                </ul>

                <p>Third party APIs are not built into the browser by default, and you generally have to grab their code and information from somewhere on the Web. </p>
                <ul>
                    <li>The Twitter API allows you to do things like displaying your latest tweets on your website.</li>
                    <li>The Google Maps API and OpenStreetMap API allows you to embed custom maps into your website, and other such functionality.</li>
                </ul>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <h3 class="text-info">What is JavaScript doing on your page?</h3>
                <div class="row">
                    <div class="col-md-7">
                        <p>When you load a web page in your browser, you are running your code (the HTML, CSS, and JavaScript) inside an execution environment (the browser tab). This is like a factory that takes in raw materials (the code) and outputs a product (the web page).</p>
                        <p>A very common use of JavaScript is to dynamically modify HTML and CSS to update a user interface, via the Document Object Model API </p>
                        <p>Note that the code in your web documents is generally loaded and executed in the order it appears on the page. If the JavaScript loads and tries to run before the HTML and CSS it is affecting has been loaded, errors can occur.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="img/execution.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h3 class="text-info"> Browser security</h3>
                <p>Each browser tab is its own separate bucket for running code in (these buckets are called "execution environments" in technical terms) — this means that in most cases the code in each tab is run completely separately, and the code in one tab cannot directly affect the code in another tab — or on another website. This is a good security measure — if this were not the case, then pirates could start writing code to steal information from other websites, and other such bad things.</p>
                <p class="p-2 bg-warning">Note: There are ways to send code and data between different websites/tabs in a safe manner</p>
            </div>

            <div class="tab-pane fade" id="Interpretedversuscompiledcode" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h3 class="text-info">Interpreted versus compiled</h3>
                <ul>
                    <li>In interpreted languages, the code is run from top to bottom and the result of running the code is immediately returned. You don't have to transform the code into a different form before the browser runs it. </li>
                    <li>
                        Compiled languages on the other hand are transformed (compiled) into another form before they are run by the computer. For example, C/C++ are compiled into assembly language that is then run by the computer. The program is executed from a binary format, which was generated from the original program source code.
                    </li>
                </ul>
                <p>JavaScript is a lightweight interpreted programming language. The web browser receives the JavaScript code in its original text form and runs the script from that. From a technical standpoint, most modern JavaScript interpreters actually use a technique called just-in-time compiling to improve performance; the JavaScript source code gets compiled into a faster, binary format while the script is being used, so that it can be run as quickly as possible. However, JavaScript is still considered an interpreteted language, since the compilation is handled at run time, rather than ahead of time.</p>
            </div>

            <div class="tab-pane fade" id="Server-side-client-side" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h3 class="text-info">Server-side versus client-side code</h3>
                <ul>
                    <li>Client-side code is code that is run on the user's computer — when a web page is viewed, the page's client-side code is downloaded, then run and displayed by the browser. In this module we are explicitly talking about client-side JavaScript.</li>
                    <li>Server-side code on the other hand is run on the server, then its results are downloaded and displayed in the browser. </li>
                </ul>
            </div>

            <div class="tab-pane fade" id="Scriptloadingstrategies" role="tabpanel" aria-labelledby="v-pills-settings-tab">s
                <h3 class="text-info">Script loading strategies</h3>
                <a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/What_is_JavaScript" class="btn btn-lg btn-outline-warning">Later</a>
            </div>
        </div>
    </div>
</div>




<?php include_once '../../inc/footer.php' ?>
