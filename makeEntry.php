<?php


	$dbHost="127.0.0.1";
	$dbUsername="florup";
	$dbPassword="176222891062";
	$dbDatabase="florup"  ;
	$dbTable="guestbook";

	// Create connection
	$con=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbDatabase);
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "data: Fehler mit Db \n";
		
	}

	$name=htmlspecialchars($_POST["name"]);
	$comment=htmlspecialchars($_POST["comment"]);


	$result = mysqli_query($con,"insert into ".$dbTable." (name,comment) values ('".$name."','".$comment."'); ");

















?>