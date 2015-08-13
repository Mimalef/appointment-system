<?php
include "_header.php";
include "_conn.php";

if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $tel = $_GET['tel'];

    $sql = "
        INSERT INTO
            patients
        VALUES(
            NULL,
            '$name',
            '$tel')";
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
    <input name="tel" type="text" placeholder="تلفن" >
    <input name="submit" type="submit"  value="ثبت" >
</form>

<?php include "_footer.php"; ?>
