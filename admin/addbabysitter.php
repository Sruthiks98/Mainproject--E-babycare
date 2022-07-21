<?php
include 'adminheader.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   
  <style>

table
{
background-image: url("image/image.jpg");
text-shadow: hsla(hue, saturation, lightness, alpha);
background-color:white;
letter-spacing: 0pt;
width: 100px;
height: 50px;
border:10px ;
padding:12px;
margin-top:10px;
margin-left: 0px;
text-align: center;
}


.button
{
	width: 30%;
	background:#B12687 ;
	border: 1px solid;
	margin: 35px 0 10px;
	height: 32px;
	border-radius: 20px;
	padding: 0 10px;
	box-sizing: border-box;
	outline: none;
	color: #fff;
	cursor: pointer;
}
span{
font-size: 16px;
margin-left: 10px;
font family: sans-serif;
}

.input-box
{
width: 100%;
height: 35px;

	
	
	border-radius: 30px;
	padding: 0 10px;


}
</style>

   
   
</head>
<script language="javascript">

function abc()
{
if(document.form1.bbs_name.value=="" || document.form1.bbs_workmode.value=="" || document.form1.bbs_org.value=="" || document.form1.bbs_phn.value=="" || document.form1.bbs_email.value=="")
{
alert("PLEASE ENTER THE DETAILS");
return(false);

}


}


</script>

<body>
    <br><br><br><br>
    <h1><center>ADD BABYSITTER<center></h1>
 <center><div style=" background-color: lightgrey;">
<table width="844" height="353" border="0" cellpadding="0" cellspacing="0" class="table">
  <!--DWLayoutDefaultTable-->
 
  <tr class="table1">
    <td width="444" height="409">&nbsp;</td>
  <td width="433" valign="top"><form name="form1" class="table" method="post" action="addbabysitter_action.php" onSubmit="return abc()">
        <table width="150%" height="163" border="1" class="table">
		<?php
		if(isset($_GET['show'])) echo $_GET['show'];
		?>
          <tr>
            <td width="182"><div align="left"><strong>Babysitter Name </strong></div></td>
            <td width="248"><input name="bbs_name" class="input-box" type="text" id="bbs_name" placeholder="Enter Babysitter Name" onKeyPress="return alphabets(event)" required onchange="Validbbs_name();" ></td>
          </tr>
          <span id="msg1" style="color:red;"></span>
<script>		
function Validbbs_name() 
{
    var val = document.getElementById('bbs_name').value;

    if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) 
    {
        document.getElementById('msg1')
        alert("Start with a Capital letter & Only alphabets are allowed");
		            document.getElementById('bbs_name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
          <tr>
          <tr>
            <td height="27"><div align="left"><strong> Babysitter Work mode </strong></div></td>
            <td>
          <input type="radio"  name="bbs_workmode" value="government"> Government
					<input type="radio" name="bbs_workmode" value="own"> Own firm
					 </td>
          </tr>
            <td height="27"><div align="left"><strong> Name of the organisation working in </strong></div></td>
            <td><input name="bbs_org" type="text"  class="input-box" id="bbs_org"  placeholder="Enter Hospital/Firm name" onKeyPress="return alphabets(event)" required onchange="Validbbs_org();" ></td>
          </tr>
          <span id="msg2" style="color:red;"></span>
<script>		
function Validbbs_org() 
{
    var val = document.getElementById('bbs_org').value;

    if (!val.match(/^[A-Z][A-Za-z" "]{3,}$/)) 
    {
        document.getElementById('msg2')
        alert("Start with a Capital letter & Only alphabets are allowed");
		            document.getElementById('bbs_org').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
          <tr>
            <td height="27"><div align="left"><strong> Babysitter Phone number </strong></div></td>
            <td><input name="bbs_phn" type="text" maxlength="10" class="input-box" id="bbs_phn"  placeholder="Enter phone number" required onchange="Validbbs_phn();" ></td>
          </tr>
          <span id="msg3" style="color:red;"></span>
			
      <script>
      function Validbbs_phn() 
      {
          var val = document.getElementById('bbs_phn').value;
      
          if (!val.match(/^[7-9][0-9]{1,9}$/)) 
          {
              document.getElementById('msg3')
              alert("Only Numbers are allowed and must contain 10 number");
                      document.getElementById('bbs_phn').value = "";
              return false;
          }
      document.getElementById('msg3').innerHTML=" ";
          return true;
      }
      </script>
          <tr>
            <td height="27"><div align="left"><strong> Babysitter Email </strong></div></td>
            <td><input name="bbs_email" type="text"  class="input-box" id="bbs_email"  placeholder="Enter email" required onchange="Validbbs_email();" ></td>
          </tr>
          <span id="msg4" style="color:red;"></span>
<script>		
function Validbbs_email() 
{
    var val = document.getElementById('bbs_email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg4')
        alert("Enter a Valid Email");
		
		     document.getElementById('bbs_email').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

		</script>
		
          <tr>
            <td height="79" colspan="2"><div align="right"><input type="submit" class="button"  name="submit" value="Submit">
              <input type="reset"  class="button" name="Submit2" value="Reset">
            </div></td>
          </tr>
        </table>
		
    </form>    <form name="form2" method="post" action="">
        <!--<div align="center"><p class="p-button"><a href="adminBabysitterlist.php">VIEW Babysitter LIST</a></p>
        </div>-->
    </form>    <p>&nbsp;</p></td>
  <td width="457">&nbsp;</td>
  </tr>
</table>



<?php 

    include ("connect.php");
    $query = " select * from tbl_babysitter where bbs_status=1 ";
    $result = mysqli_query($con,$query);

?>

        
                    <div class=""><h3><center>BABYSITTER DETAILS</center></h3>
                        <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <th width> Sl no</th>
                                <th width> Babysitter Name </th>
                                <th width> Work Mode </th>
								<th width> Organization Name</th>
                                <th width> Phone Number</th>
                                <th width> Email</th>
                                <th width> Edit</th>
                                <th width> Block</th>
								</tr>				
                            <?php 
                                   $count=0; 
                                    while($row=mysqli_fetch_assoc($result))
										
                                    {
                                        $count++;
										?>
                                        
                                    <tr>
                                        <td><?php echo $count ?></td>
										
                                        <td><?php echo $row['bbs_name'] ?></td>
										<td><?php echo $row['bbs_workmode'] ?></td>
										<td><?php echo $row['bbs_org'] ?></td>
                                        <td><?php echo $row['bbs_phn'] ?></td>
                                        <td><?php echo $row['bbs_email']?></td>
                                        
                                         <td><a href= "adminbbs__update.php" class="btn btn-success">Edit/Update</a></td>
                                            <td><a href= "bbs_block.php?bbs_id=<?php echo $row['bbs_id']; ?>">
                                            <button type="button" class="btn btn-primary" id="btn" value="Block" onclick="myFunction()">Block</button>
                                        </a>
                                        </td>
                                        
<script>		
function myFunction() 
{
  
        document.getElementById('btn')
        alert("Blocked!");
        document.getElementById('btn').prop('disabled',true);
}	            
</script>
                                    </tr>   
                             <?php
									
									}									
                            
                             ?>                                                                   
                      </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
		