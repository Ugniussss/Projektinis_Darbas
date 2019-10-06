<?php

require "header.php";

?>
            <section class="main-section-style">
                <div class="main-style">
                <h2>Registracija</h2>
                <form class="signup-style" action="includes/signup.db.php" method="POST">
                    <input type="text" name="username" placeholder="Vartotojo Vardas">
                    <input type="text" name="email" placeholder="Elektroninis paštas">
                    <input type="password" name="pass" placeholder="Slaptažodis">
                    <input type="password" name="passwordRepeat" placeholder="Pakartok slaptažodį">
                    <button type="submit" name="submit">Registruotis</button>

                </form>
                </div>
            </section>


<?php

require "Footer.php";

?>