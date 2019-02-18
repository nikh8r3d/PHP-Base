<?php
// блок описания функций
function summ ($a, $b){
    return $a+$b;
}

function diff ($a, $b){
    return $a-$b;
}

function comp ($a, $b){
    return $a*$b;
}

function div ($a, $b){
    return $a/$b;
}

function breakStr(){
    echo '<br>';
}
// тело программы
$a=1;
$b=2;

echo summ($a,$b);
breakStr();
echo diff($a,$b);
breakStr();
echo comp($a,$b);
breakStr();
echo div($a,$b);

?>