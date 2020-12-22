<?php

class Search
{

	private $url = "";
	private $ch = null;
	private $res = [];

	function __construct($url) {
		$this->url = $url;
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);  
	}
	
	function __destruct() {
		var_dump($this->res);
   		curl_close($this->ch); 
	}
		
	function start($a, $b) {
		curl_setopt($this->ch, CURLOPT_URL, "$this->url/$a");
		$text = curl_exec($this->ch);
		if ($b == 0) {
			$match = array();
			$url = preg_match_all('/(?<=href=\").+(?=\")/', $text, $match);
			$match = $match[0];
			foreach ($match as $key =>$val){
				if ($val == "README") {
					$this->start("$a/$val", 1);
				}else if ($val == "../" || $val == "./") {
					
				} else {
					$this->start("$a/$val", 0);
				}
		}
		} else {
			if (in_array($text, $this->res)) {
    				$this->res[$text] = 1;
			} else {
			  	$this->res[$text] = $this->res[$text] + 1;
			}
		}
	}
}


$r = new Search($argv[1]);
$r->start("", 0);
