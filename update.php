<?php
    require_once "../function.php"; 

    $sql = "SELECT * FROM dblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql);

    $row = mysqli_fetch_assoc($result);

    echo $row ['kategori'];
    // $kategori ='Es janggelan';
    // $id = 31;
    // $sql =  "UPDATE dblkategori SET kategori ='$kategori' WHERE idkategori = $id";
    // $result = mysqli_query($koneksi, $sql);

    // echo $sql;

?>


<form action="" method="post">
    kategori :
    <input type="text" name="kategori" value = "<?php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
    if (isset($_POST['simpan'])){
        $kategori = $_POST['kategori'];

         $sql =  "UPDATE dblkategori SET kategori ='$kategori' WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql);
    echo $sql;  
    header ('location:http://localhost/PHPYT/restoran/kategori/select.php');
    }


?>
