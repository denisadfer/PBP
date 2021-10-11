<?php 
  
  // $fruits = [
  //   ["Melon", "Tomat", "Jambu"],
  //   ["Jeruk", "Mangga", "Nanas"],
  //   ["Anggur", "Semangka", "Naga"]
  // ];

  // //Cara 1
  // echo $fruits[0][0]."<br>";
  // echo $fruits[0][1]."<br>";
  // echo $fruits[1][2]."<br>";
  // echo "<br>";

  // //Cara 2
  // for ($i = 0;$i < count($fruits);$i++) {
  //   for ($j = 0;$j < count($fruits);$j++) {
  //     echo $fruits[$i][$j]."&nbsp";
  //   }
  //   echo "<br>";
  // }

  $a = [
    [1,2],
    [3,4]
  ];
  
  $b = [
    [5,6],
    [7,8]
  ];

  for ($i = 0;$i < count($a);$i++) {
    for ($j = 0;$j < count($a);$j++) {
      echo ($a[$i][$j] + $b[$i][$j])." ";
    }
    echo "<br>";
  }
?>