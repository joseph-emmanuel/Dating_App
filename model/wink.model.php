<?php 
include_once "dbh.php";
class Wink extends dbh{
   
    public function selectWinks($uname){
        $sql="select * from users full join wink where uid=?";
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
    public function removewink($wid){
        
        // $sql="INSERT INTO `users` (`fname`, `lname`, `email`, `pwd`, `ulevel`,'img')  values(?,?,?,?,?,?)";
        $sql="DELETE FROM wink WHERE wid=?";
        $stmt=$this->connect()->prepare($sql);
        $ans=$stmt->execute([$wid]);
        return $ans;
    }
    
    
}