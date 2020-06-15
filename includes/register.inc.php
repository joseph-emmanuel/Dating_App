<?php
include_once "../model/user.model.php";
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $level= $_POST['level'];
    $password= $_POST['pwd'];
    $passwordRepeat= $_POST['pwd-repeat'];

    echo "first Name :".$fname."<br>";
    echo "last Name :".$lname."<br>";
    echo "femail :".$email."<br>";
    echo "level :".$level."<br>";
    echo "pwd :".$password."<br>";
    echo "rpwd :".$passwordRepeat."<br>";
    $newuser=new User();
    $newuser->defaultCon($fname,$lname,$email,$password,$level);
    // defaultCon
    echo "br";
    print_r($newuser);
    if($newuser->setUser($fname,$lname,$email,$password,$level)){
        echo "sccessfully inserted the data";
    }


//             mysqli_stmt_bind_param($stmt,"s",$username);
//             mysqli_stmt_execute($stmt);
//             mysqli_stmt_store_result($stmt);
//             $resultCheck=mysqli_stmt_num_rows($stmt);
//             if ($resultCheck>0){
//                 header("location: ../signup.php?error=usertaken&mail=".$email);
//                 exit();
//             }
//             else{
//                 $sql="insert into users(uidUsers,emailUsers,pwdUsers) values(?,?,?)";
//                 $stmt=mysqli_stmt_init($conn);
//                 if (!mysqli_stmt_prepare($stmt,$sql)){
//                     header("location: ../signup.php?error=sqlerror2");
//                     exit();
//                 }
//                 else{
//                     $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
//                     mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
//                     mysqli_stmt_execute($stmt);
//                     header("location: ../signup.php?signup=sucess");
//                     exit();
//                 }
//             }
//         }
//     }
//     mysqli_stmt_close($stmt);
//     mysqli_stmt_close($conn);
// }
// else{
//     header("location: ../signup.php?");
//     exit();
// }