<html>
<body>
    <h2>
        <a href=/index.php>Logut</a>
        
    </h2>
    <?php 
    session_start();
    echo $_SESSION['new'];
    if($_SESSION['new']=='/admin.php')
    {
        header('location:welcome2.php');
    }
    ?>
</body>



</html>