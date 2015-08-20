<?php
include "_admin_permission.php";
include "_header.php";
include "_conn.php";

$patient_id = $_GET['id'];

$sql = "
    DELETE FROM
        patients
    WHERE
        id=$patient_id";

$res = $db->query($sql);

if($res)
{
    header("location: admin_list_patients.php");
}
else
{
    echo "<p class='erro>خطا</p>";
}

include "_footer.php";
?>
