<?php

$con=mysqli_connect("localhost","u26561_user","hhhhhgggg","u26040_guvi");

$query = "insert into user(email, password) values ('$_POST[email]', '$_POST[password]')";
$r=mysqli_query($con,$query);


if($r<1){
echo "failed";    
}
else {
$json_data = json_encode($_POST);
file_put_contents($_POST['email'].'.json', $json_data);
echo '<script type="text/javascript">alert("success");location.href = "login.html";</script>';
}


?>
