<?php include_once 'inc/header.php' ?>
<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Client-side web APIs</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#Client-side-web-APIs" role="tab" aria-controls="v-pills-home" aria-selected="true">Client-side web APIs</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#web-APIs" role="tab" aria-controls="v-pills-profile" aria-selected="false">web APIs</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="Client-side-web-APIs" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p>Application Programming Interfaces (APIs).</p>
                <p>
                    APIs are programming features for manipulating different aspects of the browser and operating system the site is running on, or manipulating data from other web sites or services.
                </p>

                <h3 class="text-info">Guides</h3>

                <h4 class="text-success">Introduction to web APIs</h4>

                <h4 class="text-success">Manipulating documents</h4>
                <p>
                    When writing web pages and apps, one of the most common things you'll want to do is manipulate web documents in some way. This is usually done by using the Document Object Model (DOM), a set of APIs for controlling HTML and styling information that makes heavy use of the Document object.
                </p>

                <h4 class="text-success">Fetching data from the server</h4>
                <p>
                    Another very common task in modern websites and applications is retrieving individual data items from the server to update sections of a webpage without having to load an entirely new page.
                </p>
                <p>
                    This seemingly small detail has had a huge impact on the performance and behavior of sites.
                </p>
                <p>
                    technologies that make it possible XMLHttpRequest and the Fetch API.
                </p>
                <h4 class="text-success">Third party APIs</h4>
                <p>
                    The APIs we've covered so far are built into the browser, but not all APIs are. Many large websites and services such as Google Maps, Twitter, Facebook, PayPal, etc. provide APIs allowing developers to make use of their data (e.g. displaying your twitter stream on your blog) or services (e.g. displaying custom Google Maps on your site, or using Facebook login to log in your users).
                </p>
                <h4 class="text-success"> Drawing graphics</h4>
                <p>
                    The browser contains some very powerful graphics programming tools, from the Scalable Vector Graphics (SVG) language, to APIs for drawing on HTML &lt;canvas&gt; elements, (see The Canvas API and WebGL).
                </p>

                <h4 class="text-success">Video and audio APIs</h4>
                <p>HTML5 comes with elements for embedding rich media in documents — &lt;video&gt; and &lt;audio&gt; — which in turn come with their own APIs for controlling playback, seeking, etc.</p>

                <h4 class="text-success">Client-side storage</h4>
                <p>Modern web browsers feature a number of different technologies that allow you to store data related to web sites and retrieve it when necessary allowing you to persist data long term, save sites offline, and more.</p>
            </div>

            <div class="tab-pane fade" id="web-APIs" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h3 class="text-info">What are APIs?</h3>
                <p>Application Programming Interfaces (APIs) are constructs made available in programming languages to allow developers to create complex functionality more easily. They abstract more complex code away from you, providing some easier syntax to use in its place.</p>

                <div class="row">
                    <div class="col-md-8">
                        <p>If you want to use an appliance in your house, you simply plug it into a plug socket and it works. You don't try to wire it directly into the power supply — to do so would be really inefficient and, if you are not an electrician, difficult and dangerous to attempt.</p>
                        <p>
                            In the same way, if you want to say, program some 3D graphics, it is a lot easier to do it using an API written in a higher-level language such as JavaScript or Python, rather than try to directly write low level code (say C or C++) that directly controls the computer's GPU or other graphics functions.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/plug-socket.png" class="img-fluid" alt="">
                    </div>
                </div>
                <hr>
                <h3 class="text-info">APIs in client-side JavaScript</h3>
                <div class="row">

                    <p class="ml-3">Client-side JavaScript, in particular, has many APIs available to it — these are not part of the JavaScript language itself, rather they are built on top of the core JavaScript language, providing you with extra superpowers to use in your JavaScript code. They generally fall into two categories:</p>
                    <div class="col-md-7">
                        <ul>
                            <li><b>Browser APIs</b> are built into your web browser and are able to expose data from the browser and surrounding computer environment and do useful complex things with it.taking an audio track, altering its volume, applying effects to it, etc. </li>
                            <li><b>Third-party APIs</b> are not built into the browser by default, and you generally have to retrieve their code and information from somewhere on the Web. For example, the Twitter API allows you to do things like displaying your latest tweets on your website. It provides a special set of constructs you can use to query the Twitter service and return specific information.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="img/browser.png" class="img-fluid" alt="">
                    </div>
                </div>

                <h3 class="text-info">Common browser APIs</h3>

                <h4>APIs for manipulating documents</h4>
                <p>loaded into the browser. which allows you to manipulate HTML and CSS — creating, removing and changing HTML, dynamically applying new styles to your page, etc.</p>
                <a class="btn btn-sm btn-warning" target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Manipulating_documents">Details mdn</a>

                <h4>APIs that fetch data from the server</h4>
                <p> to update small sections of a webpage on their own are very commonly used.</p>
                <p> APIs that make this possible include XMLHttpRequest and the Fetch API</p>
                <a class="btn btn-sm btn-warning" target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Fetching_data">Details mdn</a>

                <h4>APIs for drawing and manipulating graphics</h4>
                <a class="btn btn-sm btn-warning" target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Introduction">Details mdn</a>
                <h4>Audio and Video APIs</h4>
                <a class="btn btn-sm btn-warning" target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Introduction">Details mdn</a>
                <h4>Device APIs</h4>
                <a class="btn btn-sm btn-warning" target="_blank" href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Introduction">Details mdn</a>
                <h4>Client-side storage APIs</h4>
                <p>are becoming a lot more widespread in web browsers — the ability to store data on the client-side is very useful if you want to create an app that will save its state between page loads, and perhaps even work when the device is offline. There are a number of options available, e.g. simple name/value storage with the Web Storage API, and more complex tabular data storage with the IndexedDB API.</p>

                <h3>Common third-party APIs</h3>
                <ul>
                    <li>The Twitter API, which allows you to do things like displaying your latest tweets on your website.</li>
                    <li>Map APIs like Mapquest,Google Maps</li>
                    <li>The Facebook suite of APIs , providing app login using Facebook login, accepting in-app payments, rolling out targetted ad campaigns, etc.</li>
                    <li>The Telegram APIs, embed content from Telegram channels on your website</li>
                    <li>The YouTube API, which allows you to embed YouTube videos on your site, search YouTube, build playlists, and more.</li>
                    <li>The Pinterest API provides tools to manage Pinterest boards and pins to include them in your website.</li>
                    <li>The Twilio API, which provides a framework for building voice and video call functionality into your app, sending SMS/MMS from your apps, and more.</li>
                    <li>The Mastodon API enables you to manipulate features of the Mastodon social network programmatically. </li>
                </ul>

                <hr>
                <h3 class="text-info">How do APIs work?</h3>


            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
    </div>
</div>



<?php include_once 'inc/footer.php' ?>
