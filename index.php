<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>evtina php leht</title>
    <script src="js/legoScript.js"></script>
    <script src="js/puzzleScript.js"></script>

</head>
<body>
<?php
    include('header.php');
    include('navigation.php');
?>
<main>
    <?php
    if(isset($_GET['leht'])){
        include('content/'.$_GET['leht'].'.php');
    }
    else{
        include('content/_main.php');
    }
    ?>
</main>
<?php
    include('footer.php');
?>
<script src="js/calculatorScript.js"></script>
</body>
</html>
