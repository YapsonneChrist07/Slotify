<?php
	include("config.php");
	include("Account.php");
	include("Constants.php");
	

	$account = new Account($con);
	
	include("register-handler.php");
	include("login-handler.php");

	function getInputValue($name){
		if(isset($_POST[$name])){
			echo $_POST[$name];
			
		}
	}
?>

<html>
<head>
	<title>Welcome to MySlotify!</title>
	<link rel="stylesheet" href="css/register.css">
	<link rel="icon" type="../images/bg.jpg" href="images/logo.png">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/register.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F
	/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<?php 

	if(isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function(){
				$("#LoginForm").hide();
       			$("#registerForm").show();
	
			});
			</script>';
	}
	else {
		echo '<script>
	$(document).ready(function(){
		$("#LoginForm").show();
        $("#registerForm").hide();
	
	});
	</script>';
	}

	?>
	

	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form id="LoginForm" action="register.php" method="POST">
					<h2>Login to your account</h2>
					<p>
					<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name ="loginUsername" type="text" placeholder="e.g YapiChrist" value="<?php getInputValue('loginUsername') ?>" required>
					</p>
					<p>
					<label for="loginPassword">Password</label>
						<input id="loginPassword" name ="loginPassword" type="password" placeholder="Your Password" required>
					</p>
					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hidelogin">Don't have an account yet? Signup here.</span>
					</div>
				</form>


				<form id="registerForm" action="register.php" method="POST">
					<h2>Create your free Account</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Username</label>
						<input id="username" name ="username" type="text" placeholder="e.g YapiChrist" value="<?php getInputValue('username') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First Name</label>
						<input id="firstName" name ="firstName" type="text" placeholder="e.g Yapi" value="<?php getInputValue('firstName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last Name</label>
						<input id="lastName" name ="lastName" type="text" placeholder="e.g Christ" value="<?php getInputValue('lastName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input id="email" name ="email" type="email" placeholder="e.g Yapi@gmail.com" value="<?php getInputValue('email') ?>" required>
					</p>

					<p>
						<label for="email2">Confirm Email</label>
						<input id="email2" name ="email2" type="email" placeholder="e.g Yapi@gmail.com" value="<?php getInputValue('email2') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$passwordsNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordsCharacters); ?>
						<label for="Password">Password</label>
						<input id="Password" name ="Password" type="password" placeholder="Your Password" required>
					</p>

					<p>
						<label for="Password2">Confirm Password</label>
						<input id="Password2" name ="Password2" type="password" placeholder="Your Password" required>
					</p>

					<button type="submit" name="registerButton">SIGN IN</button>

					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? log in here .</span>
					</div>
				</form>

			</div>

			<div id="loginText">
				<h1>Get great music, right now</h1>
				<h2>listen to loads of songs for free</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Create your own playlists</li>
					<li>Follow artists to keep up to date</li>
				</ul>
			</div>

		</div>
	</div>

</body>
</html>