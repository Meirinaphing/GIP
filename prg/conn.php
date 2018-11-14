<?php
error_reporting(0);
$conn = new PDO("mysql:host=localhost;dbname=spk","root","");


function toangka($rp){
		return floatval(preg_replace("/,*|[^0-9]/", '', $rp));
	}

?>