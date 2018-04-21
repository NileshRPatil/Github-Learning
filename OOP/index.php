<?php 
spl_autoload_register(function ($class_name) {
    include $class_name . '_Class.php';
});

$objUser = new User(1);

$objFr = new Franchise();

$objFr->show_user_data($objUser);


?>