<form action="" method="post" enctype ="multipart/from-data">
    pilih file gambar:

    <input type="file" name ="upload">
    <input type="submit" name="kirim" value="simpan">

</form>

<?php
    if(isset($_POST['kirim'])){
        $file=$_FILES['upload'];

        // var_dump($_FILES['upload']);


        foreach($files as $k => $v){
        echo $k,'='.$v;
        echo '<br>';
        }

        $name = $_FILES['upload']['nama'];        
        $temp = $_FILES['upload']['tmp_nama'];    
        
        echo $name.'='.$temp;

        move_uploaded_file($temp,'gambar/'.$name);

    }

?>