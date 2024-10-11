<?php
if(isset($_POST['submit'])){
$host = "127.0.0.1";
$port = 25003;
// set_time_limit(0);
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
socket_connect($socket,$host,$port) or die('Not Connected');
$msg = $_POST['msg'];
socket_write($socket,$msg,strlen($msg));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Programming In PHP</title>
</head>
<body>

<form action="" method="POST">
<input type="text" name="msg">
<button type="submit" name="submit">Submit</button>
</form>

</body>
</html>