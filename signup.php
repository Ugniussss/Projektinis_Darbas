<?php

require "header.php";

?>

    <main>
        <div>
            <section>
                <h1>Registruotis</h1>
                <form action="includes/signup.db.php" method="POST">

                    <input type="text" name="username" placeholder="Vartotojo Vardas">
                    <input type="text" name="email" placeholder="Elektroninis paštas">
                    <input type="password" name="pass" placeholder="Slaptažodis">
                    <input type="password" name="passwordRepeat" placeholder="Pakartok slaptažodį">
                    <button type="submit" name="signup-submit">Registruotis</button>

                </form>
            </section>
        </div>
    </main>

<?php

require "Footer.php";

?>