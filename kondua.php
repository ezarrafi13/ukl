<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'absen';

   $connn = mysqli_connect('localhost','root','','absen');
   
   if($connn){
    //echo "Koneksi berhasil";
   }

   mysqli_select_db($connn, $db);
?>