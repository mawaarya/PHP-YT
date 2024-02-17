<?php

    //array dimensi 

    $nama = array ("mail","susanti","fizi","jarjit",100,2.5);

    var_dump($nama);

    echo "<br>";

    echo $nama[5];

    echo "<br>";
    
    // for ($i=0; $i 1; <6; $i++)
    //     // echo $i;
    //     echo $nama[$i]. "<br>";

    // foreach ($nama as $k){
    //     echo $k. "<br>";
    // }

    // $nama = array(
    //     "mail" => "Surabaya",
    //     "fizi" => "malang",
    //     "ijat" => "buduran",
    //     "susanti" => "sidokepung"
    // );

    $nama ["joni"] = "Surabaya";
    $nama ["fizi"] = "malang";
    $nama ["ijat"] = "buduran";
    $nama ["susanti"] = "sidokepung";
    $nama ["upin"] = "indonesia";

        var_dump ($nama);

        echo "<br>";

    //    echo $nama ['mail'];


        foreach ($nama as $key => $value){
            echo $key. "=>".$value; 
            echo "<br>";
        }
   
    //array asosiatif
?>