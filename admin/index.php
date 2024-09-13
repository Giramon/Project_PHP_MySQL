<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sesion = $_SESSION['sesion'];
        $con=mysqli_connect('localhost','root','','fmv');
        $con->set_charset('utf8');
        if($con) {
            $sql="SELECT * FROM `autoriz` WHERE login = '$login' AND password = '$password'";
            $con->set_charset('utf8');
            $result = mysqli_query($con,$sql);
            if (mysqli_num_rows($result)==1) {
                echo "hello";
                $_SESSION['sesion']  = true;
                if ($_SESSION['sesion']){
                    header('location: ./add_li.php');
                }else echo 'Отсутсвует сессия';
            }
            else {
                echo "Отсутствует пользователь";
            }
        } else {
            die(mysqli_error($con));
        }
    }
?>