@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">N</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

            <div class="col-md-9">

            <h2>Node</h2>

        <p>In the DOM, all parts of the document, such as elements, attributes, text, etc. are organized in a hierarchical tree-like structure; consisting of parents and children. These individual parts of the document are known as nodes.</p>
        <img src="{{ asset('img/definations/node/node.png') }}" class="img-fluid" alt="">
        <p>The topmost node is the root node (Document Node) of the DOM tree, which has one child, the &lt;html&gt; element and so on. Further, the text content inside an element is a child node of the parent element, for example, "Mobile OS" is considered as a child node of the &lt;h1&gt; that contains it, and so on. Comments inside the HTML document are nodes in the DOM tree as well even though they dont effect the document in any way. HTML attributes such as id, class, title, style, etc. are also considered as nodes in DOM hierarchy.</p>

        <p>If you have an HTML file, you can see that it contains HTML elements, like <strong><span class="text-danger">&lt;p&gt;,&lt;div&gt;, &lt;section&gt;</span></strong>, etc. It also has <strong><span class="text-danger">HTML comments, line-breaks, text content, and HTML attributes</span></strong>. The browser reads this HTML file & according to the W3C HTML DOM standard, it breaks everything up in the HTML document into individual nodes.</p>

        <p><strong><span class="text-danger">&lt;p&gt;,&lt;div&gt;, &lt;section&gt;</span></strong> etc. are treated as "element" nodes, but comments are "comment" nodes, "text" objects are "text nodes" & line-breaks are also classified as "text nodes". </p>

        <p>With the help of Javascript, we can access these DOM nodes in the node tree.</p>
        <p>Always remember one thing: Every HTML element is a node, but not every node an HTML element.</p>

        <a href="https://stackoverflow.com/questions/24974621/what-is-a-node-in-javascript#:~:text=A%20%22node%22%2C%20in%20this,document%22%20and%20%22element%22." target="_blank" class="btn btn-danger">Node vs Element</a>
            
            </div>
</div>
@endsection