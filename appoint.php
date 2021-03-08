<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$Email=$_POST['Email'];
$Street=$_POST['Street'];
$City=$_POST['City'];
$Zip=$_POST['Zip'];
$Date=$_POST['Date'];
$Age=$_POST['Age'];
$Pnumber=$_POST['Pnumber'];
$Gender=$_POST['Gender'];
$Day=$_POST['Day'];
$Time=$_POST['Time'];
$doctor=$_POST['doctor'];


$sql = "INSERT INTO patient(Fname,Lname,Email,Street,City,Zip,Date,Age,Pnumber,Gender,Day,Time,doctor)
VALUES ('$Fname','$Lname','$Email','$Street','$City','$Zip','$Date','$Age','$Pnumber','$Gender','$Day','$Time','$doctor')";


if ($conn->query($sql) === TRUE) {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
    
    </head>
    <style>
    h1 {text-align: center;
    color:rgb(107, 162, 167);}
    p {text-align: center;}
    div {text-align: center;
      border-style: dotted;}
   </style>
    <body>
        <div >
        <h1 >Hey Sir, $Fname $Lname your appointment is taken..</h1>
        <h6>Date:$Date</h6>
        <h6>Day:$Day</h6>
        <h6>Doctor Name: $doctor</h6>
        <p>please come in the $Time at our service center.......</p>
        <p>Thanks...</p>
        </div>
    </body>
    </html>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>