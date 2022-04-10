<?php
if ($_GET['menu'] == "home") {
  include("views/admin_portofolio/home.php");
} else if ($_GET['menu'] == 'about') {
  include("views/admin_portofolio/about.php");
} else if ($_GET['menu'] == 'project') {
  include("views/admin_portofolio/project.php");
} else if ($_GET['menu'] == 'contact') {
  include("views/admin_portofolio/contact.php");
} else if ($_GET['menu'] == 'tambah-project') {
  include("views/admin_portofolio/tambah-project.php");
} else if ($_GET['menu'] == 'ubah-project') {
  include("views/admin_portofolio/ubah-project.php");
} else if ($_GET['menu'] == 'logout') {
  session_destroy();
  header('Location: ../index.php');
}
