<html>
<head>
	<meta http-equiv="refresh" content="3; db_connect.php">
</head>
<?
$id_new=$_POST['id_up'];
$user_new=$_POST['user_up'];
$pass_new=$_POST['pass_up'];

if (trim($id_new) and trim($user_new) and trim($pass_new))
{
    $connect = new mysqli("localhost", "root", "","s") or die("Невозможно установить соединение!".mysqli_error());
	//End connect
  $result = mysqli_query( $connect, "UPDATE userlist SET user='$user_new', password='$pass_new' WHERE id='$id_new'") or die("Oib,rf".mysqli_error());
  if ($result)
  {
    echo "<div align=center> <div class=success>Данные успешно обновлены</div> </div>";
  }
  else
  {
    echo "<div align=center> <div class=error>Ошибка при обновлении данных</div> </div>";
  }
	//Disconnect
}
?>