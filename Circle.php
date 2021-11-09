<?php

class Circle extends Shape

{

    protected $radius;
    

    public function __construct($radius,$x) {

        $this->radius= $radius;
        parent::_  _construct($x,3);
        
    }

    public function area( ){

        return 2 * pi( ) * $this->radius;

    }

    public function newObject($name,$id,$radius) {

        $newObj = new Circle();
        $newObj->radius= $radius;
        $newObj->name=_object->name;
        $newObj->name=_object->id;

        parent::_  _object()

        return $newObj;

    }
}

?>
