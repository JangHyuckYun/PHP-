	<!-- main -->
	<main>
		<div class="container">
			<div class="login-form">
				<h1 class="title">TopBlog</h1>
				<form action="/user/join_process" method="post">
					<p><input type="text" placeholder="name" name="name" required><span class="linear"></span></p>
					<p><input type="text" placeholder="id" name="id" required><span class="linear"></span></p>
					<p><input type="password" placeholder="password" name="pw" required><span class="linear"></span></p>
					<p><input type="password" placeholder="password check" name="pw2" required><span class="linear"></span></p>
					<div class="login-btn flex">
						<button type="submit" class="btn">Sign up</a> <!-- ( button태그로 바꾸고 스크립트 애서 버튼 클릭 또는 Enter 시 submit 으로 체크하고 main.html 로 이동   ) -->
						<button type="button" onclick="history.back();" class="btn">Cancel</button>
					</div>
				</form>
				<p class="link-login-text">Or login with</p>
				<ul class="link-login flex">
					<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				</ul>
				<p class="guest-login">
					<a href="/board">Guest-login</a>
				</p>
			</div>
		</div>
	</main>