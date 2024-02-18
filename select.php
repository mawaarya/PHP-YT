<div style="margin:auto; width:900px;">

<?php
    require_once "../function.php";

    $sql = "SELECT idkategori FROM dblkategori";
    $result =mysqli_query($koneksi,$sql);
    $jumlahdata =mysqli_num_rows($result);

   
    
    $banyak = 3;

    $halaman = ceil ($jumlahdata/ $banyak);

    for ($i; $i <=$halaman ; $i++){
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '$nbsp $nbsp $nbsp';
    }

    echo '<br> <br>';

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        $mulai = ($p*$banyak)-$banyak;
        //  6 =(3*3)-3
    }else {
        $mulai=0;
    }
  

    $sql = "SELECT idkategori FROM dblkategori LIMIT $mulai,$banyak";

    $result = mysqli_querry($koneksi,$sql);

    $var_dump($result);

    $jumlah = mysqli_num_rows($result);
    // echo '<br>';
    // echo $jumlah;

    echo'
    <table border="1px">
    <tr>
        <th>no</th>
        <th>kategori</th>
    </tr>
    ';

    $no=$mulai+1;
    if ($jumlah >0){
        while ($row = sqli_fetch_assoc($result)){
         echo'<tr>';
        echo '<td>'.$no++.'</td>';
        echo '<td>'.$row ['kategori'].'</td>';
        echo '</tr>';
        }

    }

    echo '</table>'

?>



    <h1>belajar</h1>
</div>