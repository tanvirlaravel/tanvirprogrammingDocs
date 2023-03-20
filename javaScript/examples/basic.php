<?php include_once '../inc/header.php' ?>
<?php include_once '../inc/nav.php' ?>

<h2 class="my-4 text-success text-center">image change</h2>

<div class="row">
    <div class="col">
        <p>html</p>
        <pre class="text-white bg-dark p-2">
    &lt;img src="img/img-chnage-1.png" class="img-fluid" id="bassic-image" alt=""&gt;
       </pre>

        <p>javascript and api</p>
        <pre class="text-white bg-dark p-2">
&lt;script&gt;
    // apis document, quserySelector, getAttribute, setAttribute
    
    let img = document.querySelector('#bassic-image');
    
    img.onclick = function() {
        let mySrc = img.getAttribute('src');
        if (mySrc == 'img/img-chnage-1.png') {
            img.setAttribute('src', 'img/img-chnage-2.png');
        } else {
            img.setAttribute('src', 'img/img-chnage-1.png');
        }
    }

&lt;/script&gt;
</pre>
    </div>
    <div class="col">
        <img src="img/img-chnage-1.png" class="img-fluid" id="bassic-image" alt="">
    </div>
</div>
<?php include_once '../inc/footer.php' ?>


<script>
    // apis document, quserySelector, getAttribute, setAttribute
    let img = document.querySelector('#bassic-image');
    img.onclick = function() {
        let mySrc = img.getAttribute('src');
        if (mySrc == 'img/img-chnage-1.png') {
            img.setAttribute('src', 'img/img-chnage-2.png');
        } else {
            img.setAttribute('src', 'img/img-chnage-1.png');
        }
    }

</script>
