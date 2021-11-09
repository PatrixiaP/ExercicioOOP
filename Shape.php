<?php



class Shape{

	
	public $name;
	protected $width 
	protected $lenght;
	private $id;
	const $x;

	
   	public function __construct($width,$lenght) {

    	$this->width= $width;
    	$this->lenght= $lenght;
    	$this->x=1;

  	}

  	public function __get($id){

		return $this->id
    }

  	public function __set($id, $value){

		$this->id = $value;
	}

	 abstract function area( );

	}

	public function object($width,$lenght,$name,$id,$x) {

		$obj = new Shape();
    	$obj->width= $width;
    	$obj->lenght= $lenght;
    	$obj->x=$x;
    	$obj->name=$name;
    	$obj->id=$id;

    	return $obj;

  	}

?>
