<?php

namespace Ws;

use \RecursiveDirectoryIterator;
use \RecursiveIteratorIterator;

class Ws_start
{
	public static function boot($namaklass) {
		$klassbaru = new $namaklass();
		return $klassbaru;
	}	
	
	public static function klass(){
		$dir = dirname(__FILE__);
		self::getdirektori($dir);
	}
	
	public static function getdirektori($dir) {
		/*
		$scan = scandir($dir);
		unset($scan[array_search('.', $scan, true)]);
		unset($scan[array_search('..', $scan, true)]);
		unset($scan[array_search('Ws_start.php', $scan, true)]);
		
	
		foreach($scan as $file){
			if(strpos($file, ".") !== false){
				$namafile = $file."<br>";
			} else {
				$namafile .= "Ws".DIRECTORY_SEPARATOR.$file.DIRECTORY_SEPARATOR;
			}
			
			$namafile2 = strpos($file, ".") !== false ? $file : "Ws".DIRECTORY_SEPARATOR.$file.DIRECTORY_SEPARATOR;
			echo $namafile;
			//self::boot($namafile);
			if (is_dir(dirname(__FILE__)."/".$file)){
				self::getdirektori($dir.'/'.$file);
			}
		}
		*/
		
		$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS ));
		
		foreach ($iterator as $file) {
			if(!strpos($file, "Ws_start") !== false){
				$file = str_replace($dir.DIRECTORY_SEPARATOR,"",$file);
				$file = str_replace(".php","",$file);
				$namaklass = "Ws".DIRECTORY_SEPARATOR.$file;
				self::boot($namaklass);
				//echo $namaklass;
			}
		}
		
	}		
}