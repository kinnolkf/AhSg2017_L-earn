<?php

	$method = $_GET['method'];
	
	
	switch ($method) {
    case "GetAlertCount":
        GetAlertCount();
        break;
    case "UpdateAlertStatus":
        UpdateAlertStatus();
        break;
    case "InsertAlertRequest":
		$key = $_GET['key'];
        InsertAlertRequest($key);
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
	function GetAlertCount()
	{
		$dbName = 'learn';
		$dbUser = 'root';
		$dbPassword = '';
		$dsn = 'mysql:dbname='.$dbName.';host=localhost';

		try 
		{
			$db = new PDO($dsn, $dbUser, $dbPassword);
			$sql = " SELECT count(*) FROM `confrence_request` WHERE isaccepted = 0;";

			$nRows = $db->query($sql)->fetchColumn(); 
			if($nRows)
			{
				echo $nRows;	
			}else {
				echo 0;
			}

		} 
		catch (PDOException $e) 
		{
			echo -1;
		}
	}
	
	function UpdateAlertStatus()
	{
		$dbName = 'learn';
		$dbUser = 'root';
		$dbPassword = '';
		$dsn = 'mysql:dbname='.$dbName.';host=localhost';

		try 
		{
			$db = new PDO($dsn, $dbUser, $dbPassword);
			$sql = "UPDATE `confrence_request` SET isaccepted =1;";
			$db->query($sql);
			$db->close();
		} 
		catch (PDOException $e) 
		{
			echo -1;
		}
	}
	
	function InsertAlertRequest($requestKey)
	{
		$dbName = 'learn';
		$dbUser = 'root';
		$dbPassword = '';
		$dsn = 'mysql:dbname='.$dbName.';host=localhost';

		try 
		{
			$db = new PDO($dsn, $dbUser, $dbPassword);
			$sql = "INSERT INTO `confrence_request` (requested_by, topic) VALUES('student', '".$requestKey."');";
			$db->query($sql);

		} 
		catch (PDOException $e) 
		{
			echo -1;
		}
	}
	
	
?>