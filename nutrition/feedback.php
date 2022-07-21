<?php
include 'userheader.php';
?>
<html lang="en">


	
<center>
		<div class="wrap-contact100">
			<span class="contact100-form-symbol">
				<img src="images/symbol-01.png" alt="SYMBOL-MAIL" width=100px>
			</span>

			<form action="feedback_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">
				<span class="contact100-form-title">
					<h1>Feedback</h1>
				</span>
				<!--<div class="form-floating">
                    <textarea class="form-control" placeholder="Write Us A Message" id="floatingTextarea" style="height: 100px;" style="width: 100px;" required></textarea>
                    <label for="floatingTextarea">Message</label>
                  </div>-->
			

				

				<div class="wrap-input100 validate-input">
					<textarea class="input100" name="message" placeholder="Write Us A Message" style="height: 200px;width: 300px;" required></textarea>
					<span class="focus-input100"></span>
				</div>
<head>
</center>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: auto;
  cursor: pointer;
}
.button2 {padding: 12px 28px;}
</style>
</head>
<button class="button button3" type="submit" name="submit">Send</button>
				
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

</html>