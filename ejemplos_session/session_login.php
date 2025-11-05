<?php 

session_start();

$_SESSION['user'] = 'admin';

// header('Location:session_sitio.php');
echo "<a href='session_sitio.php'> IR AL SITIO</a>";