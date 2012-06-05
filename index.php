<?php
session_start();
include('interface/lockdown.php');
include('config.php');
include('inc/islogin.php');
require_once("interface/template.php");

fetchtemplate();
?>

<!--- Main Box =-->
    <div>Latest HaxMe News</div>
    <div>
      <br />
      <?php
      if ($islogin != 'true') {
       guestnews(); 
       }
      elseif ($islogin == 'true') {
       hxmnews();
       }
      ?><br />
    </div>
  </div><!--- End Main Box =-->
  <!--- Begin Footer =-->
  <?php
  footer();
  ?>
  <!--- End Footer =-->
  <!--- End Body =-->
  </body>
  </html>
