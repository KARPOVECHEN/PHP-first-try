<html> 
<head>
<title> Інформація, що надіслана за допомогою гіперпосилань </title>
<link rel="stylesheet" href="../style/style2.css">

</head>
<body>
<?php
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$home_phone=$_GET['home_phone'];
$email=$_GET['email'];
?>
<ul>
<li>Прізвище: <?php echo $first_name ?> </li>
<li>Ім'я: <?php echo $last_name ?></li>
<li>Домашній телефон: <?php echo $home_phone?></li>
<li>Електронна адреса: <?php echo $email ?></li>
</ul>
</body>
</html>
