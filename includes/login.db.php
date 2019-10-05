<?php

session_start();

if (isset($_POST['submit'])) {

    include "dbh.db.php";

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    if(empty($username) || empty($pass))
    {
        header("location: ../index.php?empty");
    }
    else{
        $sql = "SELECT * FROM vartotojas WHERE username ='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1)
        {
            header("location: ../index.php?login=error");
            exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                $hashedPassCheck = password_verify($pass,$row['pass']);
                if($hashedPassCheck == false)
                {
                    header("location: ../index.php?login=error");
                    exit();
                }
                else if($hashedPassCheck == true){
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_username'] = $row['username'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_pass'] = $row['pass'];
                    header("location: ../index.php?success");
                    exit();
                }
            }
        }
    }

}

else {
    header("location: ../index.php");
    exit();

}