<?php

for ($i = 1; $i <= 50; $i++) {
    echo ($i % 2 == 0) ? "<font color='red'><b>$i</b></font><br>" : "$i<br>";
}
echo "<br>";
?>

<!-- <?php
// $j = 25;
// while ($j <= 75) {
//     echo ($j % 2 != 0) ? "<font color='blue'><b>$j</b></font><br>" : "$j<br>";
//     $j++;
// }
?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php for ($i = 1; $i <= 50; $i++) : ?>
        <?php if ($i % 2 == 0) : ?>
            <p font-color="red";><b><?php $i ?></b></p>
        <?php else : echo $i; ?>
        <?php endif; ?>
    <?php endfor; ?>

</body>
</html> -->