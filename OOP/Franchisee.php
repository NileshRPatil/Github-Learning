<?php
/**
* Franchisee class
*/
class Franchise extends CRUD
{
	public $objUser;
	function __construct()
	{
		parent::__construct();
	}

	public function show_user_data($obj)
	{
		// $this->objUser = $obj;
		// echo $this->objUser->uFirstName;

		echo "<pre>";
		print_r ($obj);
		echo "</pre>";
	}
}
?>