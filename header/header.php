<?php
$url = "http://".$argv[1]."/?page=e43ad1fdc54babe674da7c7b8f0127bde61de3fbe01def7d00f151c2fcca6d1c";
$referer = $argv[2];
$ua = $argv[3];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $referer);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
$res = curl_exec($ch); 

function grep($linet, $str) {
  $line = explode(PHP_EOL,$linet);   
 for ($s = 0;  count($line) > $s; $s++) {
     if (strpos($line[$s], $str) !== false) {
            return $line[$s];
        }
    }
    return -1;
}
echo  grep($res, "flag");
curl_close($ch);
?>
