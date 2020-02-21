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
  </tr>

<?php
}
?>
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
  
</body>



</html>