<?php
session_start();


$username = "root";
$email    = "";
$errors = array();


$db = mysqli_connect('localhost', 'root', '', 'graphicalpass');


if (isset($_POST['reg_user'])) {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $radio = mysqli_real_escape_string($db, $_POST['radio']);
  $radio1 = mysqli_real_escape_string($db, $_POST['radio1']);
  $radio2 = mysqli_real_escape_string($db, $_POST['radio2']);
  $radio3 = mysqli_real_escape_string($db, $_POST['radio3']);
  $recaptcha_url="https://www.google.com/recaptcha/api/siteverify";
  $recaptcha_secret="6LcRhy4jAAAAALGXrY_06T2KO5E4MMFsgQ7DagF_";
  $recaptcha_response=$_POST['g-recaptcha-response'];
  $recaptcha=file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response);
  $recaptcha=json_decode($recaptcha);


  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

    if (count($errors) == 0) {
      if($recaptcha->success==1){
  	$password = md5($password_1);

  	$query="INSERT INTO  `users`( `username`, `email`, `password`, `radio`, `radio1`, `radio2`, `radio3`) VALUES ('$username','$email','$password','$radio','$radio1','$radio2','$radio3')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
}


if (isset($_POST['log_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $radio = mysqli_real_escape_string($db, $_POST['radio']);
  $radio1 = mysqli_real_escape_string($db, $_POST['radio1']);
  $radio2 = mysqli_real_escape_string($db, $_POST['radio2']);
  $radio3 = mysqli_real_escape_string($db, $_POST['radio3']);
  $recaptcha_url="https://www.google.com/recaptcha/api/siteverify";
  $recaptcha_secret="6LcRhy4jAAAAALGXrY_06T2KO5E4MMFsgQ7DagF_";
  $recaptcha_response=$_POST['g-recaptcha-response'];
  $recaptcha=file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response);
  $recaptcha=json_decode($recaptcha);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  
  if (empty($radio)) {
  	array_push($errors, "Select the graphical password");
  }
  if (empty($radio1)) {
  	array_push($errors, "Select the graphical password");
  }
  if (empty($radio2)) {
  	array_push($errors, "Select the graphical password");
  }
  if (empty($radio3)) {
  	array_push($errors, "Select the graphical password");
  }

  if (count($errors) == 0) {
    if($recaptcha->success==1){
  	$password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND radio='$radio' AND radio1='$radio1' AND radio2='$radio2' AND radio3='$radio3'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
}

?>
