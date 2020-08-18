<?php

$obj = new Cmonster(1000) ;

echo "HP: ", $obj ->getHp(), "<br>";

$dmg = 77 ;
for($i = $obj->getHp() ; $i >= 0 ; $i-=$dmg)
{
    $obj->setHp($i) ;
    echo $obj->getHp(), "<br>";
}


// __set , __get
class Cmonster{

    private $_hp = 0;

    function __construct($hpValue = 0){
        echo "Monster Created.<br>";
        $this ->setHp($hpValue) ;
    }

    function __destruct(){
        echo "Monster destroyed." ;
    }

    public function makeNoisy(){
        echo "MakeNoise";
    }

    public function setHp($value){
        if ($value > 0)
            $this ->_hp = $value ;
    }

    public function getHp(){
        return $this ->_hp ;
    }
}

?>
