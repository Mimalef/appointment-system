<?php
session_start();

if(!isset($_SESSION['admin_id']))
{
    echo "شما اجازه دسترسی به این قسمت را ندارید.";
    include "_footer.php";
    die();
}

?>
