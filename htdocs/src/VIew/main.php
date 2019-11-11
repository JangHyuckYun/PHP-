<!-- main -->
<main>
	<div class="container">
		<div class="login-form">
			<h1 class="title">TopBlog</h1>
			<form action="/login_process" method="post" name="login">
				<p><input type="text" placeholder="id" name="id"><span class="linear" required></span></p>
				<p><input type="password" placeholder="password" name="pw"><span class="linear" required></span></p>
				<div class="login-btn flex">
					<button type="submit" class="btn">Sign in</button>
					<a href="/user/join" class="btn">Sign up →</a>
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

