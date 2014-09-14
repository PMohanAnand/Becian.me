<?php
$connect = mysqli_connect("localhost","username","","charan") or die("Error " . mysqli_error($connect));

$name=mysqli_real_escape_string($connect,$_POST['username']);
$email=mysqli_real_escape_string($connect,$_POST['req_email']);
$regno=mysqli_real_escape_string($connect,$_POST['regno']);
$facebook=mysqli_real_escape_string($connect,$_POST['facebook']);
$linkedin=mysqli_real_escape_string($connect,$_POST['linkedin']);
$reqmail=mysqli_real_escape_string($connect,$_POST['reqmail']);




if($connect)
{
	


 
mysqli_query($connect,"INSERT INTO bec(username,email, facebook, linkedin,reqmail,regno)
 VALUES ('$name', '$email', '$facebook', '$linkedin','$reqmail','$regno')") or die("Error " . mysqli_error($connect));
mysqli_close($connect);
header("Location: http://128.199.246.37/becian");
}
else
{
#just for trails purpose ,, here we have to redirect the page to the home and we have to make a alert by using javascript	
echo "insert broke ";



}

?>
