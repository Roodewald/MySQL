<?php
$connect = new mysqli("localhost", "root", "","s") or die("Невозможно установить соединение!".mysqli_error());
//создать запрос
$sql = "SELECT * FROM userlist";
$result = mysqli_query($connect, $sql) or die(mysqli_error());
$result_Teams = mysqli_query($connect, "SELECT * FROM `teams`") or die(mysqli_error());
//Отобразить данные из БД на web-странице в виде таблицы
$table = "<table border=2>";
$table.="<tr>";
       $table .= "<td>№</td>";
       $table .= "<td>Пользователь</td>";
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

$table2 = "<table border=2>";
$table2.="<tr>";
       $table2 .= "<td>№</td>";
       $table2 .= "<td>Команда</td>";
       $table2 .= "<td>Место</td>";
       $table2 .= "<td>Игрок 1</td>";
       $table2 .= "<td>Игрок 2</td>";
       $table2 .= "<td>Игрок 3</td>";
       $table2 .= "<td>Игрок 4</td>";
       $table2 .= "<td>Игрок 5</td>";
       $table2 .= "</tr>";
while (list($id,$T_name,$T_Rang,$Id_Player1,$Id_Player2,$Id_Player3,$Id_Player4,$Id_Player5) = mysqli_fetch_array($result_Teams))
     {
       $table2 .= "<tr>";
       $table2 .= "<td>".$id."</td>";
       $table2 .= "<td>".$T_name."</td>";
       $table2 .= "<td>".$T_Rang."</td>";
       $table2 .= "<td>".mysqli_query($connect,"SELECT `user` FROM `userlist` WHERE id=$Id_Player1")->fetch_array()[0] ?? ''."</td>";
       $table2 .= "<td>".mysqli_query($connect,"SELECT `user` FROM `userlist` WHERE id=$Id_Player2")->fetch_array()[0] ?? ''."</td>";
       $table2 .= "<td>".mysqli_query($connect,"SELECT `user` FROM `userlist` WHERE id=$Id_Player3")->fetch_array()[0] ?? ''."</td>";
       $table2 .= "<td>".mysqli_query($connect,"SELECT `user` FROM `userlist` WHERE id=$Id_Player4")->fetch_array()[0] ?? ''."</td>";
       $table2 .= "<td>".mysqli_query($connect,"SELECT `user` FROM `userlist` WHERE id=$Id_Player5")->fetch_array()[0] ?? ''."</td>";
       $table2 .= "<td style='height:100px;'></td>"; 
       $table2 .= "</tr>";
      }
$table2 .= "</table> ";
echo $table2;

?> 
