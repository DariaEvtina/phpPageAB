<?php
//LOGIN VORM KODIS KIRJUTA KASUTAJANIMEGA JA PAROOLIGA
session_start();
if(isset($_SESSION['tuvastamine'])){
    header('Location: puu_leht.php');
    exit();
}
if(!empty($_POST['login']) && !empty($_POST['pass'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];
    if($login=='admin' && $pass=='daria'){
        $_SESSION['tuvastamine']='niilithne';
        header('Location: puu_leht.php');
    }
}



?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<h1>Login vorm</h1>
    <form action="" method="post">
        Login:
        <input type="text" name="login" placeholder="kasutaja nimi">
        <br>
        Prool:
        <input type="password" name="pass">
        <div id="choice">
        <input type="submit" value="Logi sisse">
        </div>
    </form>
</body>
</html>