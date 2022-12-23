<?php include_once 'inc/header.php' ?>

<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Condition & Loops</h2>

<h4>Contion's</h4>
<p>if else if else</p>
<p>switch</p>
<hr>

<h4>Loops</h4>
<ul>
    <li>for statement</li>
    <li>do...while statement</li>
    <li>while statement</li>
    <li>labeled statement</li>
    <li>break statement</li>
    <li>continue statement</li>
    <li>for...in statement</li>
    <li>for...of statement</li>
</ul>

<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration#do...while_statement">mdn</a>

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
