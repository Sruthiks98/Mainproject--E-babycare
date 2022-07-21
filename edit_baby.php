<?php
include 'userheader.php';
$uname=$_SESSION['username'];
$qb=  mysqli_query($con, "select *from tbl_registration where r_email='$uname'");
$rr=  mysqli_fetch_array($qb);
 $pd=$_GET['id'];
 $query = " select * from tbl_baby where b_id='$pd'";
    $result = mysqli_query($con,$query);
    $rr1=mysqli_fetch_assoc($result);
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
					Date of birth of the child : <input type="date" name="b_dob" id="myDate" value="<?php echo $rr1['b_dob'] ?>" class="form-control" min="1980-01-01" max="2050-12-31" title="Date of birth" placeholder="Date of Birth" max="<?php echo date("Y-m-d") ?>">
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
					Baby age: <input type="text" value="<?php echo $rr1['b_age'] ?>" maxlength="3" name="b_age" id="age" class="form-control" title="age" placeholder="Age of the baby" required onchange="Validage();">
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
                                        &nbsp&nbsp&nbsp Gender : <input type="radio" name="b_gender" value="male" <?php if($rr1['b_gender']=='male') { ?> checked="checked" <?php } ?>   > Male
					<input type="radio" name="b_gender" value="female" <?php if($rr1['b_gender']=='female') { ?> checked="checked" <?php } ?> > Female
				</div>
			</div>

			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
                                        Name of the baby:<input type="text" name="bnme" value="<?php echo $rr1['b_name'];?>" id="bnme" class="form-control" title="Name of the baby" placeholder="Name of the child [Eg: Sruthi]" required onchange="Validate();">
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
                                        <select name="rbaby" class="form-control" required=""  onchange="relationdisplay(this.value)">
                                            <option>Relation To The Baby</option>
                                            <option value="Father" <?php if($rr1['b_relation']=='Father') { ?> selected="selected"  <?php } ?> >Father</option>
                                            <option value="Mother" <?php if($rr1['b_relation']=='Mother') { ?> selected="selected"  <?php } ?>>Mother</option>
                                            <option value="Other" <?php if($rr1['b_relation']=='Other') { ?> selected="selected"  <?php } ?>>Other</option>
                                        </select>
                                        
				</div>
			</div>
                        <div class="form-holder" id="father" style="display: none">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-user"></span>
                                        Name of the father: <input type="text" value="<?php echo $rr1['b_fname'];?>" name="fname" id="fname" value="Father Name" class="form-control" title="Name of the father" placeholder="Name of the father [Eg: Siva]" required onchange="Validate1();">
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
					Name of the mother: <input type="text" value="<?php echo $rr1['b_mname'];?>" name="mname" value="Mother Name" id="mname" class="form-control" title="Name of the mother" placeholder="Name of the mother [Eg: Sangitha]" required onchange="Validate2();">
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
					Other: <input type="text" name="other" value="<?php echo $rr1['b_other'];?>" id="other" value="Person Name"  class="form-control" title="Name of the Other Person" placeholder="Name of the Person [Eg: Sangitha]" required >
				</div>
			</div>
			<div class="form-holder">
				<div style="padding-top: 7px;padding-bottom: 23px;width:25%">
					<span class="lnr lnr-apartment"></span>
					Address of the parents: <input type="text" value="<?php echo $rr1['b_address'];?>" name="b_add" id="add" class="form-control" title="Address" placeholder="Address" required onchange="Validname();">
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
					Place of birth: <input type="text" name="place" value="<?php echo $rr1['b_pob'];?>" id="place" class="form-control" title="Place" placeholder="Place of birth" required onchange="Validplace();">
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
					Hospital Name: <input type="text" value="<?php echo $rr1['b_hospital'];?>" name="hos" id="hos" class="form-control" title="Hospital" placeholder="Hospital" required onchange="Validhos();">
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
					Baby weight: <input type="text" value="<?php echo $rr1['b_weight'];?>" maxlength="3" name="weight" id="weight" class="form-control" title="weight" placeholder="weight of the baby in kg" required onchange="Validw();">
				</div>
			</div>
			<span id="msg7" style="color:red;"></span>
			<script>
				function Validw() {
					var val = document.getElementById('weight').value;

					if (!val.match(/^[0-9]+([.0-9]+)?$/)) {
						document.getElementById('msg7').innerHTML = "Type 0.00 not as .00 and Only numbers are allowed";
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
					Baby height: <input type="text" value="<?php echo $rr1['b_height'];?>" maxlength="4" name="height" id="height" class="form-control" title="Height" placeholder="Height of the baby in cm" required onchange="Validh();">
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
    <?php 
    if(isset($_POST['submit']))
{    
    $b_dob=$_POST['b_dob'];
	$b_age=$_POST['b_age'];
	$b_gender=$_POST['b_gender'];
    $b_name=$_POST['bnme'];
    $b_relation=$_POST['rbaby'];
	$b_fname=$_POST['fname'];
	$b_mname=$_POST['mname'];
        $b_other=$_POST['other'];
	$b_address=$_POST['b_add'];
	$b_pob=$_POST['place'];
	$b_hospital=$_POST['hos'];
    $b_weight=$_POST['weight'];
    $b_height=$_POST['height'];		
	
		
   $sql = "update `tbl_baby` set `b_dob`='$b_dob',`b_age`='$b_age',`b_gender`='$b_gender',`b_name`='$b_name',`b_relation`='$b_relation',`b_fname`='$b_fname',`b_mname`='$b_mname',`b_other`='$b_other',`b_address`='$b_address', `b_pob`='$b_pob', `b_hospital`='$b_hospital',`b_weight`='$b_weight',`b_height`='$b_height' where b_id='$pd'";
	
     if (mysqli_query($con, $sql))
	 {
		echo "<script>location='viewbaby.php?show=Added succesfully...'</script>";
     } 
	 else 
	 {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
		
     }
     mysqli_close($con);
}

    ?>
</center>
<!-- End of add baby details -->

<?php
include 'userfooter.php';
?>