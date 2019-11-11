<?php 
namespace src\Core;

class Route
{
	static $GET = [];
	static $POST = [];

	static function init() {
		$get = isset($_GET['url']) ? "/".$_GET['url'] : "/";
		foreach (self::${$_SERVER['REQUEST_METHOD']} as $v) {
			$v = explode("@",$v);

			if($v[0] == $get){
				$src = "src\\Controller\\".$v[1];
				$src = new $src();
				$src->{$v[2]}();
				exit;
			}
		}
		move("/","잘못된 접근");
	}

	static function reg($arr) {
		foreach ($arr as $v) {
			self::${strtoupper($v[0])}[] = $v[1];
		}
	}
}