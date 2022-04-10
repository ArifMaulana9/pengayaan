<?php
error_reporting(0);
define('admurl', 'http://localhost/latihanukk/public');
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "pengayaantolol");
// include("../koneksi.php");
if (empty($_SESSION['username'])) {
  include('views/admin_portofolio/login.php');
} else {
  include("views/admin_portofolio/admin.php");
}
