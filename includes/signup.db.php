<?php

if (isset($_POST['signup-submit'])){

    include_once "dbh.db.php";

      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $pass = mysqli_real_escape_string($conn, $_POST['pass']);
      $passwordRepeat = mysqli_real_escape_string($conn, $_POST['passwordRepeat']);


    if (empty($username) || empty($email) || empty($pass) || empty($passwordRepeat)){
        header("location: ../signup.php?error=emptyfields");
        exit();

    }
    else {
        if(!preg_match("/^[a-zA-Z]*$/", $username))
        {
            header("location: ../signup.php?error=invalid");
            exit();
        }
        else{
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("location: ../signup.php?error=invalidemail=");
                exit();
        }
            else{

                $sql = "SELECT * FROM vartotojas WHERE username ='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0)
                {
                    header("location: ../signup.php?error=usertaken=");
                    exit();
                }
                else{
                    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO vartotojas (username, email, pass) VALUES ('$username', '$email', '$hashedPass');";
                    $result = mysqli_query($conn, $sql);
                    header("location: ../signup.php?success");
                    exit();

                }
            }
    }

    }

}
    else{
        header("location: ../signup.php");
    }