<?php 




$username           = $_POST['username'];
$firstname           = $_POST['firstname'];
$lastname           = $_POST['lastname'];
$address           = $_POST['address'];
$email              = $_POST['email'];
$mobile           = $_POST['mobile'];
$password        = $_POST['password'];








//create connection

$conn=new mysqli('localhost','root','','tailwaggers');

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO reguser(
    username,
    firstname,
    lastname,
    address,
    email,
    mobile,
    password


    )



VALUES(
    '$username',
    '$firstname',
    '$lastname',
    '$address',
    '$email',
    '$mobile',
    '$password'

)";


if ($conn->query($sql) === TRUE) {
    $newUserId = $conn->insert_id;
    echo "Account created successfully";
    header("refresh:1;url=profile.php?viewid=" . $newUserId);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>