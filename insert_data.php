<?php  
$usarname = "root" ;
$password = "" ;
$server_name = "localhost" ;
$database_name = "tabel_customer" ;


$connection = new mysqli($server_name, $usarname, $password, $database_name);

if($connection->connect_error){
    echo "Error, konfigurasi DB salah";
}
else{
    echo "Database berhasil dikoneksikan<br/>";
    $sql_insert_customer = "INSERT INTO tabel_customer (
        nama_customer, nomor_ktp, alamat, jenis_kelamin, tanggal_lahir)
        VALUE('novi', '1234612346',  
        'punti_kayu', 'perempuan', '2002-07-15)";
    if($connection->query($sql_insert_customer) === TRUE){
        echo "data berhasil dimasukkan";
    }
    else{
        echo "data gagal dimasukkan:".$connection->error;
    
    }
}


?>
