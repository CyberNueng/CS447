<?php
class PdoDB extends PDO
{

	function __construct()
	{
		
	}
	function getDatabase() 
	{
		$hostname = 'testeiei.cink6njocl4b.ap-southeast-1.rds.amazonaws.com';
		$dbName = 'testeiei';
		$dbusername = 'root';
		$dbpassword = '123456798';

		try 
			{
			$db = new PDO("mysql:host=$hostname;dbname=$dbName; charset=utf8", $dbusername, $dbpassword);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}
}
?>