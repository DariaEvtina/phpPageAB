<?php
require('conf.php');
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>puu leht</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<div class="leftcolumn">
    <h1>Puud</h1>
    <?php
    global $yhendus;
    //näitamine puunimed
    $kask=$yhendus->prepare("SELECT id, nimipuu FROM puud");
    $kask->bind_result($id,$nimi);
    $kask->execute();
    while($kask->fetch()) {
        echo "<li>".$nimi."</li>";
    }
    ?>
</div>
<div class="rightcolumn">
    <h3>Sia tuleb pilt, tee klick puunimi peale</h3>
</div>
</body>
</html
