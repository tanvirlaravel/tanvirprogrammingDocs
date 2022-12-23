<?php include_once 'inc/header.php' ?>

<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">Variables</h2>

<div class="text-justify">
    <p>Variables are used to store information to be referenced and manipulated in a computer program. It is helpful to think of variables as containers that hold information. Their sole purpose is to label and store data in memory.</p>

    <p>Variables are the names you give to computer memory locations which are used to store values in a computer program.</p>

    <p>
        A variable is a way of referring to a storage area in a computer program. This memory location holds values—numbers, text or more complicated types of data like payroll records.

        Operating systems load programs into different parts of the computer's memory so there is no way of knowing exactly which memory location holds a particular variable before the program is run. When a variable is assigned a symbolic name like "employee_payroll_id," the compiler or interpreter can work out where to store the variable in memory.
    </p>


    <p>They are called variables because the represented information can change</p>
    <p>In programming, a variable is a value that can change, depending on conditions or on information passed to the program.</p>
    <p>Every variable has a name, called the variable name, and a data type. </p>
    <p>The opposite of a variable is a constant. Constants are values that never change.</p>

</div>
<hr>

<a href="" class="btn btn-sm btn-warning">what are memories?</a>

<hr>

<h3 class="text-info">Data Types in JavaScript</h3>

<p>Data types basically specify what kind of data can be stored and manipulated within a program.</p>


<nav class="pt-3">

    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active bg-primary text-white" id="nav-home-tab" data-toggle="tab" href="#nav-boolean" role="tab" aria-controls="nav-home" aria-selected="true">Boolean type</a>
        <a class="nav-item nav-link bg-success text-white" id="nav-profile-tab" data-toggle="tab" href="#nav-null" role="tab" aria-controls="nav-profile" aria-selected="false">Null type</a>
        <a class="nav-item nav-link bg-danger text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-undefined" role="tab" aria-controls="nav-contact" aria-selected="false">Undefined type</a>
        <a class="nav-item nav-link bg-warning text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-number" role="tab" aria-controls="nav-contact" aria-selected="false">Number type</a>
        <a class="nav-item nav-link bg-info text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-string" role="tab" aria-controls="nav-contact" aria-selected="false">String type</a>
        <a class="nav-item nav-link bg-dark text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-symbol" role="tab" aria-controls="nav-contact" aria-selected="false">Symbol type</a>
        <a class="nav-item nav-link bg-primary text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-objects" role="tab" aria-controls="nav-contact" aria-selected="false">Objects</a>
        <a class="nav-item nav-link bg-dark text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-collections" role="tab" aria-controls="nav-contact" aria-selected="false">Keyed collections: Maps, Sets, WeakMaps, WeakSets</a>
        <a class="nav-item nav-link bg-success text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-json" role="tab" aria-controls="nav-contact" aria-selected="false">Structured data: JSON</a>
    </div>

</nav>



<div class="tab-content p-2 mb-5" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-boolean" role="tabpanel" aria-labelledby="nav-home-tab">
        <p>true and false</p>
        <p>
            <code>0</code>, <code>-0</code>, <code>null</code>, <code>false</code>, <code>NaN</code>, <code>undefined</code>, or the empty string <code>("")</code>, the object has an initial value of false.
        </p>
        <p>All other values, including any <code>object</code>, an empty array <code>([])</code>, or the string <code>"false"</code>, create an object with an initial value of true.</p>
        <p>Do not confuse the primitive Boolean values true and false with the true and false values of the Boolean object.</p>
        <p>Any object of which the value is not undefined or null, including a Boolean object whose value is false, evaluates to true when passed to a conditional statement.</p>
        <pre>
	  		var x = new Boolean(false);
			if (x) {
			  // this code is executed
			}
	  	</pre>
        <pre>
	  		var x = new Boolean(false);
			if (x) {
			  // this code is executed
			}
	  	</pre>
        <a class="btn btn-sm btn-warning" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Boolean" target="_blank">Details mdn</a>
    </div>

    <div class="tab-pane fade" id="nav-null" role="tabpanel" aria-labelledby="nav-profile-tab">
        <p>In computer science, a null value represents a reference that points, generally intentionally, to a nonexistent or invalid object or address.</p>
        <p>The Null type has exactly one value: <code>null</code></p>
        <p>The value null represents the intentional absence of any object value</p>
        <p>null expresses a lack of identification, indicating that a variable points to no object. In APIs, null is often retrieved in a place where an object can be expected but no object is relevant.</p>
        <pre>
	   	// foo does not exist. It is not defined and has never been initialized:
                foo; //ReferenceError: foo is not defined

               // foo is known to exist now but it has no type or value:
		var foo = null; 
		foo; //null
	   </pre>
        <pre>
	   	typeof null          // "object" (not "null" for legacy reasons)
		typeof undefined     // "undefined"
		null === undefined   // false
		null  == undefined   // true
		null === null        // true
		null == null         // true
		!null                // true
		isNaN(1 + null)      // false
		isNaN(1 + undefined) // true
	   </pre>

    </div>

    <div class="tab-pane fade" id="nav-undefined" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>A variable that has not been assigned a value has the value undefined</p>
        <p>undefined is a property of the global object. That is, it is a variable in global scope. The initial value of undefined is the primitive value undefined.</p>
        <p> A function returns undefined if a value was not returned.</p>
    </div>

    <div class="tab-pane fade" id="nav-number" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>ECMAScript has two built-in numeric types: Number and BigInt </p>
        <p>to representing floating-point numbers, the number type has three symbolic values: +Infinity, -Infinity, and NaN ("Not a Number").</p>
    </div>

    <div class="tab-pane fade" id="nav-string" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>Each element in the String occupies a position in the String. The first element is at index 0, the next at index 1, and so on.</p>
        <p>The length of a String is the number of elements in it.</p>
    </div>


    <div class="tab-pane fade" id="nav-symbol" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>symbol later</p>
    </div>


    <div class="tab-pane fade" id="nav-objects" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p>In computer science, an object is a value in memory which is possibly referenced by an identifier.</p>
        <p>An identifier is a sequence of characters in the code that identifies a variable, function, or property.An identifier differs from a string in that a string is data, while an identifier is part of the code.</p>
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
