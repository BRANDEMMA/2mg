<?php
	$link =mysql_connect("localhost","useradmin","123456789");
	if($link){
		mysql_select_db("sorteo",$link);
	}
?>