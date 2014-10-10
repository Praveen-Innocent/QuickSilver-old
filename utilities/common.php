<?php 
function _e($string) {
	
	if(is_array($string)) 
		{ print_r($string); }
	else 
		{ echo $string; }
	}
	
function redirect($location) {
	header("Location: $location");
	//js fallback
	print '<script language="javascript">window.location="'.$location.'"</script>';	
}

function randomString($length){
		$valid_chars="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		$random_string = "";
		$num_valid_chars = strlen($valid_chars);
		for ($i = 0; $i < $length; $i++){
			$random_pick = mt_rand(1, $num_valid_chars);
			$random_char = $valid_chars[$random_pick-1];
			$random_string .= $random_char;
		}
		return $random_string;
	} 
function encrypt($string, $key)
    {
        $result = '';
        for($i = 0; $i < strlen($string); $i++) {
            $char    = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key)) - 1, 1);
            $char    = chr(ord($char) + ord($keychar));
            $result .= $char;
        }
        return base64_encode($result);
    }

function decrypt($string, $key)
    {
        $result = '';
        $string = base64_decode($string);
        for($i = 0; $i < strlen($string); $i++) {
            $char    = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key)) - 1, 1);
            $char    = chr(ord($char) - ord($keychar));
            $result .= $char;
        }
        return $result;
    }
	
function getIPAddress() {

		if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) :
			$ipAddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
		else :
			$ipAddress = isset($_SERVER["HTTP_CLIENT_IP"]) ? $_SERVER["HTTP_CLIENT_IP"] : $_SERVER["REMOTE_ADDR"];
		endif;

		return $ipAddress;
	}
	
function makeUrlFriendly($input)
    {
        $output = preg_replace("/\s+/" , "_" , trim($input));
        $output = preg_replace("/\W+/" , "" , $output);
        $output = preg_replace("/_/" , "-" , $output);
        return strtolower($output);
}

function convertLinks($text)
{
        $text = preg_replace('/(((f|ht){1}tps?:\/\/)[-a-zA-Z0-9@:;%_\+.~#?&\/\/=]+)/', '<a href="\\1" target="_blank">\\1</a>', $text);
        $text = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:;%_\+.~#?&\/\/=]+)/', '\\1<a href="http://\\2" target="_blank">\\2</a>', $text);
        $text = preg_replace('/(([0-9a-zA-Z\.\-\_]+)@([0-9a-zA-Z\.\-\_]+)\.([0-9a-zA-Z\.\-\_]+))/', '<a href="mailto:$1">$1</a>', $text);
        return $text;
}

function isIE9Browser()
    {

        $container  = strtolower($_SERVER['HTTP_USER_AGENT']);
        $useragents = array('msie 9.0');

        foreach ($useragents as $useragent) {
            if (strstr($container, $useragent)) {
                return TRUE;
            }
        }
        return FALSE;
    }

function isIE10Browser()
    {

        $container  = strtolower($_SERVER['HTTP_USER_AGENT']);
        $useragents = array('msie 10.0');

        foreach ($useragents as $useragent) {
            if (strstr($container, $useragent)) {
                return TRUE;
            }
        }
        return FALSE;
    }

function isBelowIEversion($version=8)
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $versionRegex = "/msie [2-". ($version-1) ."]/i";
        return (preg_match($versionRegex, $userAgent) && !preg_match('/Opera/i',$userAgent));
    }

function cleanStringContent($title)
    {
        $find    = array('ã¼', 'ã', 'ã–', 'ã¨', 'ã©', 'ã¤', 'ã¶', 'Ã¤');
        $replace = array('u', 'U', 'U', 'e', 'e', 'ä', 'a', 'A');
        $title   = mb_convert_encoding($title, "UTF-8");
        $title   = str_replace($find, $replace, $title);
        //replace non ASCII characters with NULL
        $title = preg_replace('/[^(\x20-\x7F)]*/', NULL, $title);
        return $title;
    }
	
?>