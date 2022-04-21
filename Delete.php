<html>
<head>

</head>
<?
$user_y=$_POST['del_user'];
//Connect to DB
$connect = new mysqli("localhost", "root", "","s") or die("Невозможно установить соединение!".mysqli_error());
//End connect
$result = mysqli_query($connect, "DELETE FROM userlist WHERE id=$user_y");
if ($result==true)
{
	echo "<div align=center> <div class=success>Данные успешно удалены</div> </div>";
}
else
{
	echo "<div align=center> <div class=error>Ошибка при удалении данных</div> </div>";
}
?> 

</html>
