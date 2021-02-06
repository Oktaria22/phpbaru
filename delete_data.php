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
    echo "BERHASIL TERKONEKSI<br/>";
    $sql_delete_customer = "DELETE FROM tabel_customer WHERE id=1";

    if($connection->query($sql_delete_tabel_customer) === TRUE){
        echo "Data berhasil dihapus";
    }
    else{
        echo "data gagal dihapus:".$connection->error;
    }
}

?>