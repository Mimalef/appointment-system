<?php
include "_admin_permission.php";
include "_header.php";
include "_conn.php";

if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $spec = $_GET['spec'];
    $pass = $_GET['pass'];
    $user = $_GET['user'];
    $tele = $_GET['tele'];
    $addr = $_GET['addr'];

    $sql = "
        INSERT INTO doctors(
            name,
            specialist,
            password,
            username,
            telephone,
            address)
        VALUES (
            '$name',
            '$spec',
            '$pass',
            '$user',
            $tele,
            '$addr')";

    $res = $db->query($sql);

    if($res)
    {
        echo "<p>با موفقیت انجام شد.</p>";
    }
    else
    {
        echo "<p class='erro>خطا</p>";
    }
}
?>

<form>
    <input name="name" type="text" placeholder="نام">
    <input name="spec" type="text" placeholder="تخصص">
    <input name="pass" type="text" placeholder="گذرواژه">
    <input name="user" type="text" placeholder="نام کاربری">
    <input name="tele" type="text" placeholder="تلفن">
    <input name="addr" type="text" placeholder="آدرس">
    <input name="submit" type="submit"  value="ثبت">
</form>

<?php include "_footer.php"; ?>
