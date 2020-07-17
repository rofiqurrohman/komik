<?php
require "koneksi.php";

$nama       = $_POST['nm'];
$username   = $_POST['user'];
$email      = $_POST['email'];
$password   = md5($_POST['pass']) ;
$created_add = date('Y-m-d H:i:s');
$sql = "INSERT INTO daftar (id,nama,username,password,email,flag,created_add) 
VALUES ('','$nama','$username','$password','$email',1,'$created_add')" ; 
$query = mysqli_query($con,$sql)  ;

if ($query){
    echo "data berhasil disimpan" ;
	header('Location:./login.php');

}else{
    echo "gagal input data" ;
    echo mysqli_error() ;
}
?>