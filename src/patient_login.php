<?php
session_start();

include "_conn.php";
include "_header.php";

if(isset($_SESSION['patient_id']))
{
    header('location: appointment.php');
}

if(isset($_GET['submit']))
{
    $id = $_GET['id'];
    $tel = $_GET['tel'];

    $sql = "SELECT id FROM patients WHERE id='$id' AND telephone='$tel'";
    $res = $db->query($sql);
    $res = $res->fetch();

    if($res)
    {
        $_SESSION["patient_id"] = $res['id'];

        header('location: appointment.php');
    }
    else
    {
        echo "<p class='erro>خطا</p>";
    }
}
?>

<form>
    <input name="id" type="text" placeholder="شناسه">
    <input name="tel" type="text" placeholder="تلفن">
    <input name="submit" type="submit" value="ورود" >
    <p>یا از <a href="patient_signup.php">اینجا</a> ثبت نام کنید.</p>
</form>

<?php include "_footer.php"; ?>
