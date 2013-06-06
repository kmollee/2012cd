<?php
//V:\extensions\sgw\bin\core\classes\test.php

class test {

	static function myadd($val,$args,$data) {
	// how to get other field value??
	// $_SESSION["username"] 為目前的用戶名稱
	// $data["var1"]["data"][0] 為 var1 欄位值
	// $data["var2"]["data"][0] 為 var2 欄位值
		return $data["var1"]["data"][0]+$data["var2"]["data"][0];
	}

	static function mygear($val,$args,$data) {
	// how to get other field value??
	// $_SESSION["username"] 為目前的用戶名稱
	// $data["var1"]["data"][0] 為 var1 欄位值
	// $data["var2"]["data"][0] 為 var2 欄位值
		return $data["type"]["data"][0]."--".$data["material"]["data"][0];
	}

	static function TrapezoidArea($val,$args,$data) {
	// how to get other field value??
	// $_SESSION["username"] 為目前的用戶名稱
	// $data["var1"]["data"][0] 為 var1 欄位值
	// $data["var2"]["data"][0] 為 var2 欄位值
		return (($data["var1"]["data"][0]+$data["var2"]["data"][0])*$data["var3"]["data"][0])/2.0;
	}

}
?>