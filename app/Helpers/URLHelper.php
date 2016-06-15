<?php
/* ========================================================================
 * LaraShort v0.1
 * Copyright 2016 Saravanan Jayabalan (http://www.saravananj.com)
 * Licensed under MIT (https://github.com/saravananj/larashort/blob/master/LICENSE)
 * ======================================================================== */
namespace App\Helpers;

class URLHelper
{
	public static function generateLink($string,$settings)
	{
		$characters = '';
		
		switch($settings["random_characters"]) {
			case "case_alpha_numeric":
				$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
				break;
			case "alpha_numeric":
				$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
				break;
			case "case_alpha":
				$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
				break;
			case "case_numeric":
				$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
				break;
		}
		
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $settings["no_of_characters"]; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
	public static function getTitle($url){
		$str = file_get_contents($url);
		$returnTitle = "";
		if(strlen($str)>0){
			$str = trim(preg_replace('/\s+/', ' ', $str));
			preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title);
			if(isset($title[1])){
				$returnTitle = $title[1];
			}
			return $returnTitle;
		}
	}
}