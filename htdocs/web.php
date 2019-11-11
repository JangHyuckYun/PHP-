<?php 
use src\Core\Route;

Route::reg([
	["get","/@MainController@main"],
	["get","/board@MainController@board"],
]);

if(ss()){
	Route::reg([
		["get","/board/write@BoardController@write"],
	]);
}else {
	Route::reg([
		["get","/user/join@MainController@join"],
		
		["post","/user/join_process@MainController@join_process"],
		["post","/login_process@MainController@login_process"],
	]);
}