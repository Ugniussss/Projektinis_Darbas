<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nike JUST DO IT</title>
    <link rel="icon" type="image/png" href="icons&images/title-icon.png"/>
    <link rel="stylesheet" type="text/css" href="Styles/style.css">
</head>
<body>

</body>
    <header>
        <nav>
            <div class="main-style">
            <ul>
                <li><a href="index.php">Pagrindinis</a></li>
               
            </ul>
            </div>
            <div class="login-style">
                <?php
                    if(isset($_SESSION['u_id'])){
                      echo  '<form action="includes/logout.db.php" method="POST">
                               <button type="submit" name="submit">Atsijungti</button>
                             </form>';
                    }
                    else{
                        echo ' <form action="includes/login.db.php" method="POST">
                                 <input type="text" name="username" placeholder="Vartotojo Vardas">
                                 <input type="text" name="pass" placeholder="Slaptažodis">
                                 <button type="submit" name="submit">Prisijungti</button>
                                </form>
                                <a href="signup.php">Registruotis</a>';
                    }

                ?>
            </div>
        </nav>
    </header>
</html>