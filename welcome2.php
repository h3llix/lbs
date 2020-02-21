

<?php

include('config.php');
$query="Select * from BookData";
$result=mysqli_query($con,$query);
 
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

<h2>Book Table</h2>

<table>
  <tr>
    <th>Book Id</th>
    <th>Book Name</th>
    <th>Book left</th>
    <th>Book Issued</th>
  </tr>



<?php


while($rows=mysqli_fetch_assoc($result))
{
    ?>

 <tr>
    <td><?php echo $rows['bookid']; ?></td>
    <td><?php echo $rows['bookname']; ?></td>
    <td><?php echo $rows['bookissued']; ?></td>
    <td><?php echo $rows['bookleft']; ?></td>
  </tr>

<?php
}
?>
  </table>
  <form action="insert.php" method="post">
    <p>
        <label >Book Name:</label>
        <input type="text" name="bookname" id="firstName">
    </p>
    <p>
        <label>Book Issued:</label>
        <input type="text" name="bookissued" id="lastName">
    </p>
    <p>
        <label >Book Left</label>
        <input type="text" name="bookleft" id="emailAddress">
    </p>
    <input type="submit" value="Submit">





</body>
</html>