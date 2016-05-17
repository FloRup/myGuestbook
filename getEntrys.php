<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');


echo "retry: 1000\n"; // Wann es wiederversucht wird
// 'data: ' muss in jeder Zeile vorkommen!
//jede zeile muss mit \n beendet werden.
//die letzte zeile wird mit \n\n beendet

	$dbHost="127.0.0.1";
	$dbUsername="******";
	$dbPassword="***";
	$dbDatabase="***"  ;
	$dbTable="***";

	// Create connection
	$con=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbDatabase);
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "data: Fehler mit Db \n";
		
	}

	
	flush();
	
	
	$result = mysqli_query($con,"SELECT * FROM ".$dbTable." order by time DESC; ");
	
		while($row = mysqli_fetch_array($result))
        {
            echo "data: ".$row['name']."#".$row['comment']."# ".$row['time']."# \n";
			flush();
        }
	
	
	

echo "\n\n";
flush();
?>