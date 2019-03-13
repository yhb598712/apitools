<?php

namespace Yhb;

class DatabaseTest{
	public static function testName()
	{
		echo __FILE__;
	}

	public function checkVersion()
	{
		var_dump(function_exists('curl_init'));
	}
}