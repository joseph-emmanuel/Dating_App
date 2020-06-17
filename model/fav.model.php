<?php 
include_once "dbh.php";
class Fav extends dbh{
   
    public function selectAllfavs($uname,$email){
        $sql="select * from users,fav where users.uid=? and fav.uemail=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$uname,$email]);
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
    public function removeFavs($uname,$fname){
        
        // $sql="INSERT INTO `users` (`fname`, `lname`, `email`, `pwd`, `ulevel`,'img')  values(?,?,?,?,?,?)";
        $sql="DELETE FROM fav WHERE uemail=? and femail=?";
        $stmt=$this->connect()->prepare($sql);
        $ans=$stmt->execute([$uname,$fname]);
        return $ans;
    }
    
    
}