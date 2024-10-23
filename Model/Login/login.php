
<?php
    class db_login{        
        public function checkUserExistence($user, $pass) {
            $db = new Database();
            $conn = $db->connect();
    
            $sql = "SELECT username, password FROM nguoidung WHERE username = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($pass, $row['password']))
                {
                    return true;
                } else 
                {
                    return false;
                }
            }
            else 
            {
                return false;
            }
    
            mysqli_close($conn);
        }
       

    }

?>