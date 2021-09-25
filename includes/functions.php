<?php 
    require '/includes/db.php';

    function registerScore($score){
        global $conn;

        if(isset($_SESSION["username"])){
            $username = $_SESSION["username"];
            $date = date("Y-m-d");
            $sql = "INSERT INTO scores (username,score,score_date) VALUES ($username,$score,$date)";
            $conn->query($sql) or die ("insert score was failed");
        }       

        
    }

    function loginUser($username,$password){
        global  $conn;
        $sql = "SELECT * FROM members  WHERE username=$username";
        $results = $conn->query($sql);

        if(mysqli_num_rows($results) > 0){
            while($row = $results->fetch_assoc()){
                if($row["password"] == $password){
                    redirect("index.php");
                }
            }
        }else{
            registerUser($username,$password);
        }

        confirmQuery($results);

    }

    function registerUser($username,$password){
        global $conn;
    
        if(isset($_SESSION["username"])){
            $username = $_SESSION["username"];
            $sql = "INSERT INTO members (username,score) VALUES ($username,$password)";
            $conn->query($sql);
        }       
        
    }

    function confirmQuery($result) {
        global $conn;
    
        if(!$result ) {    
            die("QUERY FAILED ." . mysqli_error($conn)); 
        } 
     }

     function redirect($location){
        return header("Location:" . $location);
    }

?>