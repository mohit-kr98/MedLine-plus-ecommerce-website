<nav class="navbar">
          <a href="../"><img style="height:30px; width:auto;" src="../Images/CenPharma_Logo.png" alt="CenPharma"/></a>
          <a href="../" style="margin-left:10px;">
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
