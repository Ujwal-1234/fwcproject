<?php
session_start();
if(isset($_POST['logout'])||isset($_GET['logout'])){
    session_destroy();
    header('Location: ../../');
    exit();
}
?>