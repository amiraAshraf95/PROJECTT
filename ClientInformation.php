
<?php
class clientinformationview{

function clientinformationhtml()
{



?>
<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="css2.css">
    </head>
    <body>
    
<ul>
   <li><a href="SignInController.php" >SignIn</a></li>
   <li> <a href="UserController.php" >ADDUSER</a></li>
   <li> <a href="profile.php" >Profile</a></li>	
   <li><a href="OrderController.php" >Order</a></li>
   <li><a href="ProductsTableController.php" >ProductsTable</a></li>
     <li><a href="deleteController.php" >Delete</a></li>
     <li><a href="ProductController.php" >Add Product</a></li>
	 <li><a href="DeleteOrderController.php" >Delete Order</a></li>
   <li><a href="map.php" >Map</a></li>
    <li><a href="mm.php" >Notification</a></li>
	 <li><a href="Bestseller.php" >BestSeller</a></li>
	 	 <li><a href="star.php" >Rating</a></li>
		 	<li><a href="ListOrder.php" >ListOrder</a></li>
   <li><a href="ListProduct.php" >ListProduct</a></li>
	<li><a href="ListCustomers.php" >Customers</a></li>
		<li><a href="SignOut.php" >SignOut</a></li>
  </ul>
<div id="ORD">
	
<fieldset>
	<legend>Client Information</legend>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		
                <b>ClientName:</b> 
                <input type="text" name="ClientName" required>
				<br>
				
				<b>Address:</b> 
                <input type="text" name="Address" required>
				<br>
				
                <b>Mobile:</b> 
                <input type="text" name="Mobile" required>
				<br>
              
			
				<br>
               <input name="submit" type="submit"  value="Done" >



        </form>
</fieldset>

<div>
<?php
}
}
?>
    </body>
</html>