<?php
require ('ZhConversion.php');
use MediaWiki\Languages\Data\ZhConversion;
class ZhC extends ZhConversion {
    function __construct() {       

    }

    public function getvalue($key) {
        $array = parent::$zh2CN; //繼承
        return strtr($key, $array); //繁轉簡
    }
}

$ZhC = new ZhC; 
$hans_str = "全球資訊網三極體下著录"; //輸入
echo $ZhC -> getvalue($hans_str); //call簡轉繁的function並顯示結果

?>