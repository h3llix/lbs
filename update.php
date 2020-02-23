
<?php
include('config.php');
if (isset($_POST['appbook'])) {
    $q="UPDATE issue_book SET approve= '$_POST[approve]',issue= '$_POST[issue]',returnbook= '$_POST[return]' WHERE bookid='$_POST[bookid1]'AND username='$_POST[username]'";

    mysqli_query($con, $q);
    mysqli_query($con, "UPDATE BookData SET bookissued=bookissued+1, bookleft=bookleft-1 WHERE bookid='$_POST[bookid1]'");
    header('location:welcome2.php');
}


 if (isset($_POST['retbook'])) {
     $q="DELETE FROM issue_book WHERE  bookid='$_POST[bookid1]'AND username='$_POST[username]'";
     mysqli_query($con, $q);
     mysqli_query($con, "UPDATE BookData SET bookissued=bookissued-1, bookleft=bookleft+1 WHERE bookid='$_POST[bookid1]'");
     header('location:welcome2.php');
 }
