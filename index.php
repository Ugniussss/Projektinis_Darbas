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
     <ul class ="menu-style">
         <li>
             <a href="clothes.php">
                 <span> Drabužiai</span>
             </a>
         </li>
         <li>
             <a href="boots.php">
                 <span>Batai</span>
             </a>
         </li>
     </ul>
 </section>

<?php

require "Footer.php";

?>