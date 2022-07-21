<?php
include 'header.php';
?>
<br/>
<!-- Start of login -->
<center>
 <form class="login100-form validate-form" action="login_action.php" method="post">
				<h2>
					LOG IN
				</h2>
	

	<div id="validation-message" style="color:red;text-align:center;">
		<?php if(isset($_GET['error']))
			echo $_GET['error'];
		?><hr>
	</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                                    Enter username or email : <input class="input100" type="text" name="username" id="email" placeholder="username or email" required onchange="return Validata();">
					<span class="focus-input100"></span>
				</div>
<span id="msg5" style="color:red;"></span>
<script>		
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg5').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}

		</script>

				<br/><div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Enter password : <input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>
<br>
				<!-- <center><div class="wrap-input100 validate-input m-b-25" data-validate = "Forget password"> -->
					<!-- <a href="in.php"><font color="purple">Forgot Password??</font></a> -->
					
				<!-- </div> -->
<br>
				<div class="container-login100-form-btn">
                                    <input type="submit" class="btn-primary btn" value="Sign In">
						
					
				</div>
			
<br>
				<div class="text-center">Don't have an account??
					<a href="signup.php" class="txt2 hov1">
						<font color="red">Sign Up</font>
					</a>
				</div>
			</form>	
		</div>
	</div>
		<?php
if (@$_GET['registered'] == 'true')
   echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('You are Succesfully Registered')</script>");
?>
</center>
<!-- End of login -->

<?php
include 'footer.php';
?>
  