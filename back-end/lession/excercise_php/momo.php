<?php
class Rectangle{
    public  $height;
    public $width;


    public function __construct($height, $width){
        $this->height = $height;
        $this->width = $width;
    }

    public function getPremiter(){
        return 2*($this->height + $this->width);
    }

    public function getArea(){
        return $this->height + $this->width;
    }
}

$a = new Rectangle(100,300);
echo $a->getPremiter();
echo "<br>";
echo $a->getArea();
?>