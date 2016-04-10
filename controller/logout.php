<?php
session_start();
$_SESSION['login']=null;
echo 'Zostałeś wylogowany.';
header('Location: ../index.php');

