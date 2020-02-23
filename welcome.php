
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  

<h2>Book Table</h2>

<table>
  <tr>
    <th>Book Id</th>
    <th>Book Name</th>
    <th>Book left</th>
    <th>Book Issued</th>
  </tr>
    <?php
    session_start();
    echo $_SESSION['new'];
    if ($_SESSION['new']=='/admin.php') {
        header('location:welcome2.php');
    }
    include('config.php');
    $query="Select * from BookData";
    $result=mysqli_query($con, $query);






while ($rows=mysqli_fetch_assoc($result)) {
    ?>

 <tr>
    <td><?php echo $rows['bookid']; ?></td>
    <td><?php echo $rows['bookname']; ?></td>
    <td><?php echo $rows['bookissued']; ?></td>
    <td><?php echo $rows['bookleft']; ?></td>
    <td>
       

    </td>

  </tr>

<?php
}
?>
  </table>


<form method="post">
<input type="text" name="bookid">Enter Book Id</input>
<button type="submit" name="reqbookbtn">Request</button>
</form>


<?php
include('config.php');

if (isset($_POST['reqbookbtn'])) {
    $query="INSERT into issue_book VALUES('{$_SESSION['username']}','{$_POST['bookid']}','','','');";
    mysqli_query($con, $query);
}
?>





<table>
  <tr>
    <th>Book Id</th>
    <th>Approved</th>
    <th>Issued</th>
    <th>Return Book</th>
  </tr>
    <?php
    
    include('config.php');
    
    $q="SELECT * FROM issue_book WHERE username='$_SESSION[username]'";
    $result=mysqli_query($con, $q);

while ($rows=mysqli_fetch_assoc($result)) {
    ?>

 <tr>

    <td><?php echo $rows['bookid']; ?></td>
    <td><?php echo $rows['approve']; ?></td>
    <td><?php echo $rows['issue']; ?></td>
    <td><?php echo $rows['returnbook']; ?></td>
    

  </tr>

<?php
}
?>
  </table>
<?php
if ($_SESSION["username"]) {
    ?>
Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.</a>
<?php
} else {
        echo "<h1>Please login first .</h1>";
    }
?>  



</body>
</html>