<?php
//talve koolivaheniajani
function getKooliVaheajani(){
    $today=date('d.m.Y');
    $talv=date('20.12.2021');
    $dif=date_diff(date_create($today), date_create($talv));
    echo '<br>';
    echo 'Talve Koolivaheaajani on '.$dif->format('%a').' päeva';
}
//valuse leidmine funktsioon
function get_vanus(){
    echo '<form method="post" action="">';
    echo 'palun sinu sünnipäev:';
    echo '<input type="date" name="age">';
    echo '<input type="submit" name="arvuta" value="arvuda vanus">';
    echo '</form>';
    if (isset($_POST['arvuta'])){
        $synd=$_POST['age'];
        $diff=date_diff(date_create($synd), date_create('16.11.21'));
        echo '<br>';
        echo $diff->format('%y').'aastat vana';
    }
}
function GEThooaeg(){
    //vastavalt tänasse kuupäeva naitab hooaja pilti
    //piltide massive
    $pildit=array(
        "sygis"=>"pildit/sygis.png",
        "talv"=>"pildit/talv.png",
        "kevad"=>"pildit/kevad.png",
        "suvi"=>"pildit/suvi.png"
    );
    $paev=date("z");
    //sygis
    $sygis_algus=date("z", strtotime("September 1"));
    $sygis_loop=date("z", strtotime("November 30"));
    //talv
    $talv_algus=date("z", strtotime("December 1"));
    $talv_loop=date("z", strtotime("February 28"));
    //kevad
    $kevad_algus=date("z", strtotime("Mart 1"));
    $kevad_loop=date("z", strtotime("May 31"));
    //suvi
    if($paev>=$sygis_algus && $paev<=$sygis_loop):
        $hoooaeg="sygis";
    elseif($paev>=$talv_algus && $paev<=$talv_loop):
        $hoooaeg="talv";
    elseif($paev>=$kevad_algus && $paev<=$kevad_loop):
        $hoooaeg="kevad";
    else:
        $hoooaeg="suvi";
    endif;
    $hooaegpilt=$pildit[$hoooaeg];
    echo $hooaegpilt;
}
?>


