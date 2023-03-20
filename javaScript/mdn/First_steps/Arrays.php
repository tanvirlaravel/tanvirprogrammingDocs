<?php include_once '../../inc/header.php' ?>
<?php include_once '../../inc/nav.php' ?>

<h2 class="my-4 text-success text-center">Arrays</h2>

<h3 class="text-info">What is an array?</h3>
<p>Arrays are generally described as "list-like objects"; they are basically single objects that contain multiple values stored in a list.</p>
<hr>

<h3 class="text-info">Accessing and modifying array items</h3>
<p>You can also modify an item in an array by simply giving a single array item a new value</p>
<pre class="p-2 text-white bg-dark">
    let shopping = ['bread', 'milk', 'cheese', 'hummus', 'noodles'];
    
    shopping[0] = 'tahini';
    shopping;
    // shopping will now return [ "tahini", "milk", "cheese", "hummus", "noodles" ]
</pre>
<hr>

<h2 class="text-success">Some useful array methods</h2>
<p>useful array-related methods that allow us to split strings into array items and vice versa</p>

<h3 class="text-info">Converting between strings and arrays</h3>
<p>Often you'll be presented with some raw data contained in a big long string, and you might want to separate the useful items out into a more useful form and then do things to them, like display them in a data table. To do this, we can use the split() method. In its simplest form, this takes a single parameter, the character you want to separate the string at, and returns the substrings between the separator as items in an array.</p>

<pre class="p-2 text-white bg-dark">
    let myData = 'Manchester,London,Liverpool,Birmingham,Leeds,Carlisle';
    
    let myArray = myData.split(',');
    myArray //["Manchester", "London", "Liverpool", "Birmingham", "Leeds", "Carlisle"]  
    
    let myNewString = myArray.join(',');
    myNewString; //"Manchester,London,Liverpool,Birmingham,Leeds,Carlisle"
</pre>
<p>Another way of converting an array to a string is to use the toString() method. toString() is arguably simpler than join() as it doesn't take a parameter, but more limiting. With join() you can specify different separators, whereas toString() always uses a comma. (Try running Step 4 with a different character than a comma.)</p>

<pre class="p-2 text-white bg-dark">
    let dogNames = ['Rocket','Flash','Bella','Slugger'];
    dogNames.toString(); // Rocket,Flash,Bella,Slugger
</pre>
<hr>

<h3 class="text-info">Adding and removing array items</h3>
<p>Often you'll be presented with some raw data contained in a big long string, and you might want to separate the useful items out into a more useful form and then do things to them, like display them in a data table. To do this, we can use the split() method. In its simplest form, this takes a single parameter, the character you want to separate the string at, and returns the substrings between the separator as items in an array.</p>

<pre class="p-2 text-white bg-dark">
    let myArray = ['Manchester', 'London', 'Liverpool', 'Birmingham', 'Leeds', 'Carlisle'];
    
    to add or remove an item at the end of an array we can use push() and pop() respectively.
    
    to add to the end of your array
    
    myArray.push('Cardiff'); 
    // ["Manchester", "London", "Liverpool", "Birmingham", "Leeds", "Carlisle", "Cardiff"]
    
    myArray.push('Bradford', 'Brighton');
    ["Manchester", "London", "Liverpool", "Birmingham", "Leeds", "Carlisle", "Cardiff", "Bradford", "Brighton"]
    
    The new length of the array is returned when the method call completes. If you wanted to store the new array length in a variable
    
    let newLength = myArray.push('Bristol');
    echo newLength // 10
    
    Removing the last item from the array is as simple as running pop() on it.
    myArray.pop();
    
    The item that was removed is returned when the method call completes. To save that item in a new variable,
    let removedItem = myArray.pop();
    echo removedItem; // "Bristol"
    
    unshift() and shift() work in exactly the same way as push() and pop(), respectively, except that they work on the beginning of the array, not the end.
    
    myArray.unshift('Edinburgh');
    myArray; 
    //     ["Edinburgh", "Manchester", "London", "Liverpool", "Birmingham", "Leeds", "Carlisle", "Cardiff", "Bradford", "Brighton"]
    
    let removedItem = myArray.shift();
    myArray;
    removedItem;
    // "Edinburgh"
</pre>

<h3 class="text-info">Active learning: Printing those products!</h3>
<a href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/Arrays">later</a>







<p class="mb-5"></p>

<?php include_once '../../inc/footer.php' ?>
