<?php
include "_doctor_permission.php";
include "_header.php";
include "_conn.php";

$doctor_id = $_SESSION['doctor_id'];

$sql = "
    SELECT
        p.name,
        a.date,
        a.time
    FROM
        appointments a
    JOIN
        patients p
    ON
        a.patient = p.id
    WHERE
        doctor = $doctor_id";

$res = $db->query($sql);
$res = $res->fetchAll();
?>
<table id="schedule">
    <tr>
        <th>نام</th>
        <th>تاریخ</th>
        <th>ساعت</th>
    </tr>
<?php foreach($res as $row) { ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['time'] ?></td>
    </tr>
<?php } ?>
</table>
<?php include "_footer.php"; ?>
