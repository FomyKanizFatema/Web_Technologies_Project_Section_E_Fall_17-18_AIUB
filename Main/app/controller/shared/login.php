<?php
echo dirname(__DIR__);
include(dirname(__DIR__).'/../../Service/person.php');
$person['email']=$_REQUEST['email'];
$person['pass']=$_REQUEST['pass'];
$role=$_REQUEST['role'];

if($role="customer"){
	$fetchedUser=getUsersByEmail($person['email']);
	if($fetchedUser[0]['PASSWORD']==$person['pass']){
		session_start();
		$_SESSION['user']=$fetchedUser[0];
		?>
		
		
		<script type="text/javascript">
		window.location.href = '/project/main/app/controller/User/home.php';
		</script>
		<?php
}
	else{
			echo "wrong Password";
		}
}
?>
<script type="text/javascript">
window.location.href = '/project/main/app/controller/User/home.php';
</script>
<?php
//$url=dirname(__DIR__).'../User/home.php';
		//header('location:'.$url);
/**/
/*
else if($role="admin"){
	
	$fetchedUser=getemployeeByEmail($person['email']);
	if($fetchedUser[0]['PASSWORD']==$person['pass']){
		//header('location:'.dirname(__DIR__).'../Employee/home.php');
	header('location:C://xampp//htdocs/project/main/app/controller/User/home.php');
}
	else{
			echo "wrong Password";
		}
}

else if($role="employee"){
	
	$fetchedUser=getemployeeByEmail($person['email']);
	if($fetchedUser[0]['PASSWORD']==$person['pass']){
		//header('location:'.dirname(__DIR__).'../Employee/home.php');
	header('location:C://xampp//htdocs/project/main/app/controller/User/home.php');
}
	else{
			echo "wrong Password";
		}
}*/


?>