<?php
session_start();


$con = mysqli_connect("localhost","root","","hub");

$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);



$query_chk="select * from users where email='$email' and password='$password'";
$exe_chk=mysqli_query($con, $query_chk);
$num=mysqli_num_rows($exe_chk);

	if($num==1)
	{
	
	?>
		<script>
		window.location="index.html";
    	</script>
	<?php
	}
	else
	{
	?>
		<script>
		window.onload=function()
		{
		alert('Invalid Email or Password');
		window.location="index1.html";
		}
		</script>

	<?php
    }


?>
