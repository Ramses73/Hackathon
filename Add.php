<?php
include("DB.php");
session_start();
$q = new DB();
$q->PutData('test','test','','','','','','',456);
if(!empty($_SESSION['name']))
    {
        if(isset($_POST['name']) && isset($_POST['text']) )
        {
            //echo $_POST['name'];
            $q = new DB();
            $q->PutData($_POST['name'],$_POST['text'],$_POST['videosrc'],$_POST['picbackground'],$_POST["pic1"],$_POST["pic2"],$_POST["pic3"],$_POST["pic4"],$_POST["date"]);
        }
    }
else{
    header ('Location: Admin-LogIn.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <style type="text/css">body{padding-top:40px;padding-bottom:40px;background-color:#f5f5f5;}.form-signin{max-width:600px;padding:19px 29px 29px;margin:0 auto 20px;background-color:#fff;border:1px solid #e5e5e5;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:0 1px 2px rgba(0,0,0,.05);box-shadow:0 1px 2px rgba(0,0,0,.05);}.form-signin .form-signin-heading,.form-signin .checkbox{margin-bottom:10px;}.form-signin input[type="text"],.form-signin input[type="password"]{font-size:16px;height:auto;margin-bottom:15px;padding:7px 9px;}</style>
</head>
<body>
<h1 align="center">Add new Item to Universe timeline</h1>

<div class="container">
    <form method="post" align="center" class="form-signin">
        <form role="form">
            <div class="form-group">
                <label >Введите заголовок темы</label>
                <input type="text" name="name" class="form-control"  placeholder="Введите адрес электронной почты">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Введите текст темы</label>
                <textarea class="form-control" name="text" ></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ссылка на видеоресурс</label>
                <input type="text" name="videosrc" class="form-control" id="exampleInputEmail1" placeholder="Введите адрес электронной почты">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ссылка на изображение заднего фона</label>
                <input type="text" name="picbackground" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ссылка на изображение темы №1</label>
                <input type="text" name="pic1" class="form-control" id="exampleInputEmail1" placeholder="Введите адрес электронной почты">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ссылка на изображение темы №2</label>
                <input type="text" name="pic2" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ссылка на изображение темы №3</label>
                <input type="text" name="pic3" class="form-control" id="exampleInputEmail1" placeholder="Введите адрес электронной почты">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ссылка на изображение темы №4</label>
                <input type="text" name="pic4" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ссылка на изображение темы №4</label>
                <input type="text" name="pic4" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Дата события</label>
                <input type="text" name="date" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <button type="submit" class="btn btn-default">Принять</button>
        </form>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>