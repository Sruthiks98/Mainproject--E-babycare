<?php
include 'userheader.php';
?>

<!-- Start of add baby details -->
<center>
	<form class="form" action="addbabydetails_action.php" method=post height=50% width=50%>
		<!-- <form role="form" method="post" action="addbabydetails_action.php"> -->
			<span>ADD BABY DETAILS</span>
			<hr>

			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-calendar-full"></span>
					Date of birth of the child : <input type="date" name="b_dob" id="myDate" class="form-control" min="1980-01-01" max="2050-12-31" title="Date of birth" placeholder="Date of Birth" max="<?php echo date("Y-m-d") ?>">
				</div>
			</div>
			<span id="demo" style="color:red;"></span>
			<script>
				function myFunction() {
					var x = document.getElementById("myDate").max;
					document.getElementById("myDate").innerHTML = "Invalid Date!!";
				}
			</script>
			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-apartment"></span>
					Baby age: <input type="text" maxlength="3" name="b_age" id="age" class="form-control" title="age" placeholder="Age of the baby" required onchange="Validage();">
				</div>
			</div>
			<span id="msg8" style="color:red;"></span>
			<script>
				function Validage() {
					var val = document.getElementById('age').value;

					if (!val.match(/^[0-9]+([.0-9]+)?$/)) {
						document.getElementById('msg8').innerHTML = "Type 0.00 not as .00 and Only numbers are allowed";
						document.getElementById('age').value = "";
						return false;
					}
					document.getElementById('msg8').innerHTML = " ";
					return true;
				}
			</script>

			<div>
				<div style="padding-top: 7px;padding-bottom: 23px;">
					<span class="lnr lnr-users"></span>
					&nbsp&nbsp&nbsp Gender : <input type="radio" name="b_gender" value="male"> Male
					<input type="radio" name="b_gender" value="female"> Female
				</div>
			</div>

			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
					Name of the baby:<input type="text" name="bnme" id="bnme" class="form-control" title="Name of the baby" placeholder="Name of the child [Eg: Sruthi]" required onchange="Validate();">
				</div>
			</div>
			<span id="msg1" style="color:red;"></span>
			<script>
				function Validate() {
					var val = document.getElementById('bnme').value;

					if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) {
						document.getElementById('msg1').innerHTML = "Start with a Capital letter & Only alphabets are allowed";
						document.getElementById('bnme').value = "";
						return false;
					}
					document.getElementById('msg1').innerHTML = " ";
					return true;
				}
			</script>
                        <script>
