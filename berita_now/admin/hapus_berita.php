<?php

include "layout/header.php";

  if(!$_SESSION['login']){
    header('location:login.php');
  }

$id = $_GET['id'];

$query = mysql_query("delete from berita where id_berita = '$id'",$con);

if($query){
  header('location:list_berita.php');
}

?>
