<?php
     //$hari=1;

    //  switch ($hari){
    //     case 1;
    //     echo 'minggu';
    //     break;

    //     case 2;
    //     echo 'senin';
    //     break;

    //     case 3;
    //     echo 'rabu';
    //     break;

    //     default;
    //     echo 'Hari belum di buat ';
    //     break;
    //  }

    $pilihan = 'tambah';
    
    switch ($pilihan){
        case 'tambah';
        echo 'anda memilih tambah';
        break;

        case 'ubah';
        echo 'anda memilih ubah';
        break;
        case 'hapus';
        echo 'anda memilih hapus';
        break;

        default;
        echo 'eror';
        break;
    }
?>