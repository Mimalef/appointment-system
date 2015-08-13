<?php
session_start();

include "conn.php";
include "_header.php";
include "_admin_permission";
if(!isset($_SESSION['doctor_id']))
{
    header('location: index.php');
}

$doctor_id = $_SESSION['doctor_id'];

$sql = "SELECT * FROM doctors WHERE doctor = $doctor_id";
$res = $db->query($sql);
$res = $res->fetchAll();
?>
<table id="doctor">
    <tr>
        <th>نام</th>
        <th>رمز عبور</th>
        <th>تلفن</th>
        <th>تخصص</th>
        <th>ادرس</th>

    </tr>
<?php foreach($res as $row) { ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['pass'] ?></td>
        <td><?php echo $row['tel'] ?></td>
        <td><?php echo $row['spechialist'] ?></td>
        <td><?php echo $row['address'] ?></td>

    </tr>
<?php } ?>
</table>
<?php include "_footer.php"; ?>
