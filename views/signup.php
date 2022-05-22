<?php 
require dirname(__FILE__).'\header.php';
?>

<!-- signup and login -->
<div class="container c-sign mt-5 mb-5" id="container">
	<div class="form-container sign-up-container">
		<form action="<?php echo url.'controllers/User.php' ?>" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa fa-google"></i></a>
				<a href="#" class="social"><i class="fa fa-twitter"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="name" id="name" placeholder="Enter Your Name" required>
			<input type="email" name="email" id="email" placeholder="Enter Your Email" required>
			<input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile No." required pattern="[0-9]{10,10}">
			<input type="hidden" name="action" value="signup">
            <button type="submit">Sign Up</button>
		</form>
	</div>

	<div class="form-container sign-in-container">
		<form>
			<h1>Sign In</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa fa-google"></i></a>
				<a href="#" class="social"><i class="fa fa-twitter"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" name="email" id="email" placeholder="Email">
			<input type="password" name="password" id="password" placeholder="Password">
			<a href="#">Forgot Your password?</a>
			<button>Sign In</button>
		</form>
	</div>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>
					To keep connected with us please login with your personal info
				</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>
					Enter your personal details and start journey with us
				</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<?php 
require dirname(__FILE__).'\footer.php';
 ?>
