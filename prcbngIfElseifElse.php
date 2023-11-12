<?php
    $harga_mobil = 990;

    if($harga_mobil > 900){
        $grade = "Sultan";
    }elseif($harga_mobil > 500){
        $grade = "B";
    }elseif($harga_mobil > 300){
        $grade = "C";
    }elseif($harga_mobil > 200){
        $grade = "D";
    }elseif($harga_mobil > 100){
        $grade = "E";
    }else{
        $grade = "F";
    }

    echo "Harga Mobil Anda : $harga_mobil Juta<br>";
    echo "Grade : $grade";
?>