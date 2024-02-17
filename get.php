<form action="" method="get">

    nama:
    <input type="text" name="nama">

    alamat:
    <input type="text" name="alamat">

    <input type="sumbit" naame="kirim" value="simpan">

</form>

<?php

    if (isset($_GET['kirim'])){

    $nama =$_GET['nama'];
    $alamat=$_GET['alamat']

    echo $nama;
    echo '<br>';
    echo $alamt;
    
}

?>