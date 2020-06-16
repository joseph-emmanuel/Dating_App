<?php 
include_once "dbh.php";
class Fav extends dbh{
   
    public function selectAllfavs($uname){
        $sql="select * from fav where uemail=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$uname]);

        $results=$stmt->fetchAll();
        return $results;
    }
    public function setFavs($uname,$fname){
        
        // $sql="INSERT INTO `users` (`fname`, `lname`, `email`, `pwd`, `ulevel`,'img')  values(?,?,?,?,?,?)";
        $sql="INSERT INTO `fav` (`uemail`, `femail`)  values(?,?)";
        $stmt=$this->connect()->prepare($sql);
        $ans=$stmt->execute([$uname,$fname]);
        return $ans;
    }
    
}