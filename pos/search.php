<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dbpos');
$namaid = $_GET['namaid'];
$query = mysqli_query($koneksi, "select * from as_prdid where namaid='$namaid'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'namasub'      =>  $mahasiswa['namasub'],);
 echo json_encode($data);
?>