<?php
declare(strict_types=1);
session_start();
session_unset();
header('Location: http://localhost:8000/web/index.php');