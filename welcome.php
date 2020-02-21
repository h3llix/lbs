<?php 

include('config.php');
if(isset($_GET['request'])){

    $clientid = $_SESSION['id'];
    $bookid = $_GET['bookid'];
    $query = "INSERT INTO `ClientRequest` (`tokenid`, `bookid`, `clientname`, `status`) VALUES (NULL, '$bookid', '$clientid', '0')";
    if(mysqli_query($con, $query)){
        echo "Requested Successfully";
    }
}


?>



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
    <h2>
        <a href=/index.php>Logout</a>
        
    </h2>

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
    if($_SESSION['new']=='/admin.php')
    {
        header('location:welcome2.php');
    }
    include('config.php');
    $query="Select * from BookData";
    $result=mysqli_query($con,$query);






while($rows=mysqli_fetch_assoc($result))
{
    ?>

 <tr>
    <td><?php echo $rows['bookid']; ?></td>
    <td><?php echo $rows['bookname']; ?></td>
    <td><?php echo $rows['bookissued']; ?></td>
    <td><?php echo $rows['bookleft']; ?></td>
    <td>
       <a href="welcome.php?request=1&bookid=<?php echo $rows['bookid']; ?>&bookname=<?php echo $rows['bookname']; ?>"> Request Checkout</a>

    </td>

  </tr>

<?php
}
?>
  </table>



  
</body>



</html>