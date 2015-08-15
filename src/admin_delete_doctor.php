<?php
include "_admin_permission.php";
include "_header.php";
include "_conn.php";

$doctor_id = $_GET['id'];

if(isset($_GET['submit']))
{
    $sql = "
        DELETE FROM
            doctors
        WHERE
            id=$doctor_id";

    $res = $db->query($sql);

    if($res)
    {
        header("location: admin_list_doctors.php");
    }
    else
    {
        echo "<p class='erro>خطا</p>";
    }
}

include "_footer.php";
?>

