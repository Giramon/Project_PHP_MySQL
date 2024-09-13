<?php
    $user = 'root';
    $password = '';
    $database = 'test1';
    $servername='localhost';
    $mysqli = new mysqli($servername, $user, $password, $database);

    // Checking for connections
    if ($mysqli->connect_error) {
        die('Connect Error (' .
        $mysqli->connect_errno . ') '.
        $mysqli->connect_error);
    }

    // SQL query to select data from database
    $sql = " SELECT * FROM `tests3` ";
    $result = $mysqli->query($sql);
    $mysqli->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/adaptation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Zerkalo</title>
</head>
<body>
<header>
        <div class="header">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="navigation">
                <ul>
                    <li class="active"><a href="#">Главная</a></li>
                    <li><a href="pages/about.html">О нас</a></li>
                    <li><a href="pages/contact.html">Контакты</a></li>
                </ul>
            </div>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars" id="toggle_btn"></i>
            </div>
            <div class="dropdown_menu">
                <li class="active"><a href="#">Главная</a></li>
                <li><a href="pages/about.html">О нас</a></li>
                <li><a href="pages/contact.html">Контакты</a></li>
            </div>
            <div class="links">
                <ul>
                    <li><a href=""><img src="img/vk.png" alt="vk"></a></li>
                    <li><a href=""><img src="img/tg.png" alt="tg"></a></li>
                    <li><a href=""><img src="img/yt.png" alt="yt"></a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <?php 
				while($rows=$result->fetch_assoc())
				{
			?>
            <div class="elems">
                <a href="pages/info.html">
                    <div class="element">
                    <img src="./admin/admin_image/<?php echo $rows['filename'];?>" alt="photo" class="element_img">
                        <h2><?php echo $rows['name'];?></h2>
                        <h3><?php echo $rows['gender'];?></h3>
                        <h3><?php echo $rows['price'];?></h3>
                    </div>
                </a>
            </div>
			<?php
				}
			?>
        </div>
    </main>
    <footer>
        <div class="header">
            <div class="logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="navigation">
                <ul>
                    <li class="active"><a href="#">Главная</a></li>
                    <li><a href="pages/about.html">О нас</a></li>
                    <li><a href="pages/contact.html">Контакты</a></li>
                </ul>
            </div>
            <div class="links">
                <ul>
                    <li><a href="#"><img src="img/vk.png" alt="vk"></a></li>
                    <li><a href="#"><img src="img/tg.png" alt="tg"></a></li>
                    <li><a href="#"><img src="img/yt.png" alt="yt"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
