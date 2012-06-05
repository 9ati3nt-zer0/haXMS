<?php
include('islogin.php');
?>
  <span class="label" style="margin-left:15px;">&nbsp; Main</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="index.php" title=
    "<?php echo $main['home-title']; ?>"><?php echo $main['home'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="http://haxme.org/forum/" title=
    "<?php echo $main['forum-title']; ?>"><?php echo $main['forum'];
    ?></a></span>
  </div><?php
  if ($islogin == 'true') {
      ?>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href=
    "http://haxme.org/forum/index.php?app=core&amp;module=usercp" title=
    "<?php echo $main['mpanel-title']; ?>"><?php echo $main['mpanel'];
        ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="submit.php" title=
    "<?php echo $main['content-title']; ?>"><?php echo $main['submit'];?></a></span>
  </div><?php }
  if ($islogin == 'true') {
      ?>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="logout.php" title=
    "<?php echo $main['logout-title']; ?>"><?php echo $main['logout'];
        ?></a></span>
  </div><?php
  } else {
      ?>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="login.php" title=
    "<?php echo $main['login-title']; ?>"><?php echo $main['login'];
        ?></a></span>
  </div><?php
  }
  ?><?php
  if ($islogin == 'true') {
      echo '<br />';
  } else {
      ?>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="register.php" title=
    "<?php echo $main['reg-title']; ?>"><?php echo $main['reg'];
        ?></a></span>
  </div><br />
  <?php
  }
  ?> <span class="label" style="margin-left:15px">&nbsp; Missions</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="novice.php" title=
    "<?php echo $missions['novice-title']; ?>"><?php echo $missions['novice'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="web.php" title=
    "<?php echo $missions['web-title']; ?>"><?php echo $missions['web'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="cryptography.php" title=
    "<?php echo $missions['crypt-title']; ?>"><?php echo $missions['crypt'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="programming.php" title=
    "<?php echo $missions['code-title']; ?>"><?php echo $missions['code'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="team.php" title=
    "<?php echo $missions['team-title']; ?>"><?php echo $missions['team'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="insane.php" title=
    "<?php echo $missions['insane-title']; ?>"><?php echo $missions['insane'];
    ?></a></span>
  </div><br />
  <span class="label" style="margin-left:15px;">&nbsp; Source</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="mission-src.php" title=
    "<?php echo $source['missrc-title']; ?>"><?php echo $source['missrc'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="haxms-src.php" title=
    "<?php echo $source['haxmssrc-title']; ?>"><?php echo $source['haxmssrc'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="soft-src.php" title=
    "<?php echo $source['softsrc-title']; ?>"><?php echo $source['softsrc'];
    ?></a></span>
  </div><br />
  <span class="label" style="margin-left:15px;">&nbsp; Archive</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="epapers.php" title=
    "<?php echo $exclusives['paper-title']; ?>"><?php echo $exclusives['paper'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="evideos.php" title=
    "<?php echo $exclusives['video-title']; ?>"><?php echo $exclusives['video'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="edownloads.php" title=
    "<?php echo $exclusives['download-title']; ?>"><?php echo $exclusives['download'];
    ?></a></span>
  </div><br />
  <span class="label" style="margin-left:15px;">&nbsp; Services</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="hash.php" title=
    "<?php echo $tools['hasht-title']; ?>"><?php echo $tools['hasht']; ?></a></span>
  </div>

  <div class="surroundlink">
    <span class="nav"><a href="radio.php" title=
    "<?php echo $tools['radiot-title']; ?>"><?php echo $tools['radiot']; ?></a></span>
  </div>

  <div class="surroundlink">
    <span class="nav"><a href="theater.php" title=
    "<?php echo $tools['theatert-title']; ?>"><?php echo $tools['theatert']; ?></a></span>
  </div>