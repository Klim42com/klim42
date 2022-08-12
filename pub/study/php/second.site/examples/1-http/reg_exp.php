<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>reg_exp</title>
</head>
<body>	
<?
	$name = "Se";
	$mail = "sshuykov.specialist.ru";

	$pattern_name = '/\w{3,}/';
	$pattern_mail = '/\w+@\w+\.\w+/';

	echo "<h1>$name : ", preg_match($pattern_name, $name), "</h1>";
	echo "<h1>$mail : ", preg_match($pattern_mail, $mail), "</h1>";


?>
</body>
</html>
