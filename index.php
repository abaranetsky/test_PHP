<?php

include "test.inc.php";
class Test {
    public $name;
    public $age;

    /**
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function say($w){
        echo  "{$this->name} sayd $w\n". __CLASS__;
    }

}
$cat = new Test("Vasea", 30);
echo "<br>",$cat->age,"<br>", $cat->name;
$cat->say("Bliati");


