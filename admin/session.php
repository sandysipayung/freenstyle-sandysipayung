<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
require_once '../koneksi.php';
$cek_user = mysql_query("select * from user where email='" . $_SESSION['freenstyle'] . "' and type='administrator' and status='active'");
if (mysql_num_rows($cek_user) != 1) {
    header("location:logout.php");
}