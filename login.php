<?PHP

header("Content-Type: application/json; charset=UTF-8");


$con=mysqli_connect("localhost","u265610040_user","123456","u265610040_guvi");

$query = "select * from user where email='$_POST[email]' and password='$_POST[password]'";
$r=mysqli_query($con,$query);

if(mysqli_num_rows ($r)>0){
$data = file_get_contents($_POST["email"].".json");

echo json_encode($data);
}
else {
    echo 0;
}
?>