<?php
include "_admin_permission.php";
include "_header.php";
include "_conn.php";

$admin_id = $_SESSION['admin_id'];

if(isset($_GET['submit']))
{
    $user = $_GET['user'];
    $pass = $_GET['pass'];

    $sql = "
        UPDATE
            admins
        SET
            user='$user',
            pass='$pass'
        WHERE
            id=$admin_id";

    $res = $db->query($sql);

    if($res)
    {
        echo "<p>با موفقیت انجام شد.</p>";
    }
    else
    {
        echo "<p class='erro'>خطا</p>";
    }
}

$sql = "
    SELECT
        user,
        pass
    FROM
        admins
    WHERE
        id = $admin_id";

$res = $db->query($sql);
$res = $res->fetch();
?>

<form>
    <input name="user" type="text" value="<?php echo $res['user'] ?>" placeholder="نام کاربری" >
    <input name="pass" type="text" value="<?php echo $res['pass'] ?>" placeholder="گذرواژه" >
    <input name="submit" type="submit"  value="ویراش" >
</form>

<?php include "_footer.php"; ?>
