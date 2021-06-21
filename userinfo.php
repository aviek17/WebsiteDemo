<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'userifodata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userifodata (user,email,mobile,comment) values ('$user','$email','$mobile','$comment')";

// echo "$query";

mysqli_query($con,$query);

header('location:index.php');


?>



