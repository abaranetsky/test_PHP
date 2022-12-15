<?php
echo "MR BENN <br> I am second file <br>";
class Sort {
public $bob = array(5, 6, 10, -2, 80, 35);

public function visualBob(){
    foreach ($this->bob as $value){
            echo $value . "<br>";
    }
}

public function sort()  {
    $arr = $this->bob;
    for ($i = 0; $i < count($arr)-1; $i++){
        for ($j = count($arr)-1; $j > $i; $j--){
            if ($arr[$j] < $arr[$j-1]){
                $temp_var = $arr[$j-1];
                $arr[$j-1] = $arr[$j];
                $arr[$j] = $temp_var;
            }
        }
    }
    echo var_dump($arr);
}

}
$test = new Sort();
$test->visualBob();
$test->sort();




