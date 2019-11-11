<?php 
namespace src\Controller;
use src\Core\DB;
class MainController
{
	public function main() {
		if(ss()) back("로그인 안한 유저만 접근 가능합니다.");
		view("main",[]);
	}

	public function board() {
		view("board", []);
	}

	public function guest() {
		$_SESSION['guest'] = true;
		alert("게스트로 로그인 하였습니다.");
		move("/board", []);
	}

	public function join() {
		view("user/join", []);
	}
	
	public function login_process() {
		$id = htmlspecialchars($_POST['id']);
		$pw = htmlspecialchars($_POST['pw']);

		$row = DB::fetch("SELECT * FROM tb_users WHERE id = ? AND pw = ?",[$id, $pw]);

		if($row) move("/board", "로그인이 완료되었습니다.");
		else back("아이디 또는 비밀번호가 틀렸습니다.");
	}

	public function join_process() {
		$name = htmlspecialchars($_POST['name']);
		$id = htmlspecialchars($_POST['id']);
		$pw = htmlspecialchars($_POST['pw']);
		$pw2 = htmlspecialchars($_POST['pw2']);
		$chkId = DB::fetch("SELECT * FROM tb_users WHERE id = ?", [$id]);

		if($chkId) back("아이디 중복 입니다.");
		else if($pw !== $pw2) back("비밀버호가 서로 맞지 않습니다.");
		else if(trim($name) === "" || trim($id) === "" || trim($pw) === "" || trim($pw2) === "") back("값을 다 넣었는지 확인해 주세요.");
		else if($name === "admin" || $name === "관리자" || $id === "admin" || $id === "관리자") back("관리자란 내용을 넣으면 안됩니다.");

		DB::query("INSERT INTO tb_users SET name = ?, id = ?, pw = ?", [$name,$id,$pw]);
		move("/","회원가입이 완료되었습니다.");

	}
	
	
}