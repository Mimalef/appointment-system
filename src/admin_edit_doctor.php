<?php
if(isset($_GET['submit']))
{
    if($_GET['username'] && $_GET['password'])
    {        
        require_once('../conn.php');
        include "_header.php";
        include "_admin_permission.php";
        $query = $db->prepare("SELECT password FROM doctors WHERE id = ?");
        $query->execute(array($_GET['id']))
        or
        header('location: index.php?err=خطای پایگاه داده.');
        
        $data = $query->fetch();
        if($_GET['password'] != $data[0])
        {
            $query = $db->prepare("SELECT password FROM doctors WHERE password = ?");
			$query->execute(array($_GET['id']))
			or
			header('location: index.php?err=خطای پایگاه داده.');
			
			$data = $query->fetch();
			if($_GET['password'] == $data[0])
			{
				header('location: index.php?err=این رمز عبور قبلا ثبت شده است.');
			}
        }
		$query = $db->prepare('UPDATE doctors SET name = ?, username = ?,  password = ?, telephone = ?, spechialist = ?, address = ?WHERE id = ?');
		$query->execute(array(trim($_GET['name']),
				      (trim($_GET['username']),
				       trim($_GET['password']),
				       trim($_GET['telephone']),
				       trim($_GET['spechialist']),
				       trim($_GET['address']),
				      $_GET['id']))
		or
		header('location: index.php?err=خطای پایگاه داده.');
		header('location: index.php?msg=اطلاعات دکتر با موفقیت ویرایش شد.');
    }
    else
    {
        header('location: index.php?err=فیلد نام کاربری و رمز عبور نمی تواند خالی باشد.');
    }
}
include "_footer.php";
?>
    <form>
	<input name="id" type="hidden" value="<?php echo($_GET['id']) ?>"/>
	<input name="name" type="text" value="<?php echo($row[0]) ?>" placeholder="نام"/>
        <input name="username" type="text" value="<?php echo($row[1]) ?>" placeholder="نام کاربری"/>
        <input name="password" type="text" value="<?php echo($row[2]) ?>" placeholder="رمز عبور"/>
	<input name="telephone" type="text" value="<?php echo($row[3]) ?>" placeholder="تلفن"/>
	<input name="spechialist" type="text" value="<?php echo($row[4]) ?>" placeholder="تخصص"/>
	<input name="address" type="text" value="<?php echo($row[5]) ?>" placeholder="آدرس"/>
        <input name="submit" type="submit" class="button" value=""ثبت />
    </form>