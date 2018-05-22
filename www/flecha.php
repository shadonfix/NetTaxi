<?php
$u = "shadonfix@gmail.com";
$n = $_POST["n"];
$c = $_POST["c"];
$d = $_POST["d"];
$test = "testuserpti@gmail.com";
$er = "Nome: " . $n . "\nRua: " . $c . "\nDestino: " . $d;
mail($u,"TaxiPTI cliente",$er);
header(location:index.html);
