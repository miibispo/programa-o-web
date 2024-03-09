<?php
$n = $_POST["nome"];
 $i = $_POST ["idade"];

 if ($i >= 0 and $i < 13) {
    print $n . " é uma criança";
 } else {
    if ($i < 18) {
        print $n . " é um adolescente";
    } else {
        if ($i < 60) {
            print $n . " é adulto(a)";  
        } else {
            print $n . " é idoso (a)";
        }
    }
 }
