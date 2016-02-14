<?php
/**
  * String Increment Class
  * @author http://weibo.com/yakeing
  * @version 2.1
  * str_increment::NewStr(string, options, boolean)
 */
class str_increment{
	public $Table = array();
	private $TableCount = 0;

	/**
	 * 递增字符
	 * @param string  $FinallyStr 输入字符
	 * @param options $Type 类型 [默认全部 \ alpha 纯字母 / lower 小字母 / upper 大字母]
	  * @param boolean $FirstRandomCode 首个随机码
	*/
	public static function NewStr($FinallyStr, $Type='all', $FirstRandomCode=false){
		static $instance = null;
		$Number = false;
		$lower = false;
		$upper = false;
		if(is_null($instance)){
			$instance = new self();
		}
		switch($Type){
			case 'alpha':
				if(!ctype_alpha($FinallyStr)){
					return false;
				}
				$lower = true;
				$upper = true;
				break;
			case 'lower':
				if(!ctype_lower($FinallyStr)){
					return false;
				}
				$lower = true;
				break;
			case 'upper':
				if(!ctype_upper($FinallyStr)){
					return false;
				}
				$upper = true;
				break;
			default:
				if(!ctype_alnum($FinallyStr)){
					return false;
				}else if(ctype_digit($FinallyStr)){
					$strlen = strlen('a'.$FinallyStr);
					--$strlen;
					$digit = intval($FinallyStr);
					++$digit;
					if($strlen == strlen($digit)){
						return $digit;
					}
					return str_pad($digit, $strlen, '0', STR_PAD_LEFT);
				}
				$Number = true;
				$lower = true;
				$upper = true;
				break;
		}
		if(!$StrLength = strlen($FinallyStr)){
			return false;
		}
		$instance->Table = $instance->CapacityTable($Number, $lower, $upper);
		$instance->TableCount = count($instance->Table)-1;

		$i = 0;
		$NewArr = array();
		$AnStr = str_split($FinallyStr);
		while(true){
			++$i;
			$NewAnStr = $instance->Calculation(array_pop($AnStr));
			$NewArr[] = $NewAnStr;
			if($NewAnStr === false && $NewAnStr != $instance->Table[0] || $i < $StrLength){
				break;
			}
		}
		$ObverseStr = implode('', $AnStr).implode('', array_reverse($NewArr));
		if($FirstRandomCode!=false){
			$ObverseStr = $instance->ReplaceFirstCode($ObverseStr);
		}
		return ($StrLength == strlen($ObverseStr)) ? $ObverseStr : false;
	}

	//递增
	private function Calculation($str){
		$StrIndex = array_search($str, $this->Table);
		if($StrIndex === false){
			return false;
		}else{
			$NewIndex = ($StrIndex < $this->TableCount) ? ++$StrIndex : 0;
			return $this->Table[$NewIndex];
		}
	}

	//随机码
	private function ReplaceFirstCode($str){
		$Index = mt_rand(0, $this->TableCount);
		return substr_replace($str, $this->Table[$Index], 0, 1);
	}

	//字符表
	private function CapacityTable($Number, $lower, $upper){
		$arr = array();
		if($Number){
			$arr = array_merge($arr, array('0','1','2','3','4','5','6','7','8','9'));
		}
		if($lower){
			$arr = array_merge($arr, array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'));
		}
		if($upper){
			$arr = array_merge($arr, array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'));
		}
		return $arr;
	}
}
