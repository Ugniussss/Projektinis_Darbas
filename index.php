<?php

require "header.php";

?>

 <section class="main-section-style">
     <div class="main-style">
         <?php
            if(isset($_SESSION['u_id']))
            {
                echo "Tu esi prisijungęs!";
            }
         ?>
     </div>
 </section>

<?php

require "Footer.php";

?>