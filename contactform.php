<?php 




$name               = $_POST['name'];
$email              = $_POST['email'];
$subject            = $_POST['subject'];
$message            = $_POST['message'];








//create connection

$conn=new mysqli('localhost','root','','tailwaggers');

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO contactus (
    name,
    email,
    subject,
    message


    )



VALUES(
    '$name',
    '$email',           
    '$subject',
    '$message'

)";





    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("refresh:2;url=contactview.php"); //this line used to redirect to the index.php page after 3 seconds
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>