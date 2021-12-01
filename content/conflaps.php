<?php
$servernimi='localhost';
$kasutajanimi='dariaevtina';
$parool='12345parool';
$admebaasinimi='lasteaed';
$yhendus=new mysqli($servernimi,$kasutajanimi,$parool,$admebaasinimi);
$yhendus->set_charset('utf8');
/*create table loomad(
	id int primary key AUTO_INCREMENT,
    nimi varchar(50),
    kirjeldus text
);
insert into loomad(nimi,kirjeldus)
values('koer','hea pois');
select * from loomad*/

?>