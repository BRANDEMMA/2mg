<?php
	$link =mysql_connect("localhost","2mg_admin_sorteo","sorteo2mg2016");
	if($link){
		mysql_select_db("2mg_sorteo",$link);
	}
?>