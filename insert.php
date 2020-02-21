<?php

$db = mysqli_connect("localhost", "root", "MySQL", "new");
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$bookname = mysqli_real_escape_string($db, $_POST['bookname']);
$bookissued = mysqli_real_escape_string($db, $_POST['bookissued']);
$bookleft = mysqli_real_escape_string($db, $_POST['bookleft']);
 
// Attempt insert query execution
$sql = "INSERT INTO BookData (bookname, bookissued, bookleft) VALUES ('$bookname', '$bookissued', '$bookleft')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
header('location:welcome2.php');
// Close connection
mysqli_close($db);
?>