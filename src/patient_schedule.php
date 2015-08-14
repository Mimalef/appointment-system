<?php
include "_patient_permission.php";
include "_header.php";
include "_conn.php";

$patient_id = $_SESSION['patient_id'];

$sql = "
    SELECT
        d.name,
        a.date,
        a.time
    FROM
        appointments a
    JOIN
        doctors d
    ON
        a.doctor = d.id
    WHERE
        patient = $patient_id";

$res = $db->query($sql);
$res = $res->fetchAll();
?>
<table id="schedule">
    <tr>
        <th>نام پزشک</th>
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
