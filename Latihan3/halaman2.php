<?php
$x = $_POST["bil"];
echo "Bilangan $x adalah bilangan ";
echo $x % 2 == 0 ? "genap" : "ganjil";
