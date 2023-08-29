<?php 




$name               = $_POST['name'];
$email              = $_POST['email'];
$subject            = $_POST['subject'];
$feedback           = $_POST['feedback'];








//create connection

$conn=new mysqli('localhost','root','','tailwaggers');

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO feedback(
    name,
    email,
    subject,
    feedback


    )



VALUES(
    '$name',
    '$email',           
    '$subject',
    '$feedback'

)";





if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("refresh:3;url=index.php"); //this line used to redirect to the index.php page after 3 seconds
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>