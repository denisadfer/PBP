<?php

for ($i = 1; $i <= 50; $i++) {
    echo ($i % 2 == 0) ? "<font color='red'><b>$i</b></font><br>" : "$i<br>";
}
echo "<br>";
$j = 25;
while ($j <= 75) {
    echo ($j % 2 != 0) ? "<font color='blue'><b>$j</b></font><br>" : "$j<br>";
    $j++;
}
