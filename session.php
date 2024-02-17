<nav>
    <ul>
        <li><a href="?menu=isi"></a>isi</li>
        <li><a href="?menu=hapus"></a>hapus</li>
        <li><a href="?destroy"></a>destroy</li>
    </ul>
</nav>






<?php

    session_start();

    var_dump ($_SESSION);

    echo '<br>';

    if(isset($_GET['menu'])){
        $menu $_GET['menu'];

        echo $menu;

        switch ($variable){
            case'isi';
            isiSession();
            break;

            case'hapus';
            unset ($_SESSION['user']);
            break;

            case'destroy';
            session_destroy();
        break;
            default:

            break;

    }
    }


    //var_dump $_SESSION

        function isiSession(){
            $_SESSION['user'] ='mail';
            $_SESSION['nama'] ='mail bin mail';
            $_SESSION['alamat'] = 'malang;'
        }



?>
