<?php

//////////////////////////////////////////////////////////////////////////////
// WEDDING STORY THEME v1.0 (2/15/17)
// Theme Created By Justin Hammond Web Design - www.justinpaulhammond.com/web
// Copyright (c) 2017 Justin Hammond Web Design
//
// DO NOT REMOVE THIS HEADER, DO NOT USE WITHOUT PERMISSION
//////////////////////////////////////////////////////////////////////////////


// Console error
$console = "<hr><b>Console:</b><br>";

// Stores login information externally
include '../../../../sql-login.php';



////
// FORM VALIDATION
////

// This page should not be accessed directly. Form must be submitted to process code.
if(!isset($_POST['contract-submit']))
{
	echo "<br><b>ERROR</b><br>Access Denied";
	exit;
}

// These variables pulled from new technician form
$name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);
$initials = filter_var($_POST["initials"], FILTER_SANITIZE_SPECIAL_CHARS);
$company = filter_var($_POST["company"], FILTER_SANITIZE_SPECIAL_CHARS);



// Validate form has been filled completely before proceeding
if(empty($name) || empty($initials) || empty($company))
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

// Initials
if (!preg_match("/^[a-zA-Z ]*$/",$initials)) {
  echo "<br><b>ERROR</b><br><b>Only</b> letters and numbers</b> allowed in the <b>initials</b> field, please go back and try again."; 
  exit;
}




////
// DATABASE
// (Form validated correctly)
////


// Use the Tuneup Technology database
$dbname = "web_design";

// Create connection
$conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);

// Validate connection
if ($conn->connect_error) {
    die($console. "Connection failed: " . $conn->connect_error. "<hr>");
} 

// sql to create table
$sql = "INSERT INTO launch_agreements (name, initials, company)
VALUES ('$name', '$initials', '$company')";


$query = mysqli_query($conn, $sql);
if($query) {
    echo "<script>alert('We have received your digital signature. Thank you.');document.location.href = '../index.php';</script>";
} else {
    echo "SQL Error: " . $conn->error;
}

$conn->close();

?>