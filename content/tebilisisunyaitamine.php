<?php
require('conf.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Andmetabeli sisu näitamine</title>
</head>
<body>
<h1>Admetabeli Loomad sisu näitamine</h1>
<?php
global $yhendus;
$kask=$yhendus->prepare("SELECT id, nimi, kirjeldus FROM loomad");
$kask->bind_result($id,$nimi,$kirjeldus);
$kask->execute();
echo "<table>";
echo "<tr>";
echo"<td>id</td>";
echo"<td>Lomaanimi</td>";
echo"<td>Kirjaldus</td>";
echo"</tr>";
//fetch()-извлечение данных из набора данных
while($kask->fetch()){
    echo"<tr>";
    echo"<td>$id</td>";
    echo"<td>$nimi</td>";
    echo"<td>$kirjeldus</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
