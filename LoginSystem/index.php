<?php

session_start();
header('Location: '. (isset($_SESSION['user']) ? 'user_info' : 'login') . '.php');
?>