<?php
include "_conn.php";
include "_header.php";
include "_admin_permission.php";

$sql = "
    SELECT
        id,
        name,
        specialist,
        password,
        username,
        telephone,
        address
    FROM
        doctors";

$res = $db->query($sql);
$res = $res->fetchAll();
?>

<table>
    <tr>
        <th>نام</th>
        <th>نام کاربری</th>
        <th>گذرواژه</th>
        <th>تخصص</th>
        <th>تلفن</th>
        <th>آدرس</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($res as $row) { ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['specialist'] ?></td>
            <td><?php echo $row['telephone'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><a href="admin_edit_doctor.php?id=<?php echo $row['id'] ?>">ویرایش</a></td>
            <td><a href="admin_delete_doctor.php?id=<?php echo $row['id'] ?>">حذف</a></td>
        </tr>
    <?php }  ?>
</table>

<?php include "_footer.php"; ?>
