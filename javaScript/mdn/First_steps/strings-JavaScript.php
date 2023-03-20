<?php include_once '../../inc/header.php' ?>
<?php include_once '../../inc/nav.php' ?>

<h2 class="my-4 text-success text-center">Handling text — strings in JavaScript</h2>

<h3 class="text-info">The power of words</h3>
<p>Words are very important to humans — they are a large part of how we communicate. Since the Web is a largely text-based medium designed to allow humans to communicate and share information, it is useful for us to have control over the words that appear on it. HTML provides structure and meaning to our text, CSS allows us to precisely style it, and JavaScript contains a number of features for manipulating strings, creating custom welcome messages and prompts, showing the right text labels when needed, sorting terms into the desired order, and much more.</p>

<hr>
<h3 class="text-info">Escaping characters in a string</h3>
<p> Escaping characters means that we do something to them to make sure they are recognized as text, not part of the code. In JavaScript, we do this by putting a backslash just before the character.</p>
<p>See <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String#Escape_notation" target="_blank">Escape notation</a> for more details.</p>

<hr>
<h3 class="text-info">Numbers vs. strings</h3>
<p>Trying to represent a string as a number doesn't really make sense, but representing a number as a string does, so the browser rather cleverly converts the number to a string and concatenates the two strings.</p>
<pre class="bg-dark text-white p-3">
    let myString = '123';
    let myNum = Number(myString);
    typeof myNum;
</pre>
<pre class="bg-dark text-white p-3">
    let myNum = 123;
    let myString = myNum.toString();
    typeof myString;
</pre>
<p>These constructs can be really useful in some situations. For example, if a user enters a number into a form's text field</p>
<hr>
<h3 class="text-info">Template literals</h3>
<p>Template literals respect the line breaks in the source code, so newline characters are no longer needed. This would achieve the same result:</p>
<pre class="bg-dark text-white p-3">
    output = `I like the song "${ song }".
    I gave it a score of ${ score/highestScore * 100 }%.`;
</pre>
<p class="mb-5"></p>

<?php include_once '../../inc/footer.php' ?>
