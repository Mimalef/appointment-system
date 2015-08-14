<?php
include "_admin_permission.php";
include "_header.php";
include "_conn.php";

$patient_id = $_GET['id'];

if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $tele = $_GET['tele'];
    $email = $_GET['email'];

    $sql = "
        UPDATE
            patients
        SET
            name='$name',
            username='$user',
            password='$password',
            telephone=$tele,
            email=$email
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
}

$sql = "
    SELECT
        id,
        name,
        username,
        password,
        email,
        telephone
    FROM
        patients
    WHERE
        id = $patient_id";

$res = $db->query($sql);
$res = $res->fetch();
?>

<form>
    <input name="id" type="hidden" value="<?php echo $res['id'] ?>" >
    <input name="name" type="text" value="<?php echo $res['name'] ?>" placeholder="نام" >
    <input name="user" type="text" value="<?php echo $res['username'] ?>" placeholder="نام کاربری" >
    <input name="pass" type="text" value="<?php echo $res['password'] ?>" placeholder="گذرواژه" >
    <input name="email" type="text" value="<?php echo $res['email'] ?>" placeholder="ایمیل" >
    <input name="tele" type="text" value="<?php echo $res['telephone'] ?>" placeholder="تلفن" >
    <input name="submit" type="submit"  value="ویراش" >
</form>

<?php include "_footer.php"; ?>
