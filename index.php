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
    echo "Database berhasil dikoneksikan";
}


echo "<br/>";
//MENAMPILKAN SELURUH DATA PESAWAT
if(!$connection->connect_error){
    $sql_customer= "SELECT * FROM tabel_customer";
    $result_customer = $connection->query($sql_customer);

    //MENGECEK APAKAH HASIL DATANYA ADA 
    if($result_customer->num_rows>0){
        while($row = $result_customer->fetch_assoc()){
            echo $row['id']."-".$row['nama_customer']."-".$row['alamat'];
        }
    }else{
        echo "tidak ada data yang ditampilkan<br/>s";
    }
}





?>