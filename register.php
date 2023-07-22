 <?php include('server.php') 
                  
					
?>
<!DOCTYPE html>
<html>


<head>
  <title>Signup</title>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="reg.css">
  <script>
   function onSubmit(token) {
     document.getElementById("reg_user").submit();
   }
 </script>














</head>
<body class="container">
  <div class="header">
  	<centre><h2>Image Pixel Based Authentication System </h2></centre>
  </div>

  <form id="reg_user" method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	 <centre> <label>Username:</label></centre>
  	  <centre><input type="text" name="username" value="<?php echo $username; ?>"></centre>
  	</div>
  	<div class="input-group">
  	  <centre><label>Email:</label></centre>
  	  <centre><input type="email" name="email" value="<?php echo $email; ?>"></centre>
  	</div>
 
  	</div>
	</div>
  	<div class="input-group">
  	  <centre><label>Password:</label></centre>
  	  <centre><input type="password" name="password_1"></centre>
  	</div>
	<div class="input-group">
  	  <centre><label>Confirm password:</label></centre>
  	  <centre><input type="password" name="password_2"></cenetr>
  	</div>
  <br>	
<br>

<centre>
<table>
<tr>
	<div>
<label>
<input type="radio" name="radio" value="01"><img src="1.jpg"alt="random" width="250" height="120">
</label>

<label>
<input type="radio" name="radio" value="02"><img src="2.jpg"alt="random" width="250" height="120">
</label>

<label>
<input type="radio" name="radio" value="03"><img src="3.jpg"alt="random" width="250" height="120">
</label>

<label>
<input type="radio" name="radio" value="04"><img src="4.jpg"alt="random" width="250" height="120">
</label>


</div>

</tr>
</table>
</centre>
	</div>
	<div>
<label>
<input type="radio" name="radio1" value="10"><img src="1.0.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio1" value="11"><img src="1.1.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio1" value="12"><img src="1.2.jpg"alt="random" width="100" height="100">
</label>
<p></p>
<label>
<input type="radio" name="radio2" value="13"><img src="1.3.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio2" value="14"><img src="1.4.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio2" value="15"><img src="1.5.jpg"alt="random" width="100" height="100">
</label>
<p></p>
<label>
<input type="radio" name="radio3" value="16"><img src="1.6.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio3" value="17"><img src="1.7.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio3" value="18"><img src="1.8.jpg"alt="random" width="100" height="100">
</label>
</div>



<p></p>


<div>
<label>
<input type="radio" name="radio1" value="20"><img src="2.0.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio1" value="21"><img src="2.1.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio1" value="22"><img src="2.2.jpg"alt="random" width="100" height="100">
</label>
<p></p>
<label>
<input type="radio" name="radio2" value="23"><img src="2.3.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio2" value="24"><img src="2.4.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio2" value="25"><img src="2.5.jpg"alt="random" width="100" height="100">
</label>
<p></p>
<label>
<input type="radio" name="radio3" value="26"><img src="2.6.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio3" value="27"><img src="2.7.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio3" value="28"><img src="2.8.jpg"alt="random" width="100" height="100">
</label>
</div>
<p></p>
<div>
<label>
<input type="radio" name="radio1" value="30"><img src="3.0.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio1" value="31"><img src="3.1.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio1" value="32"><img src="3.2.jpg"alt="random" width="100" height="100">
</label>
<p></p>
<label>
<input type="radio" name="radio2" value="33"><img src="3.3.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio2" value="34"><img src="3.4.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio2" value="35"><img src="3.5.jpg"alt="random" width="100" height="100">
</label>
<p></p>
<label>
<input type="radio" name="radio3" value="36"><img src="3.6.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio3" value="37"><img src="3.7.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio3" value="38"><img src="3.8.jpg"alt="random" width="100" height="100">
</label>
</div>


<p></p>
<div>
<label>
<input type="radio" name="radio1" value="40"><img src="4.0.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio1" value="41"><img src="4.1.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio1" value="42"><img src="4.2.jpg"alt="random" width="100" height="100">
</label>
<p></p>
<label>
<input type="radio" name="radio2" value="43"><img src="4.3.jpg"alt="random" width="100" height="100">
</label>

<label>
<input type="radio" name="radio2" value="44"><img src="4.4.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio2" value="45"><img src="4.5.jpg"alt="random" width="100" height="100">
</label>
<p></p>
<label>
<input type="radio" name="radio3" value="46"><img src="4.6.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio3" value="47"><img src="4.7.jpg"alt="random" width="100" height="100">
</label>
<label>
<input type="radio" name="radio3" value="48"><img src="4.8.jpg"alt="random" width="100" height="100">
</label>
</div>















</centre>
</tr>
</table>


</centre>

	<div class="input-group">
  	  <centre>
		
	 
		<div class="g-recaptcha" data-sitekey="6LcRhy4jAAAAAF2AD0lFZbz4BVinOZdtswKlV6hX"></div>
		<button type="submit" class="btn" name="reg_user">Register</button>
	
	
	
	
	
	
	
	
	
	
	</centre>
  	</div>

             

  	
  	<p>
  		Already have an account <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
