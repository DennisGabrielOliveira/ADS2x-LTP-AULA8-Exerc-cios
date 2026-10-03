<?php
$num01 = $_POST['numero01'];
$num02 = $_POST['numero02'];

echo "A soma de ". $num01 . " + " . $num02 . " é igual a " . $num01 + $num02 ;
echo "<h4>Debug com var_dump:</h4>";
var_dump($_POST);
?>