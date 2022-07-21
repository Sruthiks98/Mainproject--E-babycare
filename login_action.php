<?php
include 'connect.php';
 	$uname=$_POST['username'];
 	$pwd=$_POST['pass'];
	// $p=md5($pwd);
	$b=mysqli_query($con,"SELECT * FROM `tbl_registration`");
	$a=mysqli_query($con,"select * from `tbl_login` where `uname`='$uname' and `pwd`='$pwd'");
	$row=mysqli_fetch_array($a);
	if(!empty($row))
	{
		if($row['role_id']==0)
		{
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:admin/adminindex.php?uid=$row[r_id]");
		}
		else if($row['role_id']==1)
		{
			if($row['l_status']==1)
			{
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:userhome.php?uid=$row[r_id]");
			}
			else{
				header("Location:login.php?error=Blocked");
			}
		}	
		else if($row['role_id']==2)
		{
			if($row['l_status']==1)
			{
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:pediatrician/userhome.php?uid=$row[r_id]");
			}
			else{
				header("Location:login.php?error=Blocked");
			}
		}
                else if($row['role_id']==3)
		{
			if($row['l_status']==1)
			{
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:nutrition/userhome.php?uid=$row[r_id]");
			}
			else{
				header("Location:login.php?error=Blocked");
			}
		}
                   else if($row['role_id']==4)
		{
			if($row['l_status']==1)
			{
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:babysitter/userhome.php?uid=$row[r_id]");
			}
			else{
				header("Location:login.php?error=Blocked");
			}
		}
		else 
		{	
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			if($uname==$_SESSION['username'])
			{
			header("Location:admin/index.php");
		}
		
	else
			{
				header("Location:login.php?error=Invalid Username/Password!!"); 
	
			}
		}
	}
	else
		header("Location:login.php?error=Invalid Username/Password!!"); 
	

	?>			

