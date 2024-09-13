<?php
    session_start();
    if ($_SESSION['sesion']){
        echo 'Сессия запущена успешно';
    }else
    if(session_destroy()) {
        header("location: ./autoreg.html");
    };

    if (isset($_POST['reset'])) {
        if(session_destroy()) {
            header("location: ./autoreg.html");
        };
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/admins.css">
    <title>Admins</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input class="reset" type="submit" name="reset" value="Сбросить сессию">
        </div>
    </form>
    <div class="form_container">
            <form method="POST" action="./accept.php" enctype="multipart/form-data">
                <div class="inputs">
                    <input type="file" name="uploadfile">
                </div>
                <div class="inputs">
                    <input class="inp" type="text" name="name" placeholder="Название">
                </div>
                <div class="inputs">
                    <input class="inp" type="text" name="gender" placeholder="Пол">
                </div>
                <div class="inputs">
                    <input class="inp" type="number" name="price" placeholder="Цена">
                </div>
                <div class="inputs">
                    <input class="sub" type="submit" name="upload">
                </div>
            </form>
        </div>
    </main>
</body>
</html>