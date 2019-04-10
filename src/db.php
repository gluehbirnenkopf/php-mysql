<?php
$host    = "172.17.0.2";
$pass    = "Devel0p!";
$user    = "chatuser";
$db_name = "lgchat";
$conn    = new mysqli($host, $user, $pass, $db_name);
if ($conn) {
	echo "Connection to Chat established";
}
?>
