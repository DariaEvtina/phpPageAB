<?php
require('conf.php');
//функция котороя удаляет переменые из ад.стр
function clearsVarsExept($url, $varname){
    return strtok(basename($_SERVER['REQUEST_URI']),'?')."?$varname=".$_REQUEST[$varname];
}
//lissamine
GLOBAL $yhendus;
if(!empty($_REQUEST['loomanimi'])) {
    $kask = $yhendus->prepare('INSERT INTO loomad(nimi,kirjeldus) VALUES(?)');
    $kask->bind_param("s", $_REQUEST['loomanimi'], $_REQUEST['kirjeldus']);
    $kask->execute();
    header("Location: $_SERVER[PHP_SELF]");
    if(isset($_REQUEST['kustuta'])){
        $kask=$yhendus->prepare("DELETE FROM loomad WHERE id=?");
        $kask->bind_param("i",$_REQUEST['kustuta']);
        $kask->execute();
    }
}
//s-string
//$_REQUEST - запрос в текстовый ящик  input name="loomanimi"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Andmetabeli sisu näitamine</title>
</head>
<body>
<h1>Admetabeli Lissamine</h1>
<?php
global $yhendus;
$kask=$yhendus->prepare("SELECT id, nimi, kirjeldus FROM loomad");
$kask->bind_result($id,$nimi, $kirjeldus);
$kask->execute();
echo "<table>";
echo "<tr>";
echo"<td>id</td>";
echo"<td>Lomaanimi</td>";
echo"<td>Kirjaldus</td>";
echo"<td>tegevus</td>";
echo"</tr>";

//fetch()-извлечение данных из набора данных
while($kask->fetch()){
    echo"<tr>";
    echo"<td>$id</td>";
    echo"<td>$nimi</td>";
    echo"<td>$kirjeldus</td>";
    echo"<td><a href='$_SERVER[PHP_SELF]?kustuta=$id'>xxx</td>";
    echo "</tr>";
}
echo "</table>";
?>
<br><br>
<form action="" method="post">
    <label for="loomanimi">Loomanimi</label>
    <input type="text" name="loomanimi" id="loomanimi">
    <label for="kirjeldus">kirjeldus</label>
    <input type="text" name="kirjeldus" id="kirjeldus">
    <input type="submit" value="Lisa">
</form>
<?php
$yhendus->close();
?>
</body>
</html>