<?php
$server="localhost";
$user="root";
$database="data_uas";
$password="";

$koneksi=mysqli_connect($server,$user,$password,$database);

if($koneksi){
    echo "koneksi sukses";
}else{
    echo "koneksi gagal";
}
 ?>