<?php
    class db_register{
      #Insert Data
      public function Insert($user, $pass, $name, $email, $phone){
        $db = new Database();
        $conn = $db->connect();
        $sql = "INSERT INTO nguoidung(username, password, fullName, email, phone) VALUES(?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $user, $pass, $name, $email, $phone); 
        $stmt->execute();
        return $stmt->affected_rows;

        #Close connect
        mysqli_close($conn);
      }
        
      #Update Password
      public function Update($user, $pass){
        $db= new Database();
        $conn = $db->connect();
        $sql = "UPDATE nguoidung SET password = ?;
                WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss",$pass ,$user);
        $stmt->execute();
        return $stmt->affected_rows;
        mysqli_close($conn);
    }
    }

    function checkPass_input($pass, $re_pass){
            return $pass == $re_pass;
      
  }

  function checkPassLength($password)
  {
      if (strlen($password) < 8) {
          return false;
      }else{
        return true;
      }
  }
?>
