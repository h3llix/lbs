<html>
<body>
    <h2>
        <a href=/index.php>Logout</a>
        
    </h2>
    <?php 
    session_start();
    echo $_SESSION['new'];
    if($_SESSION['new']=='/admin.php')
    {
        header('location:welcome2.php');
    }
    ?>

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