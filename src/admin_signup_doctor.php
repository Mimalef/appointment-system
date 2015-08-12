<?php
include "_conn.php";
include "_header.php";
include "_admin_permission.php";

if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $spec = $_GET['spec'];
    $pass = $_GET['pass'];

    $sql = "INSERT INTO doctors VALUES(NULL, '$name', '$spec', '$pass')";
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
    <input name="name" type="text" placeholder="نام" >
    <input name="spec" type="text" placeholder="تخصص" >
    <input name="pass" type="text" placeholder="گذرواژه" >
    <input name="submit" type="submit"  value="ثبت" >
</form>

<?php include "_footer.php"; ?>
