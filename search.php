<?php
        $name = $_GET['search'];
        $q="SELECT * FROM patient
        WHERE Fname LIKE '%{$name}%' OR Lname LIKE '%{$name}%' OR doctor LIKE '%{$name}%'";
        $con=mysqli_connect('localhost','root','','new');
        $res=mysqli_query($con,$q);
        while($row=mysqli_fetch_row($res))
        {
            echo'<!DOCTYPE html>
            <html>
            <head>
            </head>
            <style>
            h1 {text-align: center;
            color:rgb(107, 162, 167);}
            p {text-align: center;}
            div {text-align: center;
              border-style: dotted;}
              h6{
           </style>
            <body>
            <h1>Patient who took apppointment</h1>
                <div>
                <h4>Patient Name: '.$row[1].' '.$row[2].' .</h4>
                <h4>Phone Number: 0'.$row[3].'. </h4>
                <h4>Email: '.$row[4].' </h4>
                <h4>Address: '.$row[5].', '.$row[6].','.$row[7].'.</h4>
                <h4>Gender : '.$row[8].'. </h4>
                <h4>Age : '.$row[9].' . </h4>
                <a href="delete.php?Fname='.$row[1].'">delete information</a>
                </div>
            </body>
            </html>';
        }
    ?>