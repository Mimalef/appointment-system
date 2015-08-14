<?php
include "_header.php";
include "_conn.php";

if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $tele = $_GET['tele'];
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $email = $_GET['email'];

    $sql = "
        INSERT INTO patients(
            name,
            username,
            password,
            email,
            telephone)
        VALUES(
            '$name',
            '$user',
            '$pass',
            '$email',
            '$tele')";
    $res = $db->query($sql);

    if($res)
    {
        header('location: patient_login.php');
    }
    else
    {
        echo "<p class='erro>خطا</p>";
    }
}
?>

<form>
    <input name="name" type="text" placeholder="نام" >
    <input name="user" type="text" placeholder="نام کاربری" >
    <input name="pass" type="text" placeholder="گذرواژه" >
    <input name="email" type="text" placeholder="ایمیل" >
    <input name="tele" type="text" placeholder="تلفن" >
    <input name="submit" type="submit"  value="ثبت" >
</form>

<?php include "_footer.php"; ?>
