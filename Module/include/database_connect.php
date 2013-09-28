<?php
	$dbc = new mysqli('localhost','root','','redsun');
	if($dbc->connect_error){
		die($dbc->connect_error);
	}
	else{
		$dbc->query("set names utf8");
        //echo "Kết nối thành công";
	}
?>