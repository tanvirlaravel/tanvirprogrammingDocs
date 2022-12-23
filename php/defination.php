<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'js.nav.php'; ?>

      
    <div class="row">
           <div class="col-3">
            <a href="#h" class="p-2 display-4 d-inline-block bg-dark text-warning">H</a>
            <a title="Scope" href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">S</a>
            <a href="#v" class="p-2 display-4 d-inline-block bg-dark text-warning">V</a>
           </div> 
           <div class="col-9">
           <! 
            ================
            Hoisting 
            ================ 
            -->
            <section class="Hoisting">
            <h1 id="h">H</h1> <a href="#variable">Hoisting</a>
            <hr><hr>
            <h3 id="Hoisting">Hoisting</h3>

             <h2>Anonymous function</h2>
                <p> a closure in PHP is a function that can be created without a specified name - an anonymous function</p>
                <hr>

                <h2>Closures</h2>
                <p>Closures are PHP’s version of anonymous functions. A closure is a function that you can pass around as an object, assign to a variable, pass as a parameter to other functions and methods, or even serialize.</p>
                <p>a closure in PHP is a function that can be created without a specified name - an anonymous function</p>
                <hr>

                <h2>Collection</h2>
                <p>A collection is a laravel class that uses arrays internally and adds many features to them. You can create a collection simply by using collect method like this</p>
                <hr>

                <h2>Dependency Injection</h2>
                <p>Dependency injection is a procedure where one object supplies the dependencies of another object.</p>
                <p>The dependencies can be changed at run time as well as compile time</p>

            <ul>
                <li><b>Modular:</b> The Dependency Injection helps create completely self-sufficient classes or modules</li>
                <li><b>Testable:</b>It helps write testable code easily eg unit tests for example</li>
                <li><b>Maintainable:</b> Since each class becomes modular, it becomes easier to manage it</li>
            </ul>
            <hr>


            <h2>Declarative programming</h2>
            <pre class="px-3">

            Here's an example.

            In CSS (used to style HTML pages), if you want an image element to be 100 pixels high and 100 
            pixels wide, you simply "declare" that that's what you want as follows:

            #myImageId {
            height: 100px;
            width: 100px;
            }

            You can consider CSS a declarative "style sheet" language.

            The browser engine that reads and interprets this CSS is free to make the image appear
            this tall and this wide however it wants. Different browser engines (e.g., the engine 
            for IE, the engine for Chrome) will implement this task differently.

            Their unique implementations are, of course, NOT written in a declarative language but in
            a procedural one like Assembly, C, C++, Java, JavaScript, or Python. That code is a bunch
            of steps to be carried out step by step (and might include function calls). It might do
            things like interpolate pixel values, and render on the screen.
            </pre>
            <hr>

            <h2>Driver (Software)</h2>
            <p>A software driver is <code>a type of software program</code> that controls a hardware device. On any computer, smartphone, tablet, different hardware components that are part of the computer and attached devices need to communicate with each other for a computer to function and work.</p>

            <p>suppose an application needs to read some data from a device. The application calls a function implemented by the operating system, and the operating system calls a function implemented by the driver. The driver, which was written by the same company that designed and manufactured the device, knows how to communicate with the device hardware to get the data. After the driver gets the data from the device, it returns the data to the operating system, which returns it to the application.</p>
            <img src="/img/definations/whatisadriver01.png">

            <h5>Software drivers</h5>
            <p>suppose you need to write a tool that has access to core operating system data structures, which can be accessed only by code running in kernel mode. You can do that by splitting the tool into two components. The first component runs in user mode and presents the user interface. The second component runs in kernel mode and has access to the core operating system data. The component that runs in user mode is called an application, and the component that runs in kernel mode is called a software driver. A software driver is not associated with a hardware device.</p>
            <img src="{{  asset('img/definations/whatisadriver03.png') }}">
           
            <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Components of HTTP-based systems</h4>
                <p>HTTP is a client-server protocol: requests are sent by one entity, the user-agent (or a proxy on behalf of it). Most of the time the user-agent is a Web browser, but it can be anything, for example a robot that crawls the Web to populate and maintain a search engine index.</p>
                <p>Each individual request is sent to a server, which handles it and provides an answer, called the response. Between the client and the server there are numerous entities, collectively called proxies, which perform different operations and act as gateways or caches, for example.</p>

                <img src="img/Client-server-chain.png" class="img-fluid">
                <p>In reality, there are more computers between a browser and the server handling the request: there are routers, modems, and more. Thanks to the layered design of the Web, these are hidden in the network and transport layers. HTTP is on top, at the application layer. Although important to diagnose network problems, the underlying layers are mostly irrelevant to the description of HTTP.</p>

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">HTTP responses</h4>
       <p>An HTTP response is made by a server to a client. The aim of the response is to provide the client with the resource it requested, or inform the client that the action it requested has been carried out; or else to inform the client that an error occurred in processing its request.</p>
       <p>An HTTP response contains:</p>
       <ol>
           <li>A status line.</li>
           <li>A series of HTTP headers, or header fields.</li>
           <li>A message body, which is usually needed.</li>
       </ol>
       <h3>Status line</h3>
       <p>The status line is the first line in the response message. It consists of three items:</p>
       <ol>
           <li>The HTTP version number, showing the HTTP specification to which the server has tried to make the message comply.</li>
           <li>A status code, which is a three-digit number indicating the result of the request.</li>
           <li>A reason phrase, also known as status text, which is human-readable text that summarizes the meaning of the status code.</li>
       </ol>
       <p>An example of a response line is:</p>
       <p class="bg-dark text-white p-1">
       HTTP/1.1 200 OK
       </p>
       <p>In this example:</p>
       <ul>
           <li>the HTTP version is HTTP/1.1</li>
           <li>the status code is 200</li>
           <li>the reason phrase is OK</li>
       </ul>
       <p><a href="https://www.ibm.com/docs/en/cics-ts/5.3?topic=concepts-status-codes-reason-phrases#dfhtl_httpstatus">Status codes and reason phrases</a> explains more about these elements of the status line.</p>

       <h3>HTTP headers</h3>
       <p>The HTTP headers for a server's response contain information that a client can use to find out more about the response, and about the server that sent it. This information can assist the client with displaying the response to a user, with storing (or caching) the response for future use, and with making further requests to the server now or in the future. For example, the following series of headers tell the client when the response was sent, that it was sent by CICS®, and that it is a JPEG image:</p>
       <p class="bg-dark text-white p-1">
       Date: Thu, 09 Dec 2004 12:07:48 GMT<br>
