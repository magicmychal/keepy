<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

// grabbing user imput
    $titleForm = $_POST['title'];
    $contentForm = $_POST['content'];
    $mailForm = $_POST['mail'];
    $nameForm = $_POST['name'];
    $currentDate ="22/12/1996";
    
    $color = 'onemoretime '; 
    /*
    $titleForm = 'tytukl';
    $contentForm = 'halo halo halo';
    $mailForm = 'tujestmail';
    $nameForm = 'mihal';
    $currentDate ="22/12/1996";
    
    $color = "lols";*/
    
require_once('db_con.php');
    
    
    
    $sql = "INSERT INTO notes(title, content, name, date, mail, color) VALUES (?,?,?,?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssssss',$titleForm, $contentForm, $mailForm, $nameForm, $currentDate, $color);
    
	$stmt->execute();
	$stmt->close();

    mysqli_close($con);
?>

</body>
</html>