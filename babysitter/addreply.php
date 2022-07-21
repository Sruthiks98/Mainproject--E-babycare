<?php
include ("connect.php");
include 'userheader.php';
$id=$_GET['id'];
$uname=$_SESSION['username'];
?>

 <section class="client_section layout_padding">
    <div class="container">
      
      <div class="heading_container">
        <h2>
          Send Reply
        </h2>
      </div>
        <form method="post" action="">
             <table align="center" width="50%"   border="0" class="table table-bordered">
                            <tr>
                                <td>Reply</td>
                                <td><textarea name="reply"></textarea></td>
								</tr>	
                                                                <tr>
                                                                    <td>
                                                                        <input  type="hidden" name="hid" value="<?php echo $id;?>"/>
                                                                        <input type="submit" name="s1" class="btn btn-success" value="UPDATE"/></td>
                                                                </tr>
                                                                                      
                      </table>
        </form>
       <?php 
       if(isset($_POST['s1']))
       {
            $hid=$_POST['hid'];
          $reply=$_POST['reply'];
          $qf=  mysqli_query($con, "update tbl_bappointment set Reply='$reply'  where Id='$hid'");
          echo '<script>alert("Successfully send reply...!");
              window.location.href="viewappointment.php"</script>';
       }
       ?>
    </div>
  
  </section>






