<?php
    require_once("database.php");
    $id=$_POST['id'];
    $xbarang = $_POST['barang'];

    $sql2=update("barang",$xbarang,$id);
    if ($sql2) {
        header("location:list_barang.php");
    }
    
?>