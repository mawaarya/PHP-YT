<?php
    require_once "../function.php";

    $sql = "SELECT * FROM dblkategori";

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

    $no=0;
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


    
    1
    <td>kategori</td>
    </tr>

    <tr>
    <td>2</td>
    <td>kategori</td>
    </tr>

    <tr>
    <td>3</td>
    <td>kategori</td>
    </tr>





</table>