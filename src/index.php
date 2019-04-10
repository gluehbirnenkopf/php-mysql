<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DBA020 Chat+MySql</title>
	<link rel="stylesheet" href="styles.css">
	<script type="text/javascript">
		function ajax(){
		var req=new XMLHttpRequest();
		req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
		document.getElementById('chat').innerHTML=req.responseText;

	}

	}
	req.open('GET','chat.php',true);
	req.send();


	}
	setInterval(function(){ajax()},1000);

	</script>
</head>
<body onload="ajax()">

<h1>AKAD Chat-Tool</h1>

	<div id="container">
	<div id="chat_box">
		<div id="chat">
		</div>

	</div>
		<form method="post" action="index.php">
			<input type="text" name="name" placeholder="Name">
			<textarea name="msg" placeholder="Nachricht hier eingeben"></textarea>
			<input type="submit" name="submit" value="Senden">

		</form>
<?php
if (isset($_POST['submit'])) {
	$name  = $_POST['name'];
	$msg   = $_POST['msg'];
	$query = "INSERT INTO chat (name,msg) values ('$name','$msg')";
	$run   = $conn->query($query);
	if ($run) {
		echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'>";
	}

}
?>
</div>

</body>
</html>
