<?php
session_start();

include "_conn.php";
include "_header.php";

if(isset($_SESSION['doctor_id']))
{
    header('location: schedule.php');
}

if(isset($_GET['submit']))
{
    $id = $_GET['id'];
    $pass = $_GET['pass'];

    $sql = "SELECT id FROM doctors WHERE id='$id' AND pass='$pass'";
    $res = $db->query($sql);
    $res = $res->fetch();

    if($res)
    {
        $_SESSION["doctor_id"] = $res['id'];

        header('location: schedule.php');
    }
    else
    {
        echo "<p class='error'>نام کاربری یا کلمه عبور اشتبه است.</p>";
    }
}
?>

<form>
    <input name="id" type="text" placeholder="شناسه">
    <input name="pass" type="text" placeholder="گذرواژه" >
    <input name="submit" type="submit" value="ورود" >
</form>

<?php include "_footer.php"; ?>
