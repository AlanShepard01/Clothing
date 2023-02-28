<?php
include "system/init.php";

// Выход
    unset($_SESSION['logged_user']);
    echo '<script>location.replace("/");</script>';



?>