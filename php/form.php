<?php
// define variables and set to empty values
$nameErr = $emailErr = $contentErr = $titleErr = "";
$name = $email = $content = $title = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "<div class='ui negative message'>
                <i class='close icon' data-vivaldi-spatnav-clickable='1'></i>
                <div class='error'>Hey! Stop!</div>
                <p><b>Name</b> is required</p>
                </div>";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "<div class='ui negative message'>
                <i class='close icon' data-vivaldi-spatnav-clickable='1'></i>
                <div class='error'>Hey! Stop!</div>
                <p>Only letters and white space allowed</p>
                </div>"; 
    }
  }

    if (empty($_POST["title"])) {
    $titleErr = "<div class='ui negative message'>
                <i class='close icon' data-vivaldi-spatnav-clickable='1'></i>
                <div class='error'>Hey! Stop!</div>
                <p><b>Title</b> is required</p>
                </div>";
  } else {
    $title = test_input($_POST["title"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
      $titleErr = "<div class='ui negative message'>
                <i class='close icon' data-vivaldi-spatnav-clickable='1'></i>
                <div class='error'>Hey! Stop!</div>
                <p>Only letters and white space allowed</p>
                </div>"; 
    }
  }

  
if (empty($_POST["mail"])) {
    $emailErr = "<div class='ui negative message'>
                <i class='close icon' data-vivaldi-spatnav-clickable='1'></i>
                <div class='error'>Hey! Stop!</div>
                <p><b>E-mail</b> is required</p>
                </div>";
  } else {
    $email = test_input($_POST["mail"]);
    // check if e-mail address is well-formed
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<div class='ui negative message'>
                <i class='close icon' data-vivaldi-spatnav-clickable='1'></i>
                <div class='error'>Hey! Stop!</div>
                <p>Invalid e-mail format</p>
                </div>"; 
    }
  }
      
  if (empty($_POST["content"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["content"]);
  }


}

    



?>
