<?php 
 $host = "localhost";
 $user = "root";
 $pass = "";
 $name = "customer";
 $koneksi = mysqli_connect($host, $user, $pass, $name);
 $sql = "Select * from pelanggan";
 $query = mysqli_query($koneksi, $sql);
 $rows=array();
 while($data = mysqli_fetch_assoc($query)){
 $rows[] = $data;
 $rows[] = "<br>";
 }
 echo json_encode($rows);
?>