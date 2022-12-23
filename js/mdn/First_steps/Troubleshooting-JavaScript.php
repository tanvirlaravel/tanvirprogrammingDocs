<?php include_once '../../inc/header.php' ?>
<?php include_once '../../inc/nav.php' ?>

<h2 class="my-4 text-success text-center">What went wrong? Troubleshooting JavaScript</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Types of error</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Other common errors</a>

        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <h3 class="text-info">Types of error</h3>
                <ul>
                    <li>Syntax errors: These are spelling errors in your code that actually cause the program not to run at all, or stop working part way through — you will usually be provided with some error messages too. These are usually okay to fix, as long as you are familiar with the right tools and know what the error messages mean!</li>
                    <li>
                        Logic errors: These are errors where the syntax is actually correct but the code is not what you intended it to be, meaning that program runs successfully but gives incorrect results. These are often harder to fix than syntax errors, as there usually isn't an error message to direct you to the source of the error.
                    </li>
                </ul>
                <p>displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved.</p>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h3 class="text-info">Other common errors</h3>
                <h4>SyntaxError: missing ; before statement</h4>
                <p>This error generally means that you have missed a semicolon at the end of one of your lines of code, but it can sometimes be more cryptic</p>
                <p class="p-2 bg-dark text-white">
                    var userGuess = Number(guessField.value);
                    <br> to <br>
                    var userGuess === Number(guessField.value);
                </p>
                <p>It throws this error because it thinks you are trying to do something different. You should make sure that you don't mix up the assignment operator (=) — which sets a variable to be equal to a value — with the strict equality operator (===), which tests whether one value is equal to another, and returns a true/false result.</p>
                <h4>SyntaxError: missing ) after argument list</h4>
                <p>This one is pretty simple — it generally means that you've missed the closing parenthesis at the end of a function/method call.</p>
                <h4>SyntaxError: missing : after property id</h4>
                <p>This error usually relates to an incorrectly formed JavaScript object, but in this case we managed to get it by changing</p>
                <p class="p-2 bg-dark text-white">
                    function checkGuess() {
                    <br> to <br>
                    function checkGuess( {
                </p>

            </div>


        </div>
    </div>

    <a class="btn btn-info" href="https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/What_went_wrong">Details mdn</a>
</div>




<?php include_once '../../inc/footer.php' ?>
