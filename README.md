<h1>Php Morse Alphabet Class</h1>

<h2>How To Use The Class</h2>

<h4>Include Class</h4>
<code>
require 'MorseClass.php'; $morse = new MorseClass();
</code>

<h4>Text To Mors</h4>
<code>
    echo $morse->text_to_morse('hello world'); // Result: .... . .-.. .-.. --- / .-- --- .-. .-.. -..
</code>

<h4>Mors To Text</h4>
<code>
    echo $morse->morse_to_text('.... . .-.. .-.. --- / .-- --- .-. .-.. -..'); // Result: hello world
</code>

<h2>Author Information</h2>
<span>Author: Ahmet Işıtan Narlı</span>
<br>
<span>Mail: ahmetisitannarli@gmail.com</span>
<br>
<span>Facebook Profile: <a href="https://facebook.com/isitan.narli">fb.com/isitan.narli</a></span>
<br>
<span>Twitter Profile: <a href="https://twitter.com/isitannarli">twitter.com/isitannarli</a></span>
