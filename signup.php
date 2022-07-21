
<?php
include 'header.php';
?>
<br/>
<!-- Start of signup -->
<center>
<form  class="form" action=signup_action.php method=post height=50% width=50%>

    <h2>Registration</h2>
		<div class="form-holder"><div style="padding-top: 7px;padding-bottom: 23px;width:25%">
		<span class="lnr lnr-user"></span>
		First Name:<input type="text" name="nme" id="nme" class="form-control" title="First Name" placeholder="First Name [Eg: Sruthi]" required onchange="Validate();">			
		</div></div>
		<span id="msg1" style="color:red;"></span>
<script>		
function Validate() 
{
    var val = document.getElementById('nme').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('nme').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
					<div class="form-holder"><div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
					Last Name : <input type="text" name="lnme" id="lnme" class="form-control" title="Last Name" placeholder="Last Name [Eg: Siva]" required onchange="Validate1();">
					</div></div>
					<span id="msg2" style="color:red;"></span>
<script>		
function Validate1() 
{
    var val = document.getElementById('lnme').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('lnme').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
					<div class="form-holder"><div style="padding-top: 7px;padding-bottom: 23px;width:25%">
						<span class="lnr lnr-apartment"></span>
						Address : <input type="text" name="add" id="add" class="form-control" title="Address" placeholder="Address" required onchange="Validname();">
					</div></div>
					<span id="msg3" style="color:red;"></span>
<script>		
function Validname() 
{
    var val = document.getElementById('add').value;

    if (!val.match(/^(\w*\s*[\#\-\,\/\.\(\)\&]*)+/)) 
    {
        document.getElementById('msg3').innerHTML="Enter a valid address";
		            document.getElementById('add').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>
					<div class="form-holder"><div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-calendar-full"></span>
					Date of birth : <input type="date" name="dob" id="myDate" class="form-control" min="1980-01-01" max="2010-12-30" title="Date of birth" placeholder="Date of Birth" max="<?php echo date("Y-m-d")?>" required >
					</div></div>
					<span id="demo" style="color:red;"></span>

					<!-- <script>
						function myFunction() 
					{
						var x = document.getElementById("myDate").max;
						document.getElementById("demo").innerHTML = "Invalid Date!!";
					}
</script> -->

					<div ><div style="padding-top: 7px;padding-bottom: 23px;">
					<span class="lnr lnr-users"></span>
					&nbsp&nbsp&nbsp Gender : 
                                        <input type="radio"  name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					<input type="radio" name="gender" value="others"> Others
					</div>
					</div>
			<div class="form-holder">
			<span class="lnr lnr-users">
			</span>			
			<select class="tkvsoft"  name="type" style="border-style: initial;padding-top: 18px; padding-bottom: 10px;
    margin-bottom: 4px;width: 25%;border-bottom: 1px solid #e6e6e6;"  required>
			<option>&nbsp &nbsp &nbsp &nbsp --Select Type--</option>
			<option value ="1">&nbsp &nbsp &nbsp &nbsp User</option>
			</select>
			</div>
			
			<div class="form-holder"><div style="padding-top: 7px;padding-bottom: 23px;width:25%">
			<span class="lnr lnr-phone-handset"></span>
			Phone no : <input type="text" name="phn"  maxlength="10" id="phn" class="form-control" title="Phone Number" placeholder="Phone Number" required onchange="Validat();">
			</div></div>
			<span id="msg4" style="color:red;"></span>
			
<script>
function Validat() 
{
    var val = document.getElementById('phn').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phn').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder"><div style="padding-top: 7px;padding-bottom: 23px;width:25%">
						<span class="lnr lnr-envelope"></span>
						Email id : <input type="email" name="email" id="email" title="E-Mail" class="form-control" placeholder="E-Mail [Eg: xyz@gmail.com]" required onchange="return Validata();">
					</div></div>
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
		
					<div class="form-holder"><div style="padding-top: 7px;padding-bottom: 23px;width:25%">
						<span class="lnr lnr-lock"></span>
						Password : <input type="password" name="pwd" id="pwd" class="form-control" title="Password" placeholder="Password" required onchange="return Validp();">
					</div></div>
					<span id="msg6" style="color:red;"></span>
<script>		
function Validp() 
{
    var val = document.getElementById('pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,15}$/)) 
    {
        document.getElementById('msg6').innerHTML="Password should contain atleast 6 characters";
		
		     document.getElementById('pwd').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder"><div style="padding-top: 7px;padding-bottom: 23px;width:25%">
						<span class="lnr lnr-lock"></span>
						Confirm password : <input type="password" name="confirm" id="confirm" title="Confirm Password" class="form-control" placeholder="Confirm Password" required onchange="return check();">
					</div></div>
					<span id="msg7" style="color:red;"></span>
					<script>
	function check()
{
var pas1=document.getElementById("pwd");
							  var pas2=document.getElementById("confirm");
							
							  if(pas1.value=="")
	{
		document.getElementById('msg7').innerHTML="Password can't be null!!";
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		document.getElementById('msg7').innerHTML="Please confirm password!!";
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		document.getElementById('msg7').innerHTML="Passwords does not match!!";
		pas1.focus();
		return false;
	}
     document.getElementById('msg7').innerHTML=" "; 
	return true;
	
}
	</script>
					<div>
					
                                            <input type="submit" name="submit" class="btn-primary btn" value="Register">
                                            <input type="reset" name="rest" class="btn-info btn" value="Cancel">	
						</div>
					
				</form>
</center>
<!-- End of signup -->

<?php
include 'footer.php';
?>