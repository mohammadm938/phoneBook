<?php

function test($a){
    if($a>10){
        throw new Exception("عدد انتخاب شده بزرگ تر از 10 هست و شما نمیتونید این عدد را انتخاب کنید");
    }
}

try {
    test(4);
}catch (Exception $e){
    echo "متن ارور خطای شما : ".$e->getMessage();
}
