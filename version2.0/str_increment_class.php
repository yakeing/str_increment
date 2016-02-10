<?php
/**
  * String Increment Class
  * @author http://weibo.com/yakeing
  * @version 2.0
  * str_increment::NewStr(string, options, boolean)
 */
class str_increment{
	public $Table = array();
	private $TableCount = 0;
	private function __construct(){}
	private function __clone(){}

	/**
	 * 递增字符
	 * @param string  $FinallyStr 输入字符
	 * @param options $Type 类型 [默认字符串/ letter 字母 / Lowercase 小字母 / Uppercase 大字母]
	  * @param boolean $FirstRandomCode 首个随机码
	*/
	public static function NewStr($FinallyStr, $Type='string', $FirstRandomCode=false){
		static $instance = null;
		$Number = false;
		$Lowercase = false;
		$Uppercase = false;
		if(is_null($instance)){
			$instance = new self();
		}
		switch($Type){
			case 'letter'://忽略大小写(i)
				if(preg_match( '/[^a-z]+/i', $FinallyStr)){
					return false;
				}
				$Lowercase = true;
				$Uppercase = true;
				break;
			case 'Lowercase':
				if(preg_match('/[^a-z]+/', $FinallyStr)){
					return false;
				}
				$Lowercase = true;
				break;
			case 'Uppercase':
				if(preg_match( '/[^A-Z]+/', $FinallyStr)){
					return false;
				}
				$Uppercase = true;
				break;
			default:
				if(preg_match('/[^a-z0-9]/i', $FinallyStr)){
					return false;
				}else if(preg_match('/[1-9]\d*/', $FinallyStr)){
					$strlen = strlen('a'.$FinallyStr);
					--$strlen;
					++$FinallyStr;
					if($strlen != strlen($FinallyStr)){
						return str_pad('a', $strlen, '0', STR_PAD_LEFT);
					}
					return str_pad($FinallyStr, $strlen, '0', STR_PAD_LEFT);
				}
				$Number = true;
				$Lowercase = true;
				$Uppercase = true;
				break;
		}
		if(!$StrLength = strlen($FinallyStr)){
			return false;
		}
		$instance->Table = $instance->CapacityTable($Number, $Lowercase, $Uppercase);
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
	private function CapacityTable($Number, $Lowercase, $Uppercase){
		$arr = array();
		if($Number){
			$arr = array_merge($arr, array('0','1','2','3','4','5','6','7','8','9'));
		}
		if($Lowercase){
			$arr = array_merge($arr, array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'));
		}
		if($Uppercase){
			$arr = array_merge($arr, array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'));
		}
		return $arr;
	}
}
