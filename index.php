<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML>
<html lang="de">
<head>
<meta charset="utf-8" />
<title>myGuestbook</title>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="style.css" />
<meta name="generator" content="http://switchtohtml5.com">
</head>
<body>

	
	<div id=myGuestbook>
		<div id=eingabe>
			<form name="myForm"  >
				Name:<br> <input type="text" name="name"><br><br>
				Kommentar:<br> <input type="text" name="comment"><br>
			<INPUT TYPE="button" NAME="button" Value="Click" onClick="makeEntry()">
			<br>
			<br>
			<br>
			
			</form>
		
		</div>
		<h2>Einträge:<br></h2>
		<div id='ausgabe'></div>
	</div>


<script src="script.js"></script>



</body>
</html>
