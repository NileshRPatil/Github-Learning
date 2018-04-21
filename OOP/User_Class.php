<?php 
/**
* 
*/
class User extends CRUD
{
	public $uFirstName,$uLastName, $uPhoneNo;
	private $table_name = 'users';
	
    function __construct( $id='' )
    {
        parent::__construct(); 

        if($id != '')
        {
        	
        	$row = $this->getRows(
        						$this->table_name, 
        						array( 
        								'where' => array('userid'=>$id), 
        								'return_type'=>'single'
        							)
        						);

        	foreach ($row as $key => $value) {

        		$this->__set($key, $value);

        	}
        }  
    }

    public function __get($property) {
	    if (property_exists($this, $property)) {
	      return $this->$property;
	    }
	}

	public function __set($property, $value) {
	    if (property_exists($this, $property)) {
	      $this->$property = $value;
	    }

	    return $this;
	}

}
?>
