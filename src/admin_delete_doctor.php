<?php
    include "_conn.php";
    include "_header.php";
    include "_admin_permission.php";
    if(isset($_GET['id']))
{
    $doctordelete = $_GET['id'];
    $sql = "DELETE From doctors Where id = $doctordelete";
    $res = $db->query($sql);
    header('location: admin_list_doctors.php');}
?>
