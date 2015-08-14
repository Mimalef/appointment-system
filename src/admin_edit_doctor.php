<?php
include "_admin_permission.php";
include "_header.php";
include "_conn.php";

$doctor_id = $_GET['id'];

if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $spec = $_GET['spec'];
    $pass = $_GET['pass'];
    $user = $_GET['user'];
    $tele = $_GET['tele'];
    $addr = $_GET['addr'];

    $sql = "
        UPDATE
            doctors
        SET
            name='$name',
            username='$user',
            password='$pass',
            specialist='$spec',
            telephone=$tele,
            address='$addr'
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
        doctors
    WHERE
        id=$doctor_id";";

$res = $db->query($sql);
$res = $res->fetch();
?>

<form>
    <input name="id" type="hidden" value="<?php echo $res['id'] ?>" >
    <input name="name" type="text" value="<?php echo $res['name'] ?>" placeholder="نام">
    <input name="spec" type="text" value="<?php echo $res['specialist'] ?>" placeholder="تخصص">
    <input name="pass" type="text" value="<?php echo $res['password'] ?>" placeholder="گذرواژه">
    <input name="user" type="text" value="<?php echo $res['username'] ?>" placeholder="نام کاربری">
    <input name="tele" type="text" value="<?php echo $res['telephone'] ?>" placeholder="تلفن">
    <input name="addr" type="text" value="<?php echo $res['address'] ?>" placeholder="آدرس">
    <input name="submit" type="submit"  value="ویراش" >
</form>

<?php include "_footer.php"; ?>
