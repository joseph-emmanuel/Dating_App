<?php 
include_once "../model/user.model.php";
$userName=$_POST['mailuid'];
$pwd=$_POST['pwd'];
$selected=new User();
$user=$selected->selectUser($userName);
// print_r($user);
if(isset($user) and $user[0]['pwd']==$pwd and $user[0]['email']==$userName){
    echo "sucessfully loged  in";
}
else{
    echo "not loged in";
}