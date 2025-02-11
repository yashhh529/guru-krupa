<?php


$sever    ="localhost";
$username ="root";
$password  ="";
$dbname   ="webcoding";


$con = mysqli_connect($sever, $username, $password, $dbname);



if(!$con)
{
     echo "not connected";

}
else{ 

    echo"connected";
}
@$name    = $_POST['name'];
@$email    = $_POST['email'];


if (empty($email)) {
    echo "Email cannot be empty.";
    exit;  
}

@$message  = $_POST['textarea'];


$sql ="INSERT INTO `test`(`Name`, `Email`, `message`) VALUES ('$name','$email','$message')";



$result= mysqli_query($con , $sql);
if($result)

{

    echo "data submited";
}
else
{
     echo "query faild....!";
}
?>













































