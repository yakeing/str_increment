<?php
/**
  * String Increment Class
  * @author http://weibo.com/yakeing
  * @version 1.0
  *
  * str_increment::NewStr(string)
 */
class str_increment{
	public $Table = array();
	private $TableCount = 0;
	private $NumberTable = true;
	private $LowercaseTable = true;
	private $UppercaseTable = true;
	private static $FirstRandomCode = true;

	function __construct(){
		$this->Table = $this->CapacityTable();
		$this->TableCount = count($this->Table)-1;
	}

	public static function NewStr($FinallyStr){
		if(preg_match('/[^a-z0-9]/i', $FinallyStr)){
			return false;
		}
		$StrLength = strlen($FinallyStr);
		if($StrLength < 0){
			return false;
		}
		$NewArr = array();
		$i = 0;
		$AnStr = str_split($FinallyStr);
		$obj = new str_increment(); //instantiation self
		do {
			$NewAnStr = $obj->Calculation(array_pop($AnStr));
			++$i;
			$IsDo = false;
			if ($NewAnStr !== false) {
				if($NewAnStr === $obj->Table[0]){
					if($i < $StrLength){
						$IsDo = true;
					}
				}
				$NewArr[] = $NewAnStr;
			}
		} while($IsDo);
		$ObverseStr = implode('', $AnStr).implode('', array_reverse($NewArr));
		if(self::$FirstRandomCode){
			$ObverseStr = $obj->ReplaceFirstCode($ObverseStr);
		}
		return ($StrLength == strlen($ObverseStr)) ? $ObverseStr : false;
	}

	private function Calculation($str){
		$StrIndex = array_search($str, $this->Table);
		if($StrIndex === false){
			return false;
		}else{
			$NewIndex = ($StrIndex < $this->TableCount) ? ++$StrIndex : 0;
			return $this->Table[$NewIndex];
		}
	}

	private function ReplaceFirstCode($str){
		$Index = mt_rand(0, $this->TableCount);
		return substr_replace($str, $this->Table[$Index], 0, 1);
	}

	private function CapacityTable(){
		$arr = array();
		if($this->NumberTable){
			$arr = array_merge($arr, array('0','1','2','3','4','5','6','7','8','9'));
		}
		if($this->LowercaseTable){
			$arr = array_merge($arr, array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'));
		}
		if($this->UppercaseTable){
			$arr = array_merge($arr, array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'));
		}
		return $arr;
	}
}
