<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nike Parduotuvė</title>
    <link rel="stylesheet" type="text/css" href="Styles/style.css">
</head>
<body>

</body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Pagrindinis</a></li>
                <li><a href="#">Naujienos</a></li>
                <li><a href="#">Apie mus</a></li>
            </ul>
            <div>
                <form action="includes/login.php" method="post">
                    <input type="text" name="user" placeholder="Vartotojo Vardas">
                    <input type="text" name="pass" placeholder="Slaptažodis">
                    <button type="submit" name="login-submit">Prisijungti</button>
                </form>
                <a href="signup.php">Prisijungti</a>
                <form action="includes/logout.php" method="post">
                    <button type="submit" name="logout-submit">Atsijungti</button>
                </form>

            </div>

        </nav>
    </header>
</html>