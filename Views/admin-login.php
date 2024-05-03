<?php 
require_once '../Views/assests/login-register-header.php';
include_once '../Controllers/UserControllers/UserAuthenticator.php';
$_POST['genderMale'] = '';
if(isset($_POST["Register"]))
{
	if($_POST['genderMale'] !== '')
	{
		$gender=0;
	}else{
		$gender=1;
	}
	$Rcheck = UserAuthenticator::register($_POST['name'], $_POST['email'], $gender ,$_POST['Rusername'], $_POST['Rpassword']);
	if($Rcheck == "duplicateusername"){
		echo "this username already taken";
	}elseif($Rcheck == "duplicateemail"){
		echo "you have account in this email";
	}elseif($Rcheck == "success"){
		echo "your account has been successfully created";
	}elseif($Rcheck == "somethingWrong"){
		echo "Error";
	}elseif($Rcheck == "missingError"){
		echo "Error: Missing or invalid input";
	}/*else{
		foreach ($arr_Err as $attr => $value) {
			echo "<br>".$value;
		}
	}*/
}?>
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
						<form method="post" >
							<div class="form-group">	
							  <input type="text" id="input" required="required" name="username"/>
							  <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="password"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<?php
							if(isset($_POST['Login']))
							{
								$check=Authenticator::login($_POST['username'],$_POST['password']);
								if($check=="passError"){
									echo "incorrect password";
								}elseif($check=="usernameError"){
									echo "incorrect username";
								}elseif($check=="validError"){
									die('Error: Missing or invalid input');
								}else{
									echo"something wrong";
								}
							}
							?>
							<div class="submit-btns">
								<input  type = "submit" id = "submit" name = "Login" value="Login">
								<!--<button class="mtr-btn signin" type="button"><span>Login</span></button>-->
							</div>
						</form>
					</div>

<?php
require_once '../Views/assests/login-register-footer.php'
?>