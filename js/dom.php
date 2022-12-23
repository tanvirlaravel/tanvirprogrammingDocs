<?php include_once 'inc/header.php' ?>
<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Dom</h2>

<h3>Document object model.</h3>
<p>
    The DOM (Document Object Model) is an API that represents and interacts with any HTML or XML document. The DOM is a document model loaded in the browser and representing the document as a node tree, where each node represents part of the document (e.g. an element, text string, or comment).
</p>
<p>
    The Document Object Model (DOM) connects web pages to scripts or programming languages by representing the structure of a document—such as the HTML representing a web page—in memory.
</p>
<p>
    The DOM is the way Javascript sees its containing pages' data. It is an object that includes how the HTML/XHTML/XML is formatted, as well as the browser state.
</p>

<p>
    It's actually Document Object Model. HTML is used to build the DOM which is an in-memory representation of the page (while closely related to HTML, they are not exactly the same thing). Things like CSS and Javascript interact with the DOM.
</p>

<p>
    As per W3C: DOM permits programs and scripts to dynamically access and update the content, structure and style of XML or HTML documents.
</p>

<p>DOM is composed of:</p>
<ul>
    <li>set of objects/elements</li>
    <li>a structure of how these objects/elements can be combined</li>
    <li>and an interface to access and modify them</li>
</ul>

<hr>
<h3>DOM Node</h3>
<p>
    In the DOM, all parts of the document, such as elements, attributes, text, etc. are organized in a hierarchical tree-like structure; consisting of parents and children. These individual parts of the document are known as nodes.
</p>
<p>
    The topmost node is the root node (Document Node) of the DOM tree, which has one child, the &lt;html&gt; element and so on. Further, the text content inside an element is a child node of the parent element, for example, "Mobile OS" is considered as a child node of the &lt;h1&gt; that contains it, and so on. Comments inside the HTML document are nodes in the DOM tree as well even though they dont effect the document in any way. HTML attributes such as id, class, title, style, etc. are also considered as nodes in DOM hierarchy.
</p>
<p>
    If you have a HTML file you see that it contain HTML elements (like P, DIV, SECTION etc.), also have comments, line-breaks, text content, html attributes. Browser reads this html file & according to the W3C HTML DOM standard, It breaks everything in the HTML document is a node.
</p>
<p>
    P, DIV, SECTION etc. are treated as element node, where comments are comment node, text are textnode & line-breaks are also under the textnode. And with the help of javascript we can access this DOM node & node tree.
</p>

<hr>
<h3>DOM element</h3>

<p>A DOM element is something like a DIV, HTML, BODY element on a page. You can add classes to all of these using CSS, or interact with them using JS.</p>

<p class="text-warning bg-dark p-2">Always remenber one thing: Every HTML elements are node but every node is not an html element</p>

<div class="parent">
    <div class="child"></div>
    <!-- -->
    <div class="child"></div>
    <div class="child"></div>
    <div class="child"></div>
    <div class="child"></div>
    <div class="child"></div>
</div>
<script>
    var parent = document.querySelector('.parent')
    console.log(parent.childNodes) // returns all child nodes list
    console.log(parent.children) // returns child element nodes list

</script>

<pre class="bg-dark text-white py-3">
     Run this code & see the result in the console:
     
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


<h3>Difference between Node object and Element object?</h3>
<ul>
    <li>
        A node is the generic name for any type of object in the DOM hierarchy. A node could be one of the built-in DOM elements such as document or document.body, it could be an HTML tag specified in the HTML such as &lt;input&gt; or &lt;p&gt; or it could be a text node that is created by the system to hold a block of text inside another element. So, in a nutshell, a node is any DOM object.
    </li>
    <li>
        An element is one specific type of node as there are many other types of nodes (text nodes, comment nodes, document nodes, etc...).
    </li>
</ul>
<p>
    So, a nodeList is simply an array-like list of nodes.
</p>

