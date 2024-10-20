<?php
declare(strict_types=1);
session_start();
if(isset($_SESSION["username"])) {
    echo 'Добро пожаловать: ' . $_SESSION['username'] . '</br>';
    echo "<a href='http://localhost:8000/web/exit.php'> Выйти </a>";
} else {
    include 'web\index.html';
}

