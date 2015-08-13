<?php
if(isset($_GET['submit']))
{
    
        require_once('../conn.php');
	include "_header.php";
        include"_admin_permission.php";

        $patient_id = $_SESSION['patient_id'];
        $sql = "SELECT * FROM patients  WHERE patient = $patient_id";
        $res = $db->query($sql);
        $res = $res->fetchAll();
?>
<table id="patient">
    <tr>
        <th>نام</th>
        <th>نام کاربری</th>
        <th>رمز عبور</th>
        <th>تلفن</th>
        <th>ایمیل</th>
        <th>ادرس</th>

    </tr>
<?php foreach($res as $row) { ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td><?php echo $row['telephone'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['address'] ?></td>
    </tr>
<?php } ?>
</table>
<?php
$id = $_GET('patient_id');
		$del = "DELETE * from patients WHERE id=".$id;
		header('location: index.php?msg=بیمار حذف شد.');

include "_footer.php";
?>