<ul>
    <li>
        The DOM consists of a hierarchy of nodes where each node can have a parent, a list of child nodes and a nextSibling and previousSibling. That structure forms a tree-like hierarchy. The document node would have its list of child nodes (the head node and the body node). The body node would have its list of child nodes (the top level elements in your HTML page) and so on.
    </li>
    <li>
        An element is a specific type of node, one that can be directly specified in the HTML with an HTML tag and can have properties like an id or a class. can have children, etc...
    </li>
</ul>
<p>
    There are other types of nodes such as comment nodes, text nodes, etc... with different characteristics. Each node has a property .nodeType which reports what type of node it is. You can see the various types of nodes here (diagram from MDN):
</p>

<hr>
<p>
    document.getElementById("test") can only return one node and it's guaranteed to be an element (a specific type of node). Because of that it just returns the element rather than a list.
</p>
<p>
    Since document.getElementsByClassName("para") can return more than one object, the designers chose to return a nodeList because that's the data type they created for a list of more than one node. Since these can only be elements (only elements typically have a class name), it's technically a nodeList that only has nodes of type element in it and the designers could have made a differently named collection that was an elementList, but they chose to use just one type of collection whether it had only elements in it or not.
</p>
<p>
    HTML5 defines an HTMLCollection which is a list of HTML Elements (not any node, only Elements). A number of properties or methods in HTML5 now return an HTMLCollection. While it is very similar in interface to a nodeList, a distinction is now made in that it only contains Elements, not any type of node.
</p>

<pre class="bg-dark text-white py-3">
    &lt;p&gt; Example &lt;!-- foo --&gt; Example &lt;span&gt;&lt;/span&gt; &lt;/p&gt;
</pre>
<p>…will create an HTML P Element Node containing a text node, a comment node, another text not and an HTML SPAN Element Node.</p>

<hr>

<h3>difference between a HTMLCollection and a NodeList</h3>
<p>A HTMLCollection contains only element nodes (tags) and a NodeList contains all nodes.</p>
<p>There are four node types:</p>
<ol>
    <li>element node</li>
    <li>attribute node</li>
    <li>text node</li>
    <li>comment node</li>
</ol>

<img src="img/nodelist_collection.png" alt="">

<p>The Node can be several types. Most important ones are as following:</p>
<ul>
    <li>element (1): An Element node such as &lt;p&gt; or &lt;div&gt;.</li>
    <li>attribute (2): An Attribute of an Element. The element attributes are no longer implementing the Node interface in DOM4 specification!</li>
    <li>text (3): The actual Text of Element or Attribute.</li>
    <li>comment (8): A comment node.</li>
    <li>document (9): A document node.</li>
</ul>

<hr>
<h3>Locating DOM elements using selectors</h3>
<p>The Selectors API provides methods that make it quick and easy to retrieve <code>Element nodes</code> from the DOM by matching against a set of selectors </p>
<h4>querySelector()</h4>
<p>Returns the first matching <code>Element node</code> within the node's subtree. If no matching node is found, null is returned.</p>
<h4>querySelectorAll()</h4>
<p>Returns a NodeList containing <code>all matching Element nodes</code> all matching Element nodes within the node's subtree, or an empty NodeList if no matches are found.</p>

<nav class="pt-3">

    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active bg-primary text-white" id="nav-home-tab" data-toggle="tab" href="#Assignment" role="tab" aria-controls="nav-home" aria-selected="true">Assignment</a>
        <a class="nav-item nav-link bg-success text-white" id="nav-profile-tab" data-toggle="tab" href="#Comparison" role="tab" aria-controls="nav-profile" aria-selected="false">Comparison</a>
        <a class="nav-item nav-link bg-danger text-white" id="nav-contact-tab" data-toggle="tab" href="#Arithmetic" role="tab" aria-controls="nav-contact" aria-selected="false">Arithmetic</a>
        <a class="nav-item nav-link bg-warning text-white" id="nav-contact-tab" data-toggle="tab" href="#Bitwise" role="tab" aria-controls="nav-contact" aria-selected="false">Bitwise</a>
        <a class="nav-item nav-link bg-info text-white" id="nav-contact-tab" data-toggle="tab" href="#Logical" role="tab" aria-controls="nav-contact" aria-selected="false">Logical</a>
        <a class="nav-item nav-link bg-dark text-white" id="nav-contact-tab" data-toggle="tab" href="#String" role="tab" aria-controls="nav-contact" aria-selected="false">String</a>
        <a class="nav-item nav-link bg-primary text-white" id="nav-contact-tab" data-toggle="tab" href="#ternary" role="tab" aria-controls="nav-contact" aria-selected="false">Conditional (ternary)</a>
        <a class="nav-item nav-link bg-dark text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-collections" role="tab" aria-controls="nav-contact" aria-selected="false">Comma</a>
        <a class="nav-item nav-link bg-warning text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-json" role="tab" aria-controls="nav-contact" aria-selected="false">Unary</a>
        <a class="nav-item nav-link bg-info text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-json" role="tab" aria-controls="nav-contact" aria-selected="false">Relational</a>
    </div>

