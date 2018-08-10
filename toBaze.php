<?php
   $host = 'localhost'; // адрес сервера 
   $database = 'olx'; // имя базы данных
   $user = 'root'; // имя пользователя
   $password = ''; // пароль


   sleep(2); 
   echo "SHOW".$_POST["name"];

   $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
  
   $sql = "INSERT INTO siteNames (`ID`, `name`) VALUES (NULL, '".$_POST['name']."')";
   if (mysqli_query($link,$sql));  
  
?>
	