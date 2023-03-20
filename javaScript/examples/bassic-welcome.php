<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-success text-center">image change</h2>

<div class="row">
    <div class="col">
        <p>html</p>
        <pre class="text-white bg-dark p-2">
        &lt;h1&gt;hellow tanvir&lt;/h1&gt;
        &lt;button id="change-name"&gt;Change user&lt;/button&gt;
  
       </pre>

        <p>javascript and api</p>
        <pre class="text-white bg-dark p-2">
&lt;script&gt;
    // apis localStorage
    // selectors
    let myHeading = document.querySelector('h1');
    let myButton = document.querySelector('#change-name');

    function setUserName() {
        let myName = prompt('Please enter your name.');
        if (!myName || myName == null) {
            setUserName()
        } else {
            localStorage.setItem('name', myName);
            myHeading.textContent = 'Mozila is cool ' + myName;
        }
    }
    
    if (!localStorage.getItem('name')) {
        setUserName();
    } else {
        let storeName = localStorage.getItem('name');
        myHeading.textContent = 'Mozila is cool ' + storeName;
    }

    myButton.onclick = function() {
        setUserName();
    }

&lt;/script&gt;
</pre>
    </div>
    <div class="col">
        <h1>hellow tanvir</h1>
        <button id="change-name">Change user</button>
    </div>
</div>
<?php include_once '../inc/footer.php' ?>


<script>
    // apis localStorage
    // selectors
    let myHeading = document.querySelector('h1');
    let myButton = document.querySelector('#change-name');

    function setUserName() {
        let myName = prompt('Please enter your name.');
        if (!myName || myName == null) {
            setUserName()
        } else {
            localStorage.setItem('name', myName);
            myHeading.textContent = 'Mozila is cool ' + myName;
        }
    }

    if (!localStorage.getItem('name')) {
        setUserName();
    } else {
        let storeName = localStorage.getItem('name');
        myHeading.textContent = 'Mozila is cool ' + storeName;
    }

    myButton.onclick = function() {
        setUserName();
    }

</script>
