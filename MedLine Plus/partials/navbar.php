<nav class="navbar">
          <a href="http://localhost/MedLine%20Plus/"><img style="height:30px; width:auto;" src="../Images/CenPharma_Logo.png" alt="CenPharma"/></a>
          <a href="http://localhost/MedLine%20Plus/" style="margin-left:10px;">
            MedLine Plus
          </a>
        <div class="navContent">
          <ul style="margin-right:auto;">
            <li><a href="../pharmacies">Pharmacies</a></li>
            <li><a href="../medicine">Medicines</a></li>
            <li><a href="../<?php if(isset($_SESSION['cenuser'])){echo "logout";} else{ echo "login"; } ?>.php"><?php if(isset($_SESSION['cenuser'])){echo "Logout";} else{ echo "Login"; } ?></a></li>
          </ul>
        </div>
      </nav>
