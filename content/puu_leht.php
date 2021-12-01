<?php
require('conf.php');
session_start();
if(!isset($_SESSION['tuvastamine'])){
    header('Location: loginAB.php');
    exit();
}
global $yhendus;
//lisamine INSERT INTO
if(isset($_REQUEST['puuvorm'])){
    $kask=$yhendus->prepare('INSERT INTO puud(nimipuu, pilt) VALUES (?, ?)');
// "s"- string
// $_REQUEST['loomanimi']- запрос в текстовый ящик input name="loomanimi"
    $kask->bind_param("ss", $_REQUEST['puunimi'], $_REQUEST['pilt']);
    $kask->execute();
// изменяет адресную строку
//$_SERVER[PHP_SELF] - до имени файла
    header("Location: $_SERVER[PHP_SELF]");
}
//kustutsmine
if(isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare("DELETE FROM puud WHERE id=?");
    $kask->bind_param("i",$_REQUEST['kustuta']);
    $kask->execute();
}
//puu muutmine
if(isset($_REQUEST['muuda'])){
    $kask=$yhendus->prepare("UPDATE FROM puud SET nimipuu=?,pilt=? WHERE id=?");
    $kask->bind_param("ssi", $_REQUEST['nimi'], $_REQUEST['pilt'], $_REQUEST['muudamis']);
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
    <h2>Puud</h2>
    <?php
    //näitame puunimed
    global $yhendus;
    $kask=$yhendus->prepare("SELECT id, nimipuu FROM puud");
    $kask->bind_result($id, $nimi);
    $kask->execute();
    echo "<ul>";
    while($kask->fetch()){
        echo "<li><a href='$_SERVER[PHP_SELF]?id=$id'>".$nimi."</a></li>";
    }
    echo "</ul>";
    echo "<a href='$_SERVER[PHP_SELF]?lisa=jah'>Lisa...</a>";
    if(isSet($_REQUEST['lisa'])){
        ?>
        <form action="" method="post">
            <input type="hidden" name="puuvorm" value="jah">
            <label for="puunimi">Puunimi</label>
            <input type="text" name="puunimi" id="puunimi">
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
    <h3>Puupilt</h3>
    <?php
    //näitame puunimed
    global $yhendus;
    if(isset($_REQUEST['id'])){
        $kask=$yhendus->prepare("SELECT id, nimipuu, pilt FROM puud WHERE id=?");
        $kask->bind_param('i', $_REQUEST['id']);
        $kask->bind_result($id, $nimi, $pilt);
        $kask->execute();

        if($kask->fetch()){
            if(isset($_REQUEST['muutmine']) && $_SESSION['onAdmin']==1){
                echo"
                <form action=''>
                <h2>Puu admene muutamine</h2>
                Puunimi:
                <input type='hidden' name='muudamis' value='$id'>
                <input type='text' name='nimi' id='nimi' value='$nimi'>
                <br>
                Pilt(peab olema pildilingi aadress
                <textarea name='pilt' id='pilt' value='$pilt' cols='20'></textarea>
                <br>
                <input type='submit' value='muuda'>
                </form>
                ";

            }
            else{
                echo "<strong>".$nimi."</strong>";
                echo "<br>";
                echo "<img src='$pilt' alt='pilt'>";
                echo "<br>";
                if($_SESSION['onAdmin']==1){
                    echo "<a href ='$_SERVER[PHP_SELF]?kustuta=$id'>kustuta</a>";
                    echo"<br>";
                    echo "<a href ='$_SERVER[PHP_SELF]?id=$id&muutmine=jah'>muuda</a>";
                }
            }
        }
        else {
            echo "Viga";
        }
    }
    $yhendus->close();
    ?>
</div>

</body>
</html>
