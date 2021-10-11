<?php 
  $fruits = ["Jeruk", "Apel", "Jambu"];

  echo "FOR<br>";
  for ($i = 0;$i < count($fruits);$i++) {
    echo $fruits[$i]."<br>";  
  }

  echo "<br>FOREACH<br>";
  foreach ($fruits as $fruit) {
    echo $fruit."<br>";
  }

  
?>