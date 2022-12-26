<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
   
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> 
           <div class="col-8">
           <h1 class="text-danger">HTTP Overview</h1>


           <h3>Introduction</h3>
        <div>
            <p>HTTP is a protocol for fetching resources such as HTML documents. It is the foundation of any data exchange on the Web and it is a client-server protocol, which means requests are initiated by the recipient, usually the Web browser. A complete document is reconstructed from the different sub-documents fetched, for instance, text, layout description, images, videos, scripts, and more.</p>
            <img src="./img/fetching_a_page.png" class="img-fluid" alt="">

           <hr><hr>
        </div>


            <h3>Request & Response</h3>
            <div>
            Clients and servers communicate by exchanging individual messages (as opposed to a stream of data). The messages sent by the client, usually a Web browser, are called <code>requests</code> and the messages sent by the server as an answer are called <code>responses</code>.
            <hr>
            <hr>
            </div>
          
            <h3>Components of HTTP-based systems</h3>
            <div>
                <p>HTTP is a client-server protocol: requests are sent by one entity, the user-agent (or a proxy on behalf of it). Most of the time the user-agent is a Web browser, but it can be anything, for example, a robot that crawls the Web to populate and maintain a search engine index.</p>
                <p>Each individual request is sent to a server, which handles it and provides an answer called the response. Between the client and the server there are numerous entities, collectively called proxies, which perform different operations and act as gateways or caches, for example.</p>

                <img src="./img/client-server-chain.png" class="img-fluid" alt="">

                <p>In reality, there are more computers between a browser and the server handling the request: there are routers, modems, and more. Thanks to the layered design of the Web, these are hidden in the network and transport layers. HTTP is on top, at the application layer. Although important for diagnosing network problems, the underlying layers are mostly irrelevant to the description of HTTP.</p>
                <pre>
Clients: These are the devices or software that send HTTP requests to servers. Examples of 
clients include web browsers, mobile apps, and command-line tools such as curl.

Servers: These are the devices or software that receive HTTP requests from clients and send 
back HTTP responses. Examples of servers include web servers, application servers, and APIs 
(Application Programming Interfaces).

URLs (Uniform Resource Locators): These are the addresses that identify the resources being
 requested by clients. URLs typically consist of a domain name (such as example.com), 
 a path (such as /page), and optionally a query string (such as ?key=value).

HTTP messages: These are the request and response messages that are exchanged between clients
 and servers. The request message includes the method (such as GET or POST), the URL, 
 and any headers or data. The response message includes the status code, headers, and data.

HTTP headers: These are the key-value pairs that are included in HTTP messages and provide
 additional information about the request or response. Examples of headers include 
 Content-Type,  which specifies the type of data being sent or received, and Authorization,
 which is used to  authenticate the client.

HTTP methods: These are the actions that can be taken on a resource, such as retrieving it 
(GET), creating it (POST), updating it (PUT), or deleting it (DELETE).

HTTP status codes: These are the codes that are included in the response message and indicate 
he result of the request. Common status codes include 200 (OK), 404 (Not Found), 
and 500 (Internal Server Error).

Cookies: These are small pieces of data that are stored by the client and sent back to the 
server with each request. Cookies can be used to maintain state or track user information 
across multiple requests.

Session IDs: These are unique identifiers that are assigned to a user when they first make a 
request to a server. The session ID is then included in subsequent requests, allowing the 
server to identify the user and maintain state or track user information.
                </pre>
            <hr>
            <hr>
            </div>


            <h3>Client: the user-agent</h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>
            

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>

            <h3></h3>
            <div>
                
            <hr>
            <hr>
            </div>
        
        
        
        
        
        
        
        </div> 
    
    </div>
</div>




<?php include_once '../inc/footer.php'; ?>