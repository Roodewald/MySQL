<html>
<head>
	<meta http-equiv="refresh" content="3; db_connect.php">
</head>

<?php
$id_add=$_POST['add_id'];
$user_add=$_POST['add_user'];
$pass_add=$_POST['add_pass'];

if (trim($id_add) and trim($user_add) and trim($pass_add))
{
    $connect = new mysqli("localhost", "root", "", "s")
        or die("Could not connect".mysql_error());
    echo "Connected successfully";
	$result = mysqli_query($connect, "INSERT INTO userlist(id,user,password) VALUES('$id_add', '$user_add', '$pass_add')");
	if ($result==true)
	{
		echo "<div align=center> <div class=success>Данные успешно внесены</div> </div>";
}
	else
	{
		echo "<div align=center> <div class=error>Ошибка при добавлении данных</div> </div>";
	}
	mysqli_close($connect);
}
else
{
	echo "<div align=center> <div class=error>Заполните все поля и повторите ввод</div> </div>";
}
?> 

</html>
