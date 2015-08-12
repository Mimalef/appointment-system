<?php
session_start();

if(!isset($_SESSION['patient_id']))
{
    echo "شما اجازه دسترسی به این قسمت را ندارید.";
    include "_footer.php";
    die();
}

?>
