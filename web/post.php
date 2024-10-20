<?php
declare(strict_types=1);
session_start();

$userName = $_POST["user_name"];
$_SESSION['username'] = $userName;

header('Location: http://localhost:8000/web/index.php');



