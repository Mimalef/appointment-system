<?php
include "_patient_permission.php";
include "_header.php";
include "_conn.php";

if(isset($_GET['submit']))
{
    $patient = $_SESSION['patient_id'];
    $doctor = $_GET['doctor'];
    $time = $_GET ['time'];
    $date = $_GET ['date'];

    $sql = "
        INSERT INTO
            appointments
        VALUES(
            NULL,
            $patient,
            $doctor,
            '$date',
            $time)";

    $res = $db->query($sql);

    if($res)
    {
       echo "!رزرو با موفقیت ثبت شد";
    }
    else
    {
        echo "<p class='erro'>خطا</p>";
    }
}

$sql = "
    SELECT
        id,
        name,
        specialist
    FROM
        doctors";

$res = $db->query($sql);
$res = $res->fetchAll();
?>

<form>
    <select name="doctor">
        <?php foreach($res as $row) { ?>
            <option value="<?php echo $row ['id']?>">
                <?php echo $row['name'] . " (" . $row['specialist'] . ")"; ?>
            </option>
        <?php } ?>
    </select>
    <input name="date" placeholder="تاریخ">
    <input name="time" placeholder="زمان">
    <input type=submit name="submit" value="ثبت">
</form>

<?php include "_footer.php"; ?>
