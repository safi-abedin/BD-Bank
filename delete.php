    <?php
        $q="DELETE  FROM patient WHERE Fname = '$_GET[Fname]'";
        $con=mysqli_connect('localhost','root','','new');
        $res=mysqli_query($con,$q);
        header('location:show.php');
    ?>