function relationdisplay(val)
{
    //alert(val);
    if(val=='Father')
        {
           $("#father").show(); 
           $("#mother").hide();
            $("#other").hide();
        }
        if(val=='Mother')
        {
            $("#mother").show(); 
             $("#father").hide(); 
             $("#other").hide();
        }
        if(val=='Other')
        {
           $("#other").show(); 
             $("#father").hide(); 
             $("#mother").hide();  
        }
}
</script>
                        <div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
					Relation To The Baby: 
                                        <select name="rbaby" class="form-control" required="" onchange="relationdisplay(this.value)">
                                            <option>Relation To The Baby</option>
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        
				</div>
			</div>
                        <div class="form-holder" id="father" style="display: none">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
                                        Name of the father: <input type="text" name="fname" id="fname" value="Father Name" class="form-control" title="Name of the father" placeholder="Name of the father [Eg: Siva]" required onchange="Validate1();">
				</div>
			</div>
			<span id="msg2" style="color:red;"></span>
			<script>
				function Validate1() {
					var val = document.getElementById('fname').value;

					if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) {
						document.getElementById('msg2').innerHTML = "Start with a Capital letter & Only alphabets are allowed";
						document.getElementById('fname').value = "";
						return false;
					}
					document.getElementById('msg2').innerHTML = " ";
					return true;
				}
			</script>

			<div class="form-holder" id="mother" style="display: none">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
					Name of the mother: <input type="text" name="mname" value="Mother Name" id="mname" class="form-control" title="Name of the mother" placeholder="Name of the mother [Eg: Sangitha]" required onchange="Validate2();">
				</div>
			</div>
			<span id="msg3" style="color:red;"></span>
			<script>
				function Validate2() {
					var val = document.getElementById('mname').value;

					if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) {
						document.getElementById('msg2').innerHTML = "Start with a Capital letter & Only alphabets are allowed";
						document.getElementById('mname').value = "";
						return false;
					}
					document.getElementById('msg3').innerHTML = " ";
					return true;
				}
			</script>
                        <div class="form-holder" id="other" style="display: none">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
					Other: <input type="text" name="other" id="other" value="Person Name"  class="form-control" title="Name of the Other Person" placeholder="Name of the Person [Eg: Sangitha]" required >
				</div>
			</div>
			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-apartment"></span>
					Address of the parents: <input type="text" name="b_add" id="add" class="form-control" title="Address" placeholder="Address" required onchange="Validname();">
				</div>
			</div>
			<span id="msg4" style="color:red;"></span>
			<script>
				function Validname() {
					var val = document.getElementById('add').value;

					if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) {
						document.getElementById('msg4').innerHTML = "Start with a Capital letter & Only alphabets are allowed";
						document.getElementById('add').value = "";
						return false;
					}
					document.getElementById('msg4').innerHTML = " ";
					return true;
				}
			</script>

			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-apartment"></span>
					Place of birth: <input type="text" name="place" id="place" class="form-control" title="Place" placeholder="Place of birth" required onchange="Validplace();">
				</div>
			</div>
			<span id="msg5" style="color:red;"></span>
			<script>
				function Validplace() {
					var val = document.getElementById('place').value;

					if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) {
						document.getElementById('msg5').innerHTML = "Start with a Capital letter & Only alphabets are allowed";
						document.getElementById('place').value = "";
						return false;
					}
					document.getElementById('msg5').innerHTML = " ";
					return true;
				}
			</script>
			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-apartment"></span>
					Hospital Name: <input type="text" name="hos" id="hos" class="form-control" title="Hospital" placeholder="Hospital" required onchange="Validhos();">
				</div>
			</div>
			<span id="msg6" style="color:red;"></span>
			<script>
				function Validhos() {
					var val = document.getElementById('hos').value;

					if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) {
						document.getElementById('msg6').innerHTML = "Start with a Capital letter & Only alphabets are allowed";
						document.getElementById('hos').value = "";
						return false;
					}
					document.getElementById('msg6').innerHTML = " ";
					return true;
				}
			</script>
			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-apartment"></span>
					Baby weight: <input type="text" maxlength="3" name="weight" id="weight" class="form-control" title="weight" placeholder="weight of the baby in kg" required onchange="Validw();">
				</div>
			</div>
			<span id="msg7" style="color:red;"></span>
			<script>
				function Validw() {
					var val = document.getElementById('weight').value;

					if (!val.match(/^\d{2,3} ?kg$/)) {
						document.getElementById('msg7').innerHTML = "Type 2 or 3 digits as kg and Only numbers are allowed";
						document.getElementById('weight').value = "";
						return false;
					}
					document.getElementById('msg7').innerHTML = " ";
					return true;
				}
			</script>
			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-apartment"></span>
					Baby height: <input type="text" maxlength="4" name="height" id="height" class="form-control" title="Height" placeholder="Height of the baby in cm" required onchange="Validh();">
				</div>
			</div>
			<span id="msg8" style="color:red;"></span>
			<script>
				function Validh() {
					var val = document.getElementById('height').value;

					if (!val.match(/^[0-9]+([.0-9]+)?$/)) {
						document.getElementById('msg8').innerHTML = "Only numbers are allowed";
						document.getElementById('height').value = "";
						return false;
					}
					document.getElementById('msg8').innerHTML = " ";
					return true;
				}
			</script>



			<div>
				<input type="submit" name="submit" value="Submit"/>
				
			</div>

		</form>
</center>
<!-- End of add baby details -->

<?php
include 'userfooter.php';
?>