</nav>



<div class="tab-content p-2 mb-5" id="nav-tabContent">

    <div class="tab-pane fade show active" id="Assignment" role="tabpanel" aria-labelledby="nav-home-tab">
        <code>x = y</code> |
        <code>x += y</code> |
        <code>x -= y</code> |
        <code>x *= y</code> |
        <code>x /= y</code> |
        <code>x %= y</code> |
        <code>x **= y</code> |
        <code>x <<= y</code> |
                <code>x >>= y</code> |
                <code>x >>>= y</code> |
                <code>x &= y</code> |
                <code>x ^= y</code> |
                <code>x |= y</code>

                <a class="btn btn-sm btn-warning" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Expressions_and_Operators#Assignment" target="_blank">Details mdn</a>
    </div>

    <div class="tab-pane fade" id="Comparison" role="tabpanel" aria-labelledby="nav-profile-tab">
        <p>A comparison operator compares its operands and returns a logical value based on whether the comparison is true</p>
        <p> In most cases, if the two operands are not of the same type, JavaScript attempts to convert them to an appropriate type for the comparison.</p>
        <p>the === and !== operators, which perform strict equality and inequality comparisons.</p>
    </div>

    <div class="tab-pane fade" id="Arithmetic" role="tabpanel" aria-labelledby="nav-contact-tab">
        <pre>
      +,   -,    ++,   --,  *,   /,   %
    </pre>

    </div>

    <div class="tab-pane fade" id="Bitwise" role="tabpanel" aria-labelledby="nav-contact-tab">
        <code>a & b</code> | <code>a | b</code> | <code>a ^ b</code> | <code>~ a</code> |
        <code>a << b</code> | <code>a >> b</code> | <code>a >>> b</code>
    </div>

    <div class="tab-pane fade" id="Logical" role="tabpanel" aria-labelledby="nav-contact-tab">
        <pre>&&,   OR,   (!)</pre>
    </div>


    <div class="tab-pane fade" id="String" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>concatenation operator (+) concatenates two string values together</p>
        <pre>var mystring = 'alpha';
mystring += 'bet'; // evaluates to "alphabet" and assigns this value to mystring.</pre>
    </div>


    <div class="tab-pane fade" id="ternary" role="tabpanel" aria-labelledby="nav-contact-tab">
        <pre>var status = (age >= 18) ? 'adult' : 'minor';</pre>
    </div>


    <div class="tab-pane fade" id="nav-collections" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>Acood</p>
    </div>


    <div class="tab-pane fade" id="nav-json" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>data-interchange format</p>
        <p>
            Much like XML, JSON has the ability to store hierarchical data unlike the more traditional CSV format. Many tools provide translation between these formats such as this online JSON to CSV Converter or this alternative JSON to CSV Converter.
        </p>
        <a href="https://json-csv.com/" class="btn btn-sm btn-warning" target="_blank">JSON to CSV</a>

        <a href="https://jsontoexcel.com/" class="btn btn-sm btn-danger" target="_blank">JSON to CSV Converter</a>

        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON" class="btn btn-sm btn-warning" target="_blank">Details mdn</a>
    </div>



</div>










<?php include_once 'inc/footer.php' ?>
