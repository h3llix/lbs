<?php

$db = mysqli_connect("localhost", "root", "MySQL", "new");
 
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$bookname = mysqli_real_escape_string($db, $_POST['bookname']);
$bookissued = mysqli_real_escape_string($db, $_POST['bookissued']);
$bookleft = mysqli_real_escape_string($db, $_POST['bookleft']);
 
$sql = "INSERT INTO BookData (bookname, bookissued, bookleft) VALUES ('$bookname', '$bookissued', '$bookleft')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
header('location:welcome2.php');

mysqli_close($db);
?>