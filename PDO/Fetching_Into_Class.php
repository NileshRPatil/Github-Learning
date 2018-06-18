<?php

/**
 *This is script to show fetch record into Class 
 */

try {
	$handler = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}


class Users 
{
	public $userId,$userName,$userMobile,$userUpdated,$entry;

	function __construct()
	{
		$this->entry = "{$this->userName} has mobile no. {$this->userMobile}";
	}
}

$query = $handler->query("Select * FROM users");
$query->setFetchMode(PDO::FETCH_CLASS,'Users');
while ($r = $query->fetch()) {
	echo "<br>".$r->entry;
}
	
