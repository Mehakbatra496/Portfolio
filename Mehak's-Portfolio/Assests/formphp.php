<?php



// // define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website=$subjectsErr =$phoneErr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
    // echo $nameErr;
  } 
    if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fname"])) {
        $nameErr = "Only letters and white space allowed";
      }
      else {
        $Name = test_input($_POST["fname"]);
  }
  
  if (empty($_POST["femail"])) {
    $emailErr = "Email is required";
  }
  if (!filter_var($_POST["femail"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  } else {
    $Email = test_input($_POST["femail"]);
// echo "Email Id is : $Email";

  }
    
  if (empty($_POST["fgender"])) {
    $genderErr = "Gender is Required";
  } else {
    $gender = test_input($_POST["fgender"]);
  }

  if (empty($_POST["fphone"])) {
    $phoneErr = "Phone is Required";
  } else {
    $phone = test_input($_POST["fphone"]);
  }

  if (empty($_POST["fsubjects"])) {
    $subjectsErr = "subjects is required";
  } else {
    $subjects = test_input($_POST["fsubjects"]);
  }



}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
