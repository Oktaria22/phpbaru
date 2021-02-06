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
    echo "Berhasil terkoneksi<br/>";
    $sql_update_tabel_customer = "UPDATE tabel_customer
    SET nama_customer='Novi'
    WHERE alamat='punti_kayu'";

    if($connection->query($sql_update_tabel_customer) === TRUE){
        echo "Data berhasil diperbaharui";
    }
    else{
        echo "data gagal dimasukkan:".$connection->error;
    }
    ///////////////////////
    $sql_update_tabel_customer = "UPDATE tabel_customer
    SET nama_customer='wiwik'
    WHERE alamat='pedamaran'";

    if($connection->query($sql_update_tabel_customer) === TRUE){
        echo "Data berhasil diperbaharui";
    }
    else{
        echo "data gagal dimasukkan:".$connection->error;
    }


}












?>