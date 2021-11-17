<h1>Kuupäeva funktsioonid</h1>
<ol>
    <li>time()</li>
    <li>date()</li>
    <li>mktime()</li>
    <li>strtotime()</li>
    <li>date_default_timezone_set()</li>
</ol>
<h1>Ülesanded</h1>
<section>
    <h2>Kuupäev ja aeg formaadis m/d/Y h:i</h2>
    <?php
    echo date('m/d/Y G:i');
    ?>
</section>
<section>
    <h2>Kasutaja vanus 16.11.2021</h2>
    <?php
    include('funktsionid.php');
    echo get_vanus();
    ?>
</section>
<section>
    <h2>Järgmine vaheaeg on 20.12.2021</h2>
    <?php
    echo getKooliVaheajani();
    ?>
    <h2> 2022 uue aastani on </h2>
    <?php
    //taname aasta
    $year=date('Y');
    $last_day=strtotime("last day of December");
    $datetd=strtotime("now");
    $diff_to_last_day=$last_day-$datetd;
    echo "<br>";
    echo $year." aasta lõpuni ".floor($diff_to_last_day/(60*60*24))." päeva";
    ?>
</section>
<section>
    <h2>Hooaja pilt</h2>
    <img src="<?php GEThooaeg()?>" alt="pilt">
</section>