Server: IBM_CICS_Transaction_Server/3.1.0(zOS)<br>
Content-type: image/jpg
       </p>
       <p>In the case of an unsuccessful request, headers can be used to tell the client what it must do to complete its request successfully.</p>

       <h3>Message body</h3>

       <p>The message body of a response may be referred to for convenience as a response body.</p>

<p>Message bodies are used for most responses. The exceptions are where a server is responding to a client request that used the HEAD method (which asks for the headers but not the body of the response), and where a server is using certain status codes.</p>

<p>For a response to a successful request, the message body contains either the resource requested by the client, or some information about the status of the action requested by the client. For a response to an unsuccessful request, the message body might provide further information about the reasons for the error, or about some action the client needs to take to complete the request successfully.</p>
               
<h2>HTML forms</h2>
            
                <p>In HTML, forms are areas delimited by a &#60;form> tag, containing text input boxes, buttons, check boxes, and other features of a graphical user interface. Forms are used by web applications to allow users to provide data to be sent to the server.</p>
               
               <p>In a form, the elements with which users can interact to provide data are known as form fields. Each form field is given a name in the HTML, which identifies it to the server application, but is not visible to the user.</p>
               
               <p>Although the various elements of a form appear different to the user, they all transmit information to the server application as a series of name and value pairs, separated by & characters. Each name is the name of a form field, and the value is the data produced by the user's actions. For example, here is a form with two text input boxes for a user to enter first and last name:</p>
               <p class="text-white bg-dark p-1">
                firstname=Maria&lastname=Smith
                </p>
                
                <p>The form data is transmitted to the server in one of two ways, depending on which method (GET or POST) is specified in the &#60;form> tag:</p>
                <ol>
                   <li>When the method is GET, the form data is transmitted in a query string in the URL.</li>
                   <li>When the method is POST, the form data is transmitted in the message body.</li>
                                </ol>
                
                <p>
                The character set that is required for encoding the form data is specified by the CHARACTERSET option, and must match the forms encoding determined by the corresponding HTML form.</p>
               <hr>

               <h2>Dependency Injection</h2>
                <p>Dependency injection is a procedure where one object supplies the dependencies of another object.</p>
                <p>The dependencies can be changed at run time as well as compile time</p>

            <ul>
                <li><b>Modular:</b> The Dependency Injection helps create completely self-sufficient classes or modules</li>
                <li><b>Testable:</b>It helps write testable code easily eg unit tests for example</li>
                <li><b>Maintainable:</b> Since each class becomes modular, it becomes easier to manage it</li>
            </ul>
            <hr>


            <h2>Declarative programming</h2>
            <pre class="px-3">

            Here's an example.

            In CSS (used to style HTML pages), if you want an image element to be 100 pixels high and 100 
            pixels wide, you simply "declare" that that's what you want as follows:

            #myImageId {
            height: 100px;
            width: 100px;
            }

            You can consider CSS a declarative "style sheet" language.

            The browser engine that reads and interprets this CSS is free to make the image appear
            this tall and this wide however it wants. Different browser engines (e.g., the engine 
            for IE, the engine for Chrome) will implement this task differently.

            Their unique implementations are, of course, NOT written in a declarative language but in
            a procedural one like Assembly, C, C++, Java, JavaScript, or Python. That code is a bunch
            of steps to be carried out step by step (and might include function calls). It might do
            things like interpolate pixel values, and render on the screen.
            </pre>
               
            <h2>HTTP METHODS</h2>
               
               <p>Every HTTP request has a “verb,” or action, along with it. Laravel allows you to define your routes based on which verb was used; the most common are GET and POST, followed by PUT, DELETE, and PATCH. Each method communicates a different thing to the server, and to your code, about the intentions of the caller.</p>
               <hr>

               <h2>HTTP verbs</h2>                
               <p> HTTP defines a set of request methods to indicate the desired action to be performed for a given resource</p>
               <h4>GET</h4>
               <p>The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.</p>
               
               <h4>HEAD</h4>
               <p></p>The HEAD method asks for a response identical to that of a GET request, but without the response body.</p>
               
               <h4>POST</h4>
               <p>The POST method is used to submit an entity to the specified resource, often causing a change in state or side effects on the server.</p>
               
               <h4>PUT</h4>
               <p>The PUT method replaces all current representations of the target resource with the request payload.</p>
               <h4>PATCH</h4>
               <p></p>The PATCH method is used to apply partial modifications to a resource.</p>
               
               <h4>DELETE</h4>
               <p> The DELETE method deletes the specified resource.</p>
               
               <h4>Connect</h4>
               <p>The CONNECT method establishes a tunnel to the server identified by the target resource.</p>
               
               <h4>Options</h4>
               <p> The OPTIONS method is used to describe the communication options for the target resource.</p>
               
               <h4>Trace</h4>
               <p>The TRACE method performs a message loop-back test along the path to the target resource.</p>
              <hr>

              <h2>HTTP requests</h2>
               <p> An HTTP request is made by a client, to a named host, which is located on a server. The aim of the request is to access a resource on the server.</p>

               <p>To make the request, the client uses components of a URL (Uniform Resource Locator), which includes the information needed to access the resource. The components of a URL explains URLs.</p>

               <p>A correctly composed HTTP request contains the following elements:</p>
               <ul>
                   <li>A request line.</li>
                   <li>A series of HTTP headers, or header fields.</li>
                   <li>A message body, if needed.</li>
               </ul>
               <hr>

               <h2>HTTP headers</h2>
               <p>HTTP headers are written on a message to provide the recipient with information about the message, the sender, and the way in which the sender wants to communicate with the recipient. Each HTTP header is made up of a name and a value. The HTTP protocol specifications define the standard set of HTTP headers, and describe how to use them correctly. HTTP messages can also include extension headers, which are not part of the HTTP/1.1 or HTTP/1.0 specifications.</p>
               <p>The HTTP headers for a client's request contain information that a server can use to decide how to respond to the request. For example, the following series of headers can be used to specify that the user only wants to read the requested document in French or German, and that the document should only be sent if it has changed since the date and time when the client last obtained it:</p>
               <p class="bg-dark text-white p-1">Accept-Language: fr, de<br>
               If-Modified-Since: Fri, 10 Dec 2004 11:22:13 GMT</p>
               <p>An empty line (that is, a CRLF alone) is placed in the request message after the series of HTTP headers, to divide the headers from the message body.</p>

               <hr>

               <h2>HTTP Messages</h2>
               <p>There are two types of HTTP messages, requests and responses, each with its own format.</p>

               <h4 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">Requests</h4>

               <h4 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">HTTP Messages</h4>
               <img src="img/HTTP_Request.png" alt="">
               <p>Requests consists of the following elements:</p>
               <ul>
                   <li>An HTTP method, usually a verb like GET, POST or a noun like OPTIONS or HEAD that defines the operation the client wants to perform. Typically, a client wants to fetch a resource (using GET) or post the value of an HTML form (using POST), though more operations may be needed in other cases.</li>
                   <li>The path of the resource to fetch; the URL of the resource stripped from elements that are obvious from the context, for example without the protocol (http://), the domain (here, developer.mozilla.org), or the TCP port (here, 80).</li>
                   <li>The version of the HTTP protocol.</li>
                   <li>Optional headers that convey additional information for the servers.</li>
                   <li>Or a body, for some methods like POST, similar to those in responses, which contain the resource sent.</li>
               </ul>

               <h4 class="mt-6 mb-4 py-1 pl-5 pr-2 bg-success d-inline-block">Responses</h4>
               <img src="img/HTTP_Response.png" alt="">
               <p>Responses consist of the following elements:</p>
               <ul>
                   <li>Responses consist of the following elements:</li>
                   <li>A status code, indicating if the request was successful, or not, and why.</li>
                   <li>A status message, a non-authoritative short description of the status code.</li>
                   <li>HTTP headers, like those for requests.</li>
                   <li>Optionally, a body containing the fetched resource.</li>
               </ul> 
               <hr>

               <h2>HTTP flow</h2>

               <p>When a client wants to communicate with a server, either the final server or an intermediate proxy, it performs the following steps:</p>
               <ol>
                   <li>Open a TCP connection: The TCP connection is used to send a request, or several, and receive an answer. The client may open a new connection, reuse an existing connection, or open several TCP connections to the servers.</li>
                   <li>Send an HTTP message: HTTP messages (before HTTP/2) are human-readable. With HTTP/2, these simple messages are encapsulated in frames, making them impossible to read directly, but the principle remains the same. For example:
                       <pre class="p-3 text-white-50 bg-dark">
               GET / HTTP/1.1
               Host: developer.mozilla.org
               Accept-Language: fr
               </pre>
                   </li>
                   <li>Read the response sent by the server, such as:
                       <pre class="p-3 text-white-50 bg-dark">
               HTTP/1.1 200 OK
               Date: Sat, 09 Oct 2010 14:28:02 GMT
               Server: Apache
               Last-Modified: Tue, 01 Dec 2009 20:18:22 GMT
               ETag: "51142bc1-7449-479b075b2891b"
               Accept-Ranges: bytes
               Content-Length: 29769
               Content-Type: text/html
               
               &lt;!DOCTYPE html... (here comes the 29769 bytes of the requested web page)
               </pre>
                   </li>
                   <li>Close or reuse the connection for further requests.</li>
               </ol>
               <p>If HTTP pipelining is activated, several requests can be sent without waiting for the first response to be fully received. HTTP pipelining has proven difficult to implement in existing networks, where old pieces of software coexist with modern versions. HTTP pipelining has been superseded in HTTP/2 with more robust multiplexing requests within a frame.</p>  

               <h2>interface</h2>

                <ul>
                    <li>a point where two systems, subjects, organizations, etc. meet and interact.</li>
                    <li>interact with (another system, person, etc.). </li>
                    <li>
                        <h6>COMPUTING</h6>
                        <p>a device or program enabling a user to communicate with a computer. "a graphical user interface"</p>
                        <p>a device or program for connecting two items of hardware or software so that they can be operated jointly or communicate with each other. "an application program interface"</p>
                        <p>connect with (another computer or piece of equipment) by an interface.</p>
                    </li>
                </ul>
                <hr>
               
                <h2>Memory</h2>
                <p>A memory is just like a human brain. It is used to store data and instructions. Computer memory is the storage space in the computer, where data is to be processed and instructions required for processing are stored. The memory is divided into large number of small parts called cells. Each location or cell has a unique address, which varies from zero to memory size minus one. For example, if the computer has 64k words, then this memory unit has 64 * 1024 = 65536 memory locations. The address of these locations varies from 0 to 65535.</p>

                <p>In computing, memory refers to a device that is used to store information for immediate use in a computer or related computer hardware device.[1] It typically refers to semiconductor memory, specifically metal–oxide–semiconductor (MOS) memory,[2][3] where data is stored within MOS memory cells on a silicon integrated circuit chip.</p>
                <p>Most semiconductor memory is organized into memory cells or bistable flip-flops, each storing one bit (0 or 1).</p>

                <p>Memory is primarily of three types −</p>
                <ul>
                    <li>Cache Memory</li>
                    <li>Primary Memory/Main Memory</li>
                    <li>Secondary Memory</li>
                </ul>
                <hr>

                
                <h2>Message body</h2>
                <p>The body content of any HTTP message can be referred to as a message body or entity body. Technically, the entity body is the actual content of the message. The message body contains the entity body, which can be in its original state, or can be encoded in some way for transport, such as by being broken into chunks (chunked transfer-coding). The message body of a request may be referred to for convenience as a request body.</p>
                <p>Message bodies are appropriate for some request methods and inappropriate for others. For example, a request with the POST method, which sends input data to the server, has a message body containing the data. A request with the GET method, which asks the server to send a resource, does not have a message body.</p>
                <hr>
                <h2>Proxies</h2>
                <p>Between the Web browser and the server, numerous computers and machines relay the HTTP messages</p>
                <p>most of these operate at the transport, network or physical levels, Those operating at the application layers are generally called proxies</p>
                <p>Proxies may perform numerous functions:</p>
                <ul>
                    <li>caching (the cache can be public or private, like the browser cache)</li>
                    <li>filtering (like an antivirus scan or parental controls)</li>
                    <li>load balancing (to allow multiple servers to serve the different requests)</li>
                    <li>authentication (to control access to different resources)</li>
                    <li>logging (allowing the storage of historical information)</li>

                </ul> 
            <hr>
            <h2>Run vs Compile times</h2>
                <ul>
                    <li>PHP makes two passes (by default) anytime it runs a file.</li>
                    <li>Pass #1 parses the file and builds what is called operational(or machine) code. This is the raw binary format your computer will actually run and it is not human readable. In other languages (like C++, etc) this is called compiling. You can cache this step using various systems like Opcache, which saves you the overhead of compiling this every <time class=""></time></li>
                    <li>Syntax errors come from this portion of the execution.</li>
                    <li>Pass #2 executes the operational code from Pass #1. This is what is commonly called "run time", because your computer is actually executing the instructions.</li>
                    <li>Run-time errors (like exhausting memory, abnormal termination, etc) come from this level. These are considerably less common than syntax errors, however.</li>
                </ul>
                <hr>

                <h2>Request line</h2>
                <ol>
                    <li>A method. The method is a one-word command that tells the server what it should do with the resource. For example, the server could be asked to send the resource to the client.</li>
                    <li>The path component of the URL for the request. The path identifies the resource on the server.</li>
                    <li>The HTTP version number, showing the HTTP specification to which the client has tried to make the message comply.</li>
                </ol>

                <p class="bg-dark text-white p-1">GET /software/htp/cics/index.html HTTP/1.1</p>
                <p>In this example:</p>
                <ul>
                    <li>the method is GET</li>
                    <li>the path is /software/htp/cics/index.html</li>
                    <li>the HTTP version is HTTP/1.1</li>
                </ul>

                <p>A request line might contain some additional items:</p>
                <ul>
                    <li>A query string. This provides a string of information that the resource can use for some purpose. It follows the path, and is preceded by a question mark.</li>
                    <li>The scheme and host components of the URL, in addition to the path. When the resource location is specified in this way, it is known as the absolute URI form. For HTTP/1.1, this form is used when a request will go through a proxy server. Also for HTTP/1.1, if the host component of the URL is not included in the request line, it must be included in the message in a Host header.
                </li>
                </ul>
                <hr>

                <h2>service providers</h2>
                <p>Service providers in laravel application is the central place where application is bootstrapped. That is, laravel’s core services and our application’s services, classes and their dependencies are injected in service container through providers. </p>

                <p>When your app runs, it requires additional code, often packaged as "services" (See the "app/Services" folder) to get things done.</p>
                <p>

                    "Service Providers" are Laravel's way of packaging and managing the code needed to load these additional "services" (or running other code) at app bootup.</p>
                <p>

                    They are run in 2 phases - "register", and "boot"; each one defined by a same-named method on the provider.</p>
                <p>

                    The list of service providers for your app is listed in config/app.php, and this is how you specify which ones will run, and in what order (you don't need to run all of the service providers in the services folder, you can just keep them there, doing nothing).</p>

                <p>

                    When Laravel boots, it looks at the list, loads the right Providers, which in turn have their register() and boot() methods called at the right time.</p>
                <p>

                    Then the rest of the app boots, and subsequent tasks which need access to any "services" loaded by the "service providers", have them.</p>

                <p>Basically, features are wrapped up in ‘services’ that can be added or removed from the application, by adding or removing the corresponding service provider class. So things like routing, mail, etc. are services, and their functionality added to the Laravel framework via their service providers.</p>
                <p>If you open the config/app.php file included with Laravel, you will see a providers array. These are all of the service provider classes that will be loaded for your application</p>

                <h2>User agent</h2>
                <p>The user-agent is any tool that acts on the behalf of the user. This role is primarily performed by the Web browser</p>
                <p>The browser is always the entity initiating the request. It is never the server (though some mechanisms have been added over the years to simulate server-initiated messages). </p>
                <p>To present a Web page, the browser sends an original request to fetch the HTML document that represents the page. It then parses this file, making additional requests corresponding to execution scripts, layout information (CSS) to display, and sub-resources contained within the page (usually images and videos). The Web browser then mixes these resources to present to the user a complete document, the Web page. Scripts executed by the browser can fetch more resources in later phases and the browser updates the Web page accordingly.</p>
                <p>A Web page is a hypertext document. This means some parts of displayed text are links which can be activated (usually by a click of the mouse) to fetch a new Web page.</p>
                <hr>
                <h2>Web server</h2>
                <p>On the opposite side of the communication channel, is the server, which serves the document as requested by the client</p>
                <p>A server is not necessarily a single machine, but several server software instances can be hosted on the same machine. With HTTP/1.1 and the Host header, they may even share the same IP address.</p>   
                
            <hr>

            
            <a href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">Top</a>
            </section>
            
           <! 
           ================
                Scope 
            ================ 
            -->
            <section class="scope">
            <h1 id="s">S</h1> <a href="#scope">Scope</a>
            <hr><hr>
            <h3 id="scope">Scope</h3>
           
            <p>Scope determines the accessibility (visibility) of variables.</p>
            <p>The scope is the current context of execution in which values and expressions are "visible" or can be referenced. If a variable or expression is not in the current scope, it will not be available for use. Scopes can also be layered in a hierarchy, so that child scopes have access to parent scopes, but not vice versa.</p>
            <p>Scope refers to the availability of variables and functions in certain parts of the code.</p>

            <p>JavaScript types of scope:</p>

            <ul>   
                <li>Global scope: The default scope for all code running in script mode.</li>
                <li>Module scope: The scope for code running in module mode.</li>
                <li>Function scope: The scope created with a function.</li>
                <span>...In addition, variables declared with let or const can belong to an additional scope:</span>
                <li> Block scope: The scope created with a pair of curly braces (a block). </li>
            </ul>

            <p>In JavaScript, objects and functions are also variables.</p>
            <p>Scope determines the accessibility of variables, objects, and functions from different parts of the code.</p>

            <h5>Global Scope</h5>
            <p>Variables declared Globally (outside any function) have Global Scope.</p>
            <p>Global variables can be accessed from anywhere in a JavaScript program.</p>
            <p>Variables declared with var, let and const are quite similar when declared outside a block.</p>

            <h5>Function or Local scope</h5>
            <p>A variable can also have a local scope, i.e it can only be accessed within a function.</p>
            <p>A function creates a scope, so that (for example) a variable defined exclusively within the function cannot be accessed from outside the function or within other functions.</p>

            <h5>Block Scope</h5>
            Blocks only scope let and const declarations, but not var declarations.
            <pre class="text-white bg-dark p3">
            {
                var x = 1;
            }
            console.log(x); // 1
            {
                const x = 1;
            }
            console.log(x); // ReferenceError: x is not defined
            </pre>

            <h5>Module scope</h5>
            <p>Later</p>

            <p>Points to Remember</p>
            <ol>
                <li>JavaScript has global scope and local scope.</li>
                <li>Variables declared and initialized outside any function become global variables.</li>
                <li>Variables declared and initialized inside function becomes local variables to that function.</li>
                <li>Variables declared without var keyword inside any function becomes global variables automatically.</li>
                <li>Global variables can be accessed and modified anywhere in the program.</li>
                <li>Local variables cannot be accessed outside the function declaration.</li>
                <li>Global variable and local variable can have same name without affecting each other.</li>
                <li>JavaScript does not allow block level scope inside { } brackets.</li>
                
            </ol>

            <a href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">Top</a>
            </section>

            <! 
            ================
                Variable 
            ================ 
            -->
            <section class="variable">
            <h1 id="v">V</h1> <a href="#variable">Variable</a>
            <hr><hr>
            <h3 id="variable">Variable</h3>
            <p>A variable is a container for a value, like a number we might use in a sum, or a string that we might use as part of a sentence.</p>


            
            <a href="#s" class="p-2 display-4 d-inline-block bg-dark text-warning">Top</a>
            </section>
           




           </div>     
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>