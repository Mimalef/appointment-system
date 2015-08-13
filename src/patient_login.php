<?php
session_start();

include "_header.php";
include "_conn.php";

if(isset($_SESSION['patient_id']))
{
    header('location: patient_panel.php');
}

if(isset($_GET['submit']))
{
    $user = $_GET['user'];
    $pass = $_GET['pass'];

    $sql = "
        SELECT
            id
        FROM
            patients
        WHERE
            username='$user'
        AND
            password='$pass'";

    $res = $db->query($sql);
    $res = $res->fetch();

    if($res)
    {
        $_SESSION["patient_id"] = $res['id'];

        header('location: patient_panel.php');
    }
    else
    {
        echo "<p class='erro>خطا</p>";
    }
}
?>

<form>
    <input name="user" type="text" placeholder="شناسه">
    <input name="pass" type="text" placeholder="تلفن">
    <input name="submit" type="submit" value="ورود" >
    <p>یا از <a href="patient_signup.php">اینجا</a> ثبت نام کنید.</p>
</form>

<?php include "_footer.php"; ?>
