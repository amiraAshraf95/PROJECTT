<?php
session_start();
?>

<?php
require 'data.php';

$data = new Databasess;

if(isset($_POST['submit'])){
	
 
$tableName='user';

$data->sig($tableName,$_POST['Email'],$_POST['Password']);

}






?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css1.css">
</head>
<body>
<div id="mybar">
  <a href="SignIn.php" id="SignIn">SignIn</a>
  <a href="User.php" id="SignUp">ADDUSER</a>
  <a href="profile.php" id="profile">Profile</a>	
  <a href="EditProfile.php" id="EditProfile">Profile Edit</a>
  <a href="Order.php" id="Order">Order</a>
  <a href="StoreRoom.php" id="StoreRoom">Store Room</a>
  <a href="resources.php" id="resources">Resources</a>
  <a href="deliver.php" id="deliver">Deliver</a>
  <a href="attendence.php" id="attendence">Attendence</a>
  <a href="delete.php" id="delete">Delete</a>
  <a href="workerstable.php" id="workerstable">Worker Table</a>
  <a href="ProfitDeduction.php" id="PD">Profit Deduction</a>
</div>
<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div id="SINF">
	<fieldset>
	<legend> SignIN </legend>
	  <h1>Sign In</h1>
	  <hr>
	  
      <b>Email</b>
      <input name="Email" type="text" placeholder="Enter Username/ID" required>
	  
	  </br>
	  </br>

      <b>Password</b>
      <input name="Password" type="password" placeholder="Enter Password" required>
      
	  </br>
	  </br>
	  
     <!-- <button type="submit" name="submit">Login</button>-->
	  
	  <button type="button" name="cancel">Cancel</button>
<button class="loginbtn" name="submit" type="submit"   >Login</button>
	  
	  </br>
	  
      <p>Forgot <a href="#">password?</a><p>
	  
	  </fieldset>
    </div>
</body>
</form>
</html>