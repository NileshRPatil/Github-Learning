<?php
//connection 
try {
	$handler = new PDO('mysql:hostname=localhost;dbname=test','root','');
	$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}

//fetch all
$query = $handler->query("SELECT * FROM users");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
if(count($result))
{
	echo "<pre>";
	print_r ($result);
	echo "</pre>";	
}
else
{
	echo "No records is found";
}

?>
