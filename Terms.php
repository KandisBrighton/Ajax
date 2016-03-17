<?php
 //pjp code to define terms for ajax_assn_10.html
$terms = array(
"Ajax"=>"a method of building interactive applications for the Web that process user requests immediately. Ajax combines several programming tools including JavaScript, dynamic HTML (DHTML), Extensible Markup Language (XML), cascading style sheets (CSS), the Document Object Model (DOM), and the Microsoft object, XMLHttpRequest.",
"jQuery"=>"a cross-platform JavaScript library designed to simplify the client-side scripting of HTML. jQuery is the most popular JavaScript library in use today, with installation on 65% of the top 10 million highest-trafficked sites on the Web. jQuery is free, open-source software licensed under the MIT License.",
"JavaScript"=>"an object-oriented computer programming language commonly used to create interactive effects within web browsers.");
 $value = isset($_POST['value']) ? $_POST['value'] : "oops!";
 //$value = $_POST['value'];
 echo $value, ": ";
 foreach ($terms as $term => $def)  {
    if ($term === $value) {
        echo $def;
    }
 }
 ?>