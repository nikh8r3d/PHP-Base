<?php
// блок описания функций
function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case '+':
            return $arg1+$arg2;
        case '-':
            return $arg1-$arg2;
        case '*':
            return $arg1*$arg2;
        case '/':
            return $arg1/$arg2;
    }
}
// тело программы
echo mathOperation(12, 2, "+");
?>