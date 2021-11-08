<?php

class Rectangle extends Shape

{
	public function __construct($x) {

        parent::_  _construct($x,2);
        
   	}

   	public function area( )

    {

        return $this->width * $this->lenght;

    }



}

?>