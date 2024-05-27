<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$phone    = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('sql209.infinityfree.com', 'if0_35887786', 'F0xqWy5Gfq0', 'if0_35887786_register');


// REGISTER USER
if (isset($_POST['reg_owner'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($phone)) { array_push($errors, "phone is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
$query = "SELECT * FROM owner WHERE username = ? OR Email = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($row['Email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }
}
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO owner (username, Email, password,phone) 
  			  VALUES('$username', '$email', '$password','$phone')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
      $_SESSION['phone'] = $phone;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: owner.html');
  }
}




