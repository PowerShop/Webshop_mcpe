<?php

class Curl{
    private $cookie;
    function __construct() {
        $this->cookie = dirname(dirname(__FILE__)).'/cookie.txt';
    }

    public function login($url, $data){
        $fp = fopen($this->cookie, "w");
        fclose($fp);

        $login = curl_init();
		curl_setopt($login, CURLOPT_SSLVERSION, 6);
        curl_setopt($login, CURLOPT_COOKIEJAR, $this->cookie);
        curl_setopt($login, CURLOPT_COOKIEFILE, $this->cookie);
        curl_setopt($login, CURLOPT_TIMEOUT, 40000);
        curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($login, CURLOPT_URL, $url);
        curl_setopt($login, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36");
        curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($login, CURLOPT_POST, TRUE);
        curl_setopt($login, CURLOPT_POSTFIELDS, $data);
		curl_setopt($login, CURLOPT_POSTFIELDS, $data);
		$curl_result = curl_exec($login);
        if($curl_result === FALSE){
            die(curl_error($login));
        }else{
            if(strpos($curl_result, 'Whoops') !== false){
    			return false;
			}else{
				return $curl_result;
			}
        }       
    }                  

    public function grab_page($site){
        $ch = curl_init();
		curl_setopt($ch, CURLOPT_SSLVERSION, 6);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36");
        curl_setopt($ch, CURLOPT_TIMEOUT, 40);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookie);
        curl_setopt($ch, CURLOPT_URL, $site);
		$curl_result = curl_exec($ch);
        if($curl_result === FALSE){
            die(curl_error($ch));
        }else{
			if(strpos($curl_result, 'Whoops') !== false){
    			return false;
			}else{
				return $curl_result;
			}
        }
    }
}
?>
