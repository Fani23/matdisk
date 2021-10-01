<?php

if(isset($_POST['encrypt'])){
    $id = $_POST['id'];
    $pesan = $_POST['pesan'];
    echo "Plaintext ID = ".$id."</br>";
    echo "plaintext PESAN ".$pesan."</br>";

    $enkripsi_id = base64_encode($id);
    $enkripsi_pesan = base64_encode($pesan);
    echo "enkripsi id = ".$enkripsi_id."</br>";
    echo "enkripsi nama = ".$enkripsi_pesan;

}else{
    $id = $_POST['id'];
    $pesan = $_POST['pesan'];
    echo "ID = ".$id."</br>";
    echo "PESAN ".$pesan."</br>";

    $deskripsi_id = base64_decode($id);
    $deskripsi_pesan = base64_decode($pesan);
    echo "Dekripsi ID = ".$deskripsi_id."</br>";
    echo "Dekripsi Nama".$deskripsi_pesan;
}
?>