<h1 align='center'>Заполните свободные поля, изменив необходимую запись</h1>
<body>
<form method='post' action="update.php">
<table border='0' align='center'>
<tr>
  <td>Номер:<br/><input type="edit" name="id_up"><br/></td>
</tr>
<tr>
  <td>Имя:<br/><input type="edit" name="user_up"><br/></td>
</tr>
<tr>
  <td>пароль:<br/><input type="edit" name="pass_up"><br/></td>
</tr>

<tr>
  <td><input type="submit" value="Изменить"></td>
</tr>  
</form>
<br> 
<br>
<br>
</body>
<?
$connect = new mysqli("localhost", "root", "","s") or die("Невозможно установить соединение!".mysqli_error());

$sql = "SELECT * FROM userlist";
$result = mysqli_query($connect, $sql) or die(mysql_error());
$table = "<table>";
$table .= "<tr>";
       $table .= "<td>Номер</td>";
       $table .= "<td>Имя</td>";
       $table .= "<td>Пароль</td>";
              $table .= "</tr>";
while (list($id,$user,$pass) = mysqli_fetch_array($result))
     {
       $table .= "<tr>";
       $table .= "<td>".$id."</td>";
       $table .= "<td>".$user."</td>";
       $table .= "<td>".$pass."</td>";
              $table .= "<td style='height:100px;'></td>"; 
       $table .= "</tr>";
      }
$table .= "</table> ";
echo $table;
?>
