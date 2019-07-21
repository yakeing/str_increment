<?php
/**
  * String Increment Class
  * @author http://weibo.com/yakeing
  * @version 3.0
  * StrIncrement::NewStr(string, Hex)
 */
namespace str_increment;
class StrIncrement{
	/**
	 * Increment string
	 * @param string  $string [ Raw string ]
	 * @param options $Hex [ letters ] alphabetic character / [ lowercase ] lLower case letters / [ uppercase ] uppercase letter / [16] hxe / [10]
	*/
	public static function NewStr($string, $Hex=62){
		if(!ctype_alnum($string) && !is_int($string)) return false;
		static $instance = null;
		if(is_null($instance)){
			$instance = new self();
		}
		switch($Hex){
			case 'letters':
				if(!ctype_alpha($string)) return false;
				$start = 10;
				$length = 52;
			break;
			case 'lowercase':
				if(!ctype_lower($string)) return false;
				$start = 10;
				$length = 26;
			break;
			case 'uppercase':
				if(!ctype_upper($string)) return false;
				$start = 36;
				$length = 26;
			break;
			default:
				$start = 0;
				$length = ($Hex > 62)?62:$Hex;
			break;
		}
		$Table = $instance->CapacityTable($start, $length);
		$first = substr($Table, 0, 1);
		$last = substr($Table, -1);
		$i = $len = strlen($string)-1;
		$ArrStr = str_split($string);
		while(true){
			$str = (string)$ArrStr[$i];
			if($last == $str){
				$ArrStr[$i] = $first;
				--$i;
				if(0 > $i) break;
			}else{
				$NewStr = $instance->Calculation($str, $Table);
				$ArrStr[$i] = $NewStr;
				break;
			}
		}
		return implode('', $ArrStr);
	}

	//Increasing
	private function Calculation($str, $Table){
		$StrLast = strstr($Table, $str);
		if($StrLast == false){
			return substr($Table, 0, 1);
		}
		return substr($StrLast, 1, 1);
	}

	//Character table
	private function CapacityTable($start, $length){
		$str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		return substr($str, $start, $length);
	}
}
