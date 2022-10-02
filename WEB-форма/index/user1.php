<html> 
<head>
<title> Інформація, що надіслана за допомогою гіперпосилань </title>
<link rel="stylesheet" href="../style/style2.css">

</head>
<body>
<?php
$vuz_name=$_GET['vuz_name'];
$fac_name=$_GET['fac_name'];
$kurs=$_GET['kurs'];
?>
<ul>
<li> ВУЗ: <b><?php echo $vuz_name ?></b></li>
<li> Факультет: <b><?php echo $fac_name ?></b></li>
<li> Kурс: <b><?php echo $kurs?></b></li>
</ul>
</body>
</html>
