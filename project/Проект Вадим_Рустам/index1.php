<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Топ 10</title>
    <link rel="stylesheet" href="pilaba.css">
</head>
<body class = "home">
     <div id="header">
         <header>
             <nav class="top-menu">
                 <a class="navbar-logo" href=""><img src=img/logo.jpg></a>
                 <ul class="menu-main">
                     <li><a href="pilaba.html">Главная</a></li>
                     <li><a href="">Рубрики</a></li>
                     <li><form action="" method="get">
                         <input type="text" placeholder="Искать здесь...">
                         <button type="submit"></button>
                     </form>
                     </li>
                     <li class="qwe"><a href="pilaba2.html">Регистрация</a></li>
                 </ul>
             </nav>
         </header>
     </div>
     <div id="container" class="col-full">
         <div id="main" class="col-left">
             <div class="form-wrap">
                 <?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "name";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}

					$sql = "INSERT INTO register_data (name,password,email) VALUES  ('".$_POST["name"]."', '".$_POST["password"]."','".$_POST["email"]."')";;

					if ($conn->query($sql) == TRUE) {
					echo "Пользователь ".$_POST["name"]." успешно зарегистрирован</br>";
					echo "<a href='pilaba.html'>На главную</a>"; ;
					} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				?>

                 </form>
             </div>
         </div>
         <div id="sidebar" class="col-right">

             <div id="popular" class="sidebar-menu">Популярное</div>
             <div id="New-tops" class="sidebar-menu">Новые топы</div>
             <div id="interes-categ" class="sidebar-menu">Интересные рубрики</div>

         </div>

     </div>
     <div id="footer">
         <div id="about-us" class="menu-footer">О нас </div>
         <div id="contact" class="menu-footer">Контактная информация</div>

     </div>





</body>
