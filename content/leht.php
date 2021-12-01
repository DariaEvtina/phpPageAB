<?php
require('conflaps.php');
session_start();
if(!isset($_SESSION['tuvastamine'])){
    header('Location: loginAB.php');
    exit();
}
global $yhendus;
//lisamine INSERT INTO
if(isset($_REQUEST['lapsvorm'])){
    $kask=$yhendus->prepare('INSERT INTO laps(nimi, pilt) VALUES (?, ?)');
// "s"- string
// $_REQUEST['loomanimi']- запрос в текстовый ящик input name="loomanimi"
    $kask->bind_param("ss", $_REQUEST['lapsnimi'], $_REQUEST['pilt']);
    $kask->execute();
// изменяет адресную строку
//$_SERVER[PHP_SELF] - до имени файла
    header("Location: $_SERVER[PHP_SELF]");
}
//kustutsmine
if(isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare("DELETE FROM laps WHERE id=?");
    $kask->bind_param("i",$_REQUEST['kustuta']);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <meta charset="UTF-8">
    <title>Puuleht</title>
</head>
<body>
<div>
    <form action="logout.php" method="post">
        <p><?=$_SESSION['kasutaja']?> on sisse loginud</p>
        <input type="submit" value="Logi valja" name="logout">
    </form>
</div>
<div class="leftcolumn">
    <h2>LAPS</h2>
    <?php
    //näitame puunimed
    global $yhendus;
    $kask=$yhendus->prepare("SELECT id, nimi FROM laps");
    $kask->bind_result($id, $nimi);
    $kask->execute();
    echo "<ul>";
    while($kask->fetch()){
        echo "<li><a href='$_SERVER[PHP_SELF]?id=$id'>".$nimi."</a></li>";
    }
    echo "</ul>";
    if($_SESSION['onAdmin']==1) {
        echo "<a href='$_SERVER[PHP_SELF]?lisa=jah'>Lisa...</a>";
    }
    if(isset($_REQUEST['lisa']) && $_SESSION['onAdmin']==1){
        ?>
        <form action="" method="post">
            <input type="hidden" name="lapsvorm" value="jah">
            <label for="lapsnimi">Lapsnimi</label>
            <input type="text" name="lapsnimi" id="lapsnimi">
            <br>
            <label for="pilt">PildiLink</label>
            <textarea name="pilt" id="pilt"></textarea>
            <br>
            <input type="submit" value="Lisa">
        </form>
        <?php
    }

    ?>

</div>
<div class="rightcolumn">
    <h3>pilt</h3>
    <?php
    //näitame puunimed
    global $yhendus;
    if(isset($_REQUEST['id'])){
        $kask=$yhendus->prepare("SELECT id, nimi, pilt FROM laps WHERE id=?");
        $kask->bind_param('i', $_REQUEST['id']);
        $kask->bind_result($id, $nimi, $pilt);
        $kask->execute();
        echo "<strong>".$nimi."</strong>";
        echo "<br>";
        echo "<img src='$pilt' alt='pilt'>";
        echo "<br>";
        if($_SESSION['onAdmin']==1){
                    echo "<a href ='$_SERVER[PHP_SELF]?kustuta=$id'>kustuta</a>";
        }

        }
    else {
            echo "Viga";
    }

    $yhendus->close();
    ?>
</div>

</body>
</html>
