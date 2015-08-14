
<?php
    include "_conn.php";
    include "_header.php";
    include "_admin_permission.php";
    $sql = "SELECT * FROM doctors";
    $res = $db->query($sql);
    $res = $res->fetchAll();

?>
<form>
<table id="doctor">
    <tr>
        <th>نام</th>
        <th>نام کاربری</th>
        <th>رمز عبور</th>
        <th>تلفن</th>
        <th>تخصص</th>
        <th>ادرس</th>
    </tr>

<?php foreach($res as $row) { ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td><?php echo $row['telephone'] ?></td>
        <td><?php echo $row['specialist'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td> <a href = "admin_delete_doctor.php?id=<?php echo $row['id'] ?>">حذف</a></td>
        <td> <a href = "admin_edit_doctor.php?id=<?php echo $row['id'] ?>">ویرایش</a></td>
    </tr>
<?php }  ?>
</table>
</form>
<?php include "_footer.php"; ?>
