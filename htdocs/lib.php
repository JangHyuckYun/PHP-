<?php 
function auto($f) {
	require "$f.php";
}
spl_autoload_register("auto");

function alert($t) {
	echo "<script>alert('$t');</script>";
}

function move($m,$t) {
	if(!empty($t))
		alert($t);
	echo "<script>location.replace('$m');</script>";
	exit;
}

function back($t) {
	if(!empty($t))
		alert($t);
	echo "<script>history.back();</script>";
	exit;
}
function view($f,$d) {
	extract($d);
	$get = isset($_GET['url']) ? "/".$_GET['url'] : "/";
	require "src/View/temp/header.php";
	if($f == "main") {
		require "src/View/main.php";
	}else if($f == "board"){
		require "src/View/board.php";
	}else {
		$f = explode("/",$f);
		require "src/View/$f[0]/$f[1].php";
	}
	require "src/View/temp/footer.php";
}

function ss() {
	return isset($_SESSION['user']) ? $_SESSION['user'] : false;
}

function guestChk() {
	return isset($_SESSION['guest']) ? $_SESSION['guest'] : false;
}