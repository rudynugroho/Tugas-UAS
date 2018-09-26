<?php
require "config/db_connect.php";
require "config/function.libs.php";
?>
<html>
  <head>
    <title>Web Ebith News</title>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <div class="container">
      <header>
        <img src="asset/images/test2.png">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="pages.php?id=1">Hubungi Kami</a></li>
          <li><a href="pages.php?id=2">Tentang Kami</a></li>
        </ul>
        <form action="cari.php" class="cari" method="get">
          <input type="text" name="cari" placeholder="Cari">
          <button type="submit">Cari</button>
        </form>
      </header>
      <div class="clear"></div>
      <div class="content">
