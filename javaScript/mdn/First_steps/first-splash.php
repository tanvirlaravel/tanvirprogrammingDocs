<?php include_once '../../inc/header.php' ?>
<?php include_once '../../inc/nav.php' ?>

<h2 class="my-4 text-success text-center">First Step</h2>

<h3 class="text-info">Thinking like a programmer</h3>
<ul>
    <li>One of the hardest things to learn in programming is not the syntax you need to learn, but how to apply it to solve real world problems. </li>
    <li> You need to start thinking like a programmer</li>
    <li>
        this generally involves looking at descriptions of what your program needs to do, working out what code features are needed to achieve those things, and how to make them work together.</li>
</ul>

<hr>
<h3 class="text-info">Guess the number game</h3>
<p>Let's imagine your boss has given you the following brief for creating this game:</p>
<p class="p-3 bg-dark text-white lead">I want you to create a simple guess the number type game. It should choose a random number between 1 and 100, then challenge the player to guess the number in 10 turns. After each turn the player should be told if they are right or wrong and, if they are wrong, whether the guess was too low or too high. It should also tell the player what numbers they previously guessed. The game will end once the player guesses correctly, or once they run out of turns. When the game ends, the player should be given an option to start playing again.</p>
<p>Upon looking at this brief, the first thing we can do is to start breaking it down into simple actionable tasks, in as much of a programmer mindset as possible:</p>
<ol>
    <li>Generate a random number between 1 and 100.</li>
    <li>Record the turn number the player is on. Start it on 1.</li>
    <li>Provide the player with a way to guess what the number is.</li>
    <li>Once a guess has been submitted first record it somewhere so the user can see their previous guesses.</li>
    <li>Next, check whether it is the correct number.</li>
    <li>
        If it is correct:
        <ol>
            <li>Display congratulations message.</li>
            <li>Stop the player from being able to enter more guesses (this would mess the game up).</li>
            <li>Display control allowing the player to restart the game.</li>
        </ol>
    </li>
    <li>
        If it is wrong and the player has turns left
        <ol>
            <li>Tell the player they are wrong.</li>
            <li>Allow them to enter another guess.</li>
            <li>Increment the turn number by 1.</li>
        </ol>
    </li>
    <li>
        If it is wrong and the player has no turns left:
        <ol>
            <li>Tell the player it is game over.
            </li>
            <li>Stop the player from being able to enter more guesses (this would mess the game up).</li>
            <li>Display control allowing the player to restart the game.</li>
        </ol>
    </li>
    <li>Once the game restarts, make sure the game logic and UI are completely reset, then go back to step 1.</li>
</ol>

<hr>
<h1>Number guessing game</h1>

<pre class="bg-dark p-2 text-white">
&lt;h1&gt;Number guessing game&lt;/h1&gt;

&lt;p&gt;We have selected a random number between 1 and 100. 
See if you can guess it in 10 turns or fewer. We'll tell you 
if your guess was too high or too low.&lt;/p&gt;

&lt;div class="form"&gt;
    &lt;label for="guessField"&gt;Enter a guess: &lt;/label&gt;
    &lt;input type="text" id="guessField" class="guessField"&gt;
    &lt;input type="submit" value="Submit guess" class="guessSubmit"&gt;
&lt;/div>

&lt;div class="resultParas"&gt;
    &lt;p class="guesses">&lt;/p&gt;
    &lt;p class="lastResult">&lt;/p&gt;
    &lt;p class="lowOrHi">&lt;/p&gt;
&lt;/div&gt;
                </pre>

