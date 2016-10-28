<?php

/* 
 *Mohamad Henromi 
 *belajar pertama pemprograman php  
 */

$server="localhost";
$user="root";
$password="";
$database="lesson";
$koneksi= mysqli_connect($server, $user, $password, $database);

if($koneksi){
   echo"berhasil terkoneksi";
}else{ 
    echo "gagal ke koneksi";
}