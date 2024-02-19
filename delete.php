<?php

    require_once "../function.php";

    // $id=2;
    $sql = "DELETE FROM dblkategori WHERE idkategori =$id";

    $result = mysqli_query ($koneksi,$sql); 




   header ("http://localhost/PHPYT/restoran/kategori/select.php");

?>