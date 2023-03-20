<?php include_once 'inc/header.php' ?>
<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Dom Mozila</h2>


<hr>

<h3 class="text-success pb-2">What is the DOM?</h3>

<p>The Document Object Model (DOM) is a programming interface for HTML and XML documents. It represents the page so that programs can change the document structure, style, and content.</p>

<p>The DOM represents the document as nodes and objects. That way, programming languages can connect to the page.</p>

<p>
    A Web page is a document. This document can be either displayed in the browser window or as the HTML source. But it is the same document in both cases.
</p>
<p>
    The Document Object Model (DOM) represents that same document so it can be manipulated. The DOM is an object-oriented representation of the web page, which can be modified with a scripting language such as JavaScript.
</p>


<br><br>

<p>All of the properties, methods, and events available for manipulating and creating web pages are organized into objects (for example, the document object that represents the document itself, the table object that implements the special HTMLTableElement DOM interface for accessing HTML tables, and so forth). This documentation provides an object-by-object reference to the DOM.</p>

<p>The DOM is not a programming language, but without it, the JavaScript language wouldn't have any model or notion of web pages, HTML documents, XML documents, and their component parts (e.g. elements).</p>
<p>Every element in a document—the document as a whole, the head, tables within the document, table headers, text within the table cells—is part of the document object model for that document, so they can all be accessed and manipulated using the DOM and a scripting language like JavaScript.</p>

<p class="text-warning bg-dark p-2">In the beginning, JavaScript and the DOM were tightly intertwined, but eventually, they evolved into separate entities. </p>

<p>The page content is stored in the DOM and may be accessed and manipulated via JavaScript, so that we may write this approximative equation:</p>

<p class="text-warning bg-dark p-2">API = DOM + JavaScript</p>


<br><br>

<p>The DOM was designed to be independent of any particular programming language, making the structural representation of the document available from a single, consistent API. Though we focus exclusively on JavaScript in this reference documentation, implementations of the DOM can be built for any language, as this Python example demonstrates:</p>

<hr>

<h3 class="text-success pb-2">Accessing the DOM</h3>
<p>When you create a script–whether it's inline in a &lt;script&gt; element or included in the web page by means of a script loading instruction–you can immediately begin using the API for the document or window elements to manipulate the document itself or to get at the children of that document, which are the various elements in the web page. Your DOM programming may be something as simple as the following, which displays an alert message by using the alert() function from the window object, or it may use more sophisticated DOM methods to actually create new content, </p>

<pre class="bg-dark text-white py-3">

     // create a couple of elements in an otherwise empty HTML page
     const heading = document.createElement("h1");
     const heading_text = document.createTextNode("Big Head!");
     heading.appendChild(heading_text);
     document.body.appendChild(heading);
     
      &lt;div class="parent"&gt;
        &lt;div class="child">&lt;/div&gt;
        &lt;!-- --&gt;
        &lt;div class="child">&lt;/div&gt;
        &lt;div class="child">&lt;/div&gt;
        &lt;div class="child">&lt;/div&gt;
        &lt;div class="child">&lt;/div&gt;
    &lt;/div&gt;
    &lt;script&gt;
        var parent = document.querySelector('.parent')
        console.log(parent.childNodes) // returns all child nodes list
        console.log(parent.children) // returns child element nodes list

    &lt;/script&gt;
</pre>

<p class="bg-warning p-2">Note: Because the vast majority of code that uses the DOM revolves around manipulating HTML documents, it's common to refer to the nodes in the DOM as elements, although strictly speaking not every node is an element.</p>



<h4>Some defination</h4>

<nav class="pt-3">

    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active bg-primary text-white" id="nav-home-tab" data-toggle="tab" href="#Document" role="tab" aria-controls="nav-home" aria-selected="true">Document</a>
        <a class="nav-item nav-link bg-success text-white" id="nav-profile-tab" data-toggle="tab" href="#node" role="tab" aria-controls="nav-profile" aria-selected="false">Node</a>
        <a class="nav-item nav-link bg-danger text-white" id="nav-contact-tab" data-toggle="tab" href="#element" role="tab" aria-controls="nav-contact" aria-selected="false">Element</a>
        <a class="nav-item nav-link bg-warning text-white" id="nav-contact-tab" data-toggle="tab" href="#NodeList" role="tab" aria-controls="nav-contact" aria-selected="false">NodeList</a>
        <a class="nav-item nav-link bg-info text-white" id="nav-contact-tab" data-toggle="tab" href="#Attribute" role="tab" aria-controls="nav-contact" aria-selected="false">Attribute</a>
        <a class="nav-item nav-link bg-dark text-white" id="nav-contact-tab" data-toggle="tab" href="#NamedNodeMap" role="tab" aria-controls="nav-contact" aria-selected="false">NamedNodeMap</a>

    </div>

</nav>



