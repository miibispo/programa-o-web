<?php
$c = $_POST["celsius"];
$f = 1.8 * $c + 32;

print "<h1> A temperatura em Fahrenheit é: </h1>";
print "<h1>" . $f . "</h1>";

?>