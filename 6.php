<?php
// блок описания функций
function power($val, $pow){
    if ($pow>0){
        return $val*power($val, $pow-1); //вариант при положительном показателе
    } elseif($pow<0){
        return power(1/$val,-$pow); //вариант при отрицатиельном показателе
    } else{
        return 1; //любое число при степени 0 даёт 1
    }
}
//тело программы
echo power(2,10);
?>