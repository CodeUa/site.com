<?php require('..'.DIRECTORY_SEPARATOR.'init.php');
session_destroy();
header('Location: '.BASE_URL.'index.php');
?>