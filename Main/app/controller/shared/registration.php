<?php 
include(dirname(__DIR__).'/../../Service/person.php');
echo dirname(__DIR__);
$person['name']=$_REQUEST['name'];
$person['email']=$_REQUEST['email'];
$person['dob']=$_REQUEST['date']+'/'+$_REQUEST['month']+'/'+$_REQUEST['year'];
$person['dept']=$_REQUEST['dept'];
$person['gender']=$_REQUEST['gender'];
$person['pass']=$_REQUEST['pass'];
$person['phone']=$_REQUEST['phone'];
$person['status']="Active";
echo addUser($person);

?>