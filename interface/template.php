<?php

function strip_back($string){
  $clean = str_replace("\\", "", $string);
  return $clean;
}

/*
Lets create a function called "fetchtemplate", that we will use in almost every PHP file. We will have it require other PHP functions
from main.php, and it will hold / echo our main template HTML code, so we don't have to paste repetitive BIG BLOCKS of code.
*/

function fetchtemplate() { require_once('main.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="<?php echo HOME; ?>/favicon.ico" />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <meta name="description" content="<?php echo DESCRIPTION; ?>" />
  <meta name="keywords" content="<?php echo KEYWORDS; ?>" />
  <meta name="author" content="<?php echo AUTHOR; ?>" />
  <meta name="copyright" content="<?php echo COPYRIGHT; ?>" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
//Javascript goes here 
</script>

  <title><?php echo NAME . ' - ' . SLOGAN; ?></title>
  <!--- Include CSS here =-->
</head>
<body>
  <div>
    <div>
      <a href="#" title="Home"></a>
    </div>
    <div>
        <div>
          Navigation Panel
        </div>

        <div align="left">
          <?php include("inc/side_links.php"); ?>
        </div>

      <!--- Begin Donate Box =-->
      <?php include("inc/donate.php"); ?>
      <!--- End Donate Box =-->
      
      <!--- Begin Affiliates Box =-->
      <?php include("inc/affiliate.php"); ?>
      <!--- End Affiliates Box =-->
      
    </div>
    <?php
        }
        function footer() {
        include ("inc/footer.php");
        }
        ?>