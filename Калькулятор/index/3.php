<link rel="stylesheet" href="../css/style_2.css">

<div>
<?php

$string="Математичний приклад POST";
$a=$_POST["a"];
$b=$_POST["b"];

$sum=$a+$b;
$riz=$a-$b;
$dob=$a*$b;
$dil=$a/$b;

echo"<p>$string</p>";
echo"<p>a=$a,b=$b</p>";

echo"<p>Сума: $sum</p>";
echo"<p>Різниця: $riz</p>";
echo"<p>Добуток: $dob</p>";
echo"<p>Частка: $dil</p>";

?>

</div>
