<?php
 

    function belajar (){
        echo "Saya belajar php";
    }
    function luasPersegi ($p=5, $l=3){
        $luas = $p * $l;
        echo $luas;
    }
    function luas ($p=5, $l=3){
        $luas = $p*$l;
        return $luas;
    }
    function output(){
        return "saya belajar php";
    }
    echo luas (100,3) *5;
?>