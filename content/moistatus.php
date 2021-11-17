<h1>... Mõistatus</h1>
<a href="../../../../Downloads/phpALGUS/TEST.php">Tagasi.. Ülesanne</a>
<br>
<?php
echo "<h2>Matemaatika tehed - Mõistatus</h2>";
echo "<br>";
echo"<h3>Arva ära kaks arvu!</h3>";
$arv1=15;
$arv2=3;
//kahe arvude liitmine"+"
echo "Kui liidame kokku, vastus on ".($arv1+$arv2);
//jagamine "/"
echo "<br>";
echo "Kui esimene avr jagame teise arvuga, siis vastus on ". ($arv1/$arv2);
//esimene arv ruudus
echo "<br>";
echo "Esimene arv ruudus ".pow($arv1,2);
//lahutamine
echo "<br>";
echo "Kui teisest avr lahutada esimene arvuga, siis vastus on ".($arv2-$arv1);
//koorutis
echo "<br>";
echo "Kui kahe arvude korrutis, siis vastus on ".($arv1*$arv2);
echo"<br>";
echo "<a href='../../../../Downloads/phpALGUS/harjutused/vastus.php'> Õiged vastused</a>";
echo "<br>";
echo "<h1>Arva ära EESTI LINNANIMI</h1>";
$nimi="Tallinn";
//texti pikkus
echo "<br>Linnanimi pikkus: ".strlen($nimi);
//esimene taht
echo "<br>Linnanimi esimene täht: ".substr($nimi,0,1);
//oma
$vowels = array( "i", "n","T");
$onlyconsonants = str_replace($vowels, " _ ", $nimi);
echo "<br>Linnanimi vimane täht: ".substr($nimi,6,1);
echo "<br>Linnanimi on:..".$onlyconsonants;
?>

