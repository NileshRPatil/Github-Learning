<?php
//connection 
echo "<pre>";
print_r (PDO::getAvailableDrivers());
echo "</pre>";
try {
	$handler = new PDO('mysql:hostname=localhost;dbname=test','root','');
	$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

//prepared statement
$query = "INSERT INTO `users`(`userName`, `userMobile`, `userCreated`) VALUES (:userName,:userMobile,:userCreated)";
$stmt = $handler->prepare($query);

// $stmt->execute(array(
// 	':userName'	=>'Abc',
// 	':userMobile' =>'1234567890',
// 	'userCreated' => date('Y-m-d H:i:s')
// ));

// echo $handler->lastInsertId();



?>
