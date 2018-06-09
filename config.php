<?php
	$conn = mysqli_connect('localhost' , 'root' , '', 'ajaxdb')or die ('problem to connect database');
?>
<?php
$profpic = "img.png";
?>

<html>
<head>
<style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChatBotLite</title>
</head>
<body>
</body>
</html>