<div class="tab-content p-2 mb-5" id="nav-tabContent">

    <div class="tab-pane fade show active" id="Document" role="tabpanel" aria-labelledby="nav-home-tab">
        <p>When a member returns an object of type document this object is the root document object itself.</p>
        <p>
            The Document interface represents any web page loaded in the browser and serves as an entry point into the web page's content, which is the DOM tree. The DOM tree includes elements such as &lt;body&gt; and &lt;table&gt;, among many others.
        </p>

        <p>The Document interface describes the common properties and methods for any kind of document. Depending on the document's type (e.g. HTML, XML, SVG, …), a larger API is available: HTML documents, served with the "text/html" content type, also implement the HTMLDocument interface, whereas XML and SVG documents implement the XMLDocument interface.</p>

        <div class="row">
            <div class="col">
                <p>Properties</p>
                <ul>
                    <li>Document.anchors</li>
                    <li>Document.body</li>
                    <li>Document.documentElement</li>
                    <li>.....</li>
                </ul>
            </div>

            <div class="col">
                <p>Event</p>
                <ul>
                    <li>Animation events</li>
                    <li>Clipboard events</li>
                    <li>Drag & drop events</li>
                    <li>.....</li>
                </ul>
            </div>

            <div class="col">
                <p>Methods</p>
                <ul>
                    <li>Document.createAttribute()</li>
                    <li>Document.createComment()</li>
                    <li>Document.createElement()</li>
                    <li>.....</li>
                </ul>
            </div>
        </div>
        <a class="btn btn-sm btn-warning" href="https://developer.mozilla.org/en-US/docs/Web/API/Document" target="_blank">Details mdn</a>
    </div>

    <div class="tab-pane fade" id="node" role="tabpanel" aria-labelledby="nav-profile-tab">
        <p>Every object located within a document is a node of some kind. In an HTML document, an object can be an element node but also a text node or attribute node.</p>
        <p>Node is an interface from which various types of DOM API objects inherit</p>
        <p>All of the following interfaces inherit the Node interface's methods and properties: Document, Element, Attr, CharacterData (which Text, Comment, and CDATASection inherit), ProcessingInstruction, DocumentFragment, DocumentType, Notation, Entity, EntityReference</p>
        <div class="row">
            <div class="col">Properties</div>
            <div class="col">Methods</div>
        </div>
        <a href="https://developer.mozilla.org/en-US/docs/Web/API/Node" class="btn btn-sm btn-warning" target="_blank">Details mdn</a>
    </div>

    <div class="tab-pane fade" id="element" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>The element type is based on node. It refers to an element or a node of type element returned by a member of the DOM API.
        </p>
        <p>Element is the most general base class from which all element objects (i.e. objects that represent elements) in a Document inherit. It only has methods and properties common to all kinds of elements.</p>
        <p> Rather than saying, for example, that the document.createElement() method returns an object reference to a node, we just say that this method returns the element that has just been created in the DOM.</p>
        <span>Properties</span>
        <span>Methods</span>
        <a href="https://developer.mozilla.org/en-US/docs/Web/API/Element" class="btn btn-sm btn-warning">Details mdn</a>

    </div>

    <div class="tab-pane fade" id="NodeList" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>A nodeList is an array of elements, like the kind that is returned by the method
        </p>
        <p>
            NodeList objects are collections of nodes, usually returned by properties such as Node.childNodes and methods such as document.querySelectorAll().
        </p>
        <p>
            Although NodeList is not an Array, it is possible to iterate over it with forEach(). It can also be converted to a real Array using Array.from().
        </p>
        <p>
            However, some older browsers have not implemented NodeList.forEach() nor Array.from()

            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach" target="_blank">Details</a>
        </p>

        <p>
            In some cases, the NodeList is live, which means that changes in the DOM automatically update the collection.
        </p>
        <p>
            In other cases, the NodeList is static, where any changes in the DOM does not affect the content of the collection. The ubiquitous document.querySelectorAll() method returns a static NodeList.
        </p>
        <span>Properties</span>
        <span>Methods</span>
        <a href="https://developer.mozilla.org/en-US/docs/Web/API/NodeList" class="btn btn-sm btn-warning">Details mdn</a>

    </div>

    <div class="tab-pane fade" id="Attribute" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>
            When an attribute is returned by a member (e.g., by the createAttribute() method), it is an object reference that exposes a special (albeit small) interface for attributes. Attributes are nodes in the DOM just like elements are, though you may rarely use them as such.
        </p>


    </div>

    <div class="tab-pane fade" id="NamedNodeMap" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>
            A namedNodeMap is like an array, but the items are accessed by name or index, though this latter case is merely a convenience for enumeration, as they are in no particular order in the list. A namedNodeMap has an item() method for this purpose, and you can also add and remove items from a namedNodeMap.
        </p>

        <a href="https://developer.mozilla.org/en-US/docs/Web/API/NamedNodeMap" class="btn btn-warning btn-sm">Details mdn</a>


    </div>


</div>


<hr>
<h3 class="text-success pb-2">DOM interfaces</h3>

<a href="https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model/Introduction" class="btn btn-lg btn-warning">Later</a>







<?php include_once 'inc/footer.php' ?>
