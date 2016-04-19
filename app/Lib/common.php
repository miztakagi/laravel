<?php namespace App\Lib;

/*
|--------------------------------------------------------------------------
| original class for common functions
|--------------------------------------------------------------------------
*/

class Common {

	/* Generate Password */
	public static function makePassword($num = 8)
	{
    $seeds = 'abcefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle($seeds), 0, $num);
  }

  /* タイトルコピーをランダムに抽出 */
	public static function setCopy($array)
	{
     $key = array_rand($array);
     return $array[$key];
  }

}