<pre class="bg-dark p-2 text-white">
&lt;script&gt;

    let randomNumber = Math.floor(Math.random() * 100) + 1;
    const guesses = document.querySelector('.guesses');
    const lastResult = document.querySelector('.lastResult');
    const lowOrHi = document.querySelector('.lowOrHi');
    const guessSubmit = document.querySelector('.guessSubmit');
    const guessField = document.querySelector('.guessField');
    let guessCount = 1;
    let resetButton;

    function checkGuess() {
        let userGuess = Number(guessField.value);
        if (guessCount === 1) {
            guesses.textContent = 'Previous guesses: ';
        }

        guesses.textContent += userGuess + ' ';

        if (userGuess === randomNumber) {
            lastResult.textContent = 'Congratulations! You got it right!';
            lastResult.style.backgroundColor = 'green';
            lowOrHi.textContent = '';
            setGameOver();
        } else if (guessCount === 10) {
            lastResult.textContent = '!!!GAME OVER!!!';
            lowOrHi.textContent = '';
            setGameOver();
        } else {
            lastResult.textContent = 'Wrong!';
            lastResult.style.backgroundColor = 'red';
            if (userGuess < randomNumber) {
                lowOrHi.textContent = 'Last guess was too low!';
            } else if (userGuess > randomNumber) {
                lowOrHi.textContent = 'Last guess was too high!';
            }
        }

        guessCount++;
        guessField.value = '';
        guessField.focus();
    }

    guessSubmit.addEventListener('click', checkGuess);

    function setGameOver() {
        guessField.disabled = true;
        guessSubmit.disabled = true;
        resetButton = document.createElement('button');
        resetButton.textContent = 'Start new game';
        document.body.appendChild(resetButton);
        resetButton.addEventListener('click', resetGame);
    }

    function resetGame() {
        guessCount = 1;
        const resetParas = document.querySelectorAll('.resultParas p');
        for (let i = 0; i < resetParas.length; i++) {
            resetParas[i].textContent = '';
        }

        resetButton.parentNode.removeChild(resetButton);
        guessField.disabled = false;
        guessSubmit.disabled = false;
        guessField.value = '';
        guessField.focus();
        lastResult.style.backgroundColor = 'white';
        randomNumber = Math.floor(Math.random() * 100) + 1;
    }


&lt;/script&gt;
                </pre>



<p>We have selected a random number between 1 and 100. See if you can guess it in 10 turns or fewer. We'll tell you if your guess was too high or too low.</p>

<div class="form">
    <label for="guessField">Enter a guess: </label>
    <input type="text" id="guessField" class="guessField">
    <input type="submit" value="Submit guess" class="guessSubmit">
</div>

<div class="resultParas">
    <p class="guesses"></p>
    <p class="lastResult"></p>
    <p class="lowOrHi"></p>
</div>



<?php include_once '../../inc/footer.php' ?>

<script>
    let randomNumber = Math.floor(Math.random() * 100) + 1;
    const guesses = document.querySelector('.guesses');
    const lastResult = document.querySelector('.lastResult');
    const lowOrHi = document.querySelector('.lowOrHi');
    const guessSubmit = document.querySelector('.guessSubmit');
    const guessField = document.querySelector('.guessField');
    let guessCount = 1;
    let resetButton;

    function checkGuess() {
        let userGuess = Number(guessField.value);
        if (guessCount === 1) {
            guesses.textContent = 'Previous guesses: ';
        }

        guesses.textContent += userGuess + ' ';

        if (userGuess === randomNumber) {
            lastResult.textContent = 'Congratulations! You got it right!';
            lastResult.style.backgroundColor = 'green';
            lowOrHi.textContent = '';
            setGameOver();
        } else if (guessCount === 10) {
            lastResult.textContent = '!!!GAME OVER!!!';
            lowOrHi.textContent = '';
            setGameOver();
        } else {
            lastResult.textContent = 'Wrong!';
            lastResult.style.backgroundColor = 'red';
            if (userGuess < randomNumber) {
                lowOrHi.textContent = 'Last guess was too low!';
            } else if (userGuess > randomNumber) {
                lowOrHi.textContent = 'Last guess was too high!';
            }
        }

        guessCount++;
        guessField.value = '';
        guessField.focus();
    }

    guessSubmit.addEventListener('click', checkGuess);

    function setGameOver() {
        guessField.disabled = true;
        guessSubmit.disabled = true;
        resetButton = document.createElement('button');
        resetButton.textContent = 'Start new game';
        document.body.appendChild(resetButton);
        resetButton.addEventListener('click', resetGame);
    }

    function resetGame() {
        guessCount = 1;
        const resetParas = document.querySelectorAll('.resultParas p');
        for (let i = 0; i < resetParas.length; i++) {
            resetParas[i].textContent = '';
        }

        resetButton.parentNode.removeChild(resetButton);
        guessField.disabled = false;
        guessSubmit.disabled = false;
        guessField.value = '';
        guessField.focus();
        lastResult.style.backgroundColor = 'white';
        randomNumber = Math.floor(Math.random() * 100) + 1;
    }

</script>
