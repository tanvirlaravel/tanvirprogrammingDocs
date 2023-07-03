<?php include_once '../inc/header.php'; ?>
<div class="container">
    
    <?php include_once 'nav.php'; ?>
    <h1>Data</h1>
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">                
            </ul>
           </div> 
         
           <div class="col-8">
            <h3>What is Data</h3>
            <p>Data is information that is collected, organized, and analyzed in order to answer questions, make decisions, or solve problems. Data can take many different forms, including numbers, words, images, and sounds. It is often collected and stored in databases or spreadsheets, and can be analyzed using various tools, such as statistical software or machine learning algorithms.</p>
            <p>Data is an important resource for businesses, governments, and other organizations, as it can help them understand their customers, markets, and operations more effectively. It is also a critical resource for researchers and scientists, who use data to test hypotheses, develop new theories, and make discoveries. In today's digital age, data is generated and collected by a wide variety of sources, including sensors, websites, social media, and mobile devices.
 </p>
            <p>Data is represented with the help of characters such as alphabets (A-Z, a-z), digits (0-9) or special characters (+,-,/,*,<,>,= etc.)
             <hr>   
             <hr>

             <h3>What is Information?</h3>

    <p>Information is organized or classified data, which has some meaningful values for the receiver. Information is the processed data on which decisions and actions are based.</p>

    <p>

For the decision to be meaningful, the processed data must qualify for the following characteristics −</p>

<ul>
    <li><strong>Timely </strong>− Information should be available when required.</li>
    <li><strong>Accuracy </strong>− Information should be accurate.</li>
    <li><strong>Completeness</strong> − Information should be complete.</li>
</ul>

<hr>   
<hr>

<h3>Data Processing Cycle</h3>
<p>Data processing is the re-structuring or re-ordering of data by people or machine to increase their usefulness and add values for a particular purpose. Data processing consists of the following basic steps - input, processing, and output. These three steps constitute the data processing cycle.</p>

<img src="img/computer_data.jpg" class="img-fluid">

<ul>
<li><strong>Input </strong>− In this step, the input data is prepared in some convenient form for processing. The form will depend on the processing machine. For example, when electronic computers are used, the input data can be recorded on any one of the several types of input medium, such as magnetic disks, tapes, and so on.</li>
<li><strong>Processing </strong>− In this step, the input data is changed to produce data in a more useful form. For example, pay-checks can be calculated from the time cards, or a summary of sales for the month can be calculated from the sales orders.</li>
<li><strong>Output </strong>− At this stage, the result of the proceeding processing step is collected. The particular form of the output data depends on the use of the data. For example, output data may be pay-checks for employees.</li>

</ul>
<hr>
<hr>

            <h3>Data in compute programming</h3>
            <p>In computer programming, data refers to information that is stored, processed, and transmitted by computers. Data can be stored in a variety of formats, including text, numbers, images, and audio. It can be organized and structured in different ways, such as in databases, arrays, or lists.</p>
            <p>Programming languages provide various tools and techniques for manipulating data, such as variables, data types, and data structures. These tools allow programmers to store, retrieve, and manipulate data in their programs. For example, a programmer may use variables to store data that is entered by a user, or they may use data structures like arrays or lists to store and organize large amounts of data.</p>
            <p>Data is an essential part of computer programming, as it is the foundation upon which programs are built. Programs use data to store and process information, and they use algorithms and logic to manipulate and analyze that data. As a result, understanding how to work with data is a fundamental skill for any programmer.</p>
            <p>In computing, data is information that has been translated into a form that is efficient for movement or processing. Relative to today's computers and transmission media, data is information converted into binary digital form. </p>
            <hr>
            <hr>

            <h3>How data is stored</h3>
            <p>Computers represent data, including video, images, sounds and text, as binary values using patterns of just two numbers: 1 and 0.</p>
            <ol>
                <li>A bit is the smallest unit of data, and represents just a single value</li>
                <li>A byte is eight binary digits long. Storage and memory is measured in megabytes and gigabytes.</li>               
            </ol>
            <p>
                The units of data measurement continue to grow as the amount of data collected and stored grows. The relatively new term "brontobyte," for example, is data storage that is equal to 10 to the 27th power of bytes.
            </p>
            <p>
                Data can be stored in file formats, as in mainframe systems using ISAM and VSAM. Other file formats for data storage, conversion and processing include comma-separated values. These formats continued to find uses across a variety of machine types, even as more structured-data-oriented approaches gained footing in corporate computing.
            </p>
            <img src="img/storage-common_data_storage_measurements.png">
          
           <h3 class="">Data Types</h3>
            <p>Growth of the web and smartphones over the past decade led to a surge in digital data creation.  Data now includes text, audio and video information, as well as log and web activity records. Much of that is unstructured data</p>

           <p>In PHP, a data type is a classification of data based on the type of value it can hold. PHP supports a wide range of data types, including:</p>          

           <p>PHP supports ten primitive types.</p>

           <ol>
               <li>
                  Scalar types: These are basic data types that represent a single value. PHP supports four scalar types:
                  <ul>
                      <li>Integer: A whole number, such as -5 or 25.</li>
                      <li>Float: A decimal number, such as 3.14 or -2.7.</li>
                      <li>String: A sequence of characters, such as "hello" or "goodbye".</li>
                      <li>Boolean: A value that can be either true or false.</li>
                     
                  </ul>                 
               </li>
               <li>
                Compound types: These are data types that can contain multiple values. PHP supports two compound types:
                    <ul>
                      <li>Array: A collection of values, each with an associated key.</li>
                      <li>Object: A data type that represents a real-world object, with properties and methods.</li>
                     
                  </ul>
               </li>
               <li>Special types: These are data types that represent specific values or represent the absence of a value. PHP supports two special types:
                <ul>
                    <li>NULL: A value that represents the absence of a value.</li>
                    <li>Resource: A data type that represents a external resource, such as a file or database connection.</li>                    
                </ul>
               </li>
           </ol>

           <p>PHP is a loosely typed language, which means that you do not need to specify the data type of a variable when you declare it. The data type of a variable is determined by the value it is assigned. For example, if you assign an integer value to a variable, it will be treated as an integer, and if you assign a string value to the same variable, it will be treated as a string.</p>

            <p>Some references to the type "double" may remain in the manual. Consider double the same as float; the two names exist only for historic reasons.</p>

    <h5>Four compound types:</h5>
    <ul class="list-group">
         <ol>array</ol>
         <ol>object</ol>
         <ol>callable</ol>
         <ol>iterable</ol>
    </ul>


    <img src="img/data_type.png" class="img-fluid" alt="">

    <p>To get a human-readable representation of a type for debugging, use the <code>gettype()</code></p>
    <p>To forcibly convert a variable to a certain type, either <code>cast()</code> the variable or use the <code>settype()</code> function on it.</p>
          

           </div> 
    
    </div>
</div>



<?php include_once '../inc/footer.php'; ?>