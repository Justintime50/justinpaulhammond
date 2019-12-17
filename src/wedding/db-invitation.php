<?php

// Console error
$console = "<hr><b>Console:</b><br>";

// Stores login information externally
include '../../../sql-login.php';



////
// FORM VALIDATION
////

// This page should not be accessed directly. Form must be submitted to process code.
if(!isset($_POST['invitation']))
{
	echo "<br><b>ERROR</b><br>Access Denied";
	exit;
}

// These variables pulled from new technician form
$name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);
$street = filter_var($_POST["street"], FILTER_SANITIZE_SPECIAL_CHARS);
$city = filter_var($_POST["city"], FILTER_SANITIZE_SPECIAL_CHARS);

$state = $_POST["state"];
$zip = $_POST["zip"];
$email = $_POST["email"];




// Validate form has been filled completely before proceeding
if(empty($name) || empty($street) || empty($city) || empty($zip) || empty($email))
{
    echo "<br><b>ERROR</b><br>All fields are required, please go back and try again.";
    exit;
}

// Validate proper handling of input variables
// First Name
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  echo "<br><b>ERROR</b><br><b>Only letters and white spaces</b> allowed in the <b>name</b> field, please go back and try again."; 
  exit;
}

// Street
if (!preg_match("/^[a-zA-Z0-9 ]*$/",$street)) {
  echo "<br><b>ERROR</b><br><b>Only</b> letters and numbers</b> allowed in the <b>street</b> field, please go back and try again."; 
  exit;
}

// City
if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
  echo "<br><b>ERROR</b><br><b>Only letters</b> are allowed in the <b>city</b> field, please go back and try again."; 
  exit;
}

// Zip
if (!preg_match("/^[0-9]*$/",$zip)) {
  echo "<br><b>ERROR</b><br><b>Only numbers</b> are allowed in the <b>zip code</b> field, please go back and try again."; 
  exit;
}
if (strlen($zip)<5) {
  echo "<br><b>ERROR</b><br>The <b>zip code</b> you entered is less than 5 digits, please go back and try again."; 
  exit;
}
if (strlen($zip)>5) {
  echo "<br><b>ERROR</b><br>The <b>zip code</b> you entered is more than 5 digits, please go back and try again."; 
  exit;
}

// Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<br><b>ERROR</b><br><b>Invalid email format</b>, please go back and try again."; 
  exit;
}


////
// DATABASE
// (Form validated correctly)
////


// Use the Tuneup Technology database
$dbname = "weddings";

// Create connection
$conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);

// Validate connection
if ($conn->connect_error) {
    die($console. "Connection failed: " . $conn->connect_error. "<hr>");
} 

// sql to create table
$sql = "INSERT INTO justin_hammond_invitations (name, street, city, state, zip, email)
VALUES ('$name', '$street', '$city', '$state', '$zip', '$email')";


$query = mysqli_query($conn, $sql);
if($query) {
    echo "<script>alert('We have received your information. We will be sending invitations in a few weeks.');document.location.href = 'index.php';</script>";
} else {
    echo "SQL Error: " . $conn->error;
}

$conn->close();

?>