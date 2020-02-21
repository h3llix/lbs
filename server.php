<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', 'MySQL', 'new');

if (isset($_POST['signup'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password= mysqli_real_escape_string($db, $_POST['password']);
 


  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
 

  $user_check_query = "SELECT * FROM UserData WHERE username='$username' OR email='$email' LIMIT 1";
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
  	$password = md5($password);
  	$query = "INSERT INTO UserData (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: welcome.php');
  }
}



if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM UserData WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $get_id = $results->fetch_assoc();
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $get_id['id'];
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: welcome.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
