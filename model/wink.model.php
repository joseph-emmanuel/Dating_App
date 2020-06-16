<?php 
include_once "dbh.php";
class Wink extends dbh{
   
    public function selectAllfavs($uname){
        $sql="select * from users full join fav where uid=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$uname]);
        $results=$stmt->fetchAll();
        return $results;
    }
    public function setWink($uname,$fname){
        
        // $sql="INSERT INTO `users` (`fname`, `lname`, `email`, `pwd`, `ulevel`,'img')  values(?,?,?,?,?,?)";
        $sql="INSERT INTO `wink` (`semail`, `remail`)  values(?,?)";
        $stmt=$this->connect()->prepare($sql);
        $ans=$stmt->execute([$uname,$fname]);
        return $ans;
    }
    public function removeFavs($uname,$fname){
        
        // $sql="INSERT INTO `users` (`fname`, `lname`, `email`, `pwd`, `ulevel`,'img')  values(?,?,?,?,?,?)";
        $sql="DELETE FROM fav WHERE uemail=? and femail=?";
        $stmt=$this->connect()->prepare($sql);
        $ans=$stmt->execute([$uname,$fname]);
        return $ans;
    }
    
    
}