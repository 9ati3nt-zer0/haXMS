<?php

//Hxmnews
function hxmnews() {
 require('db_core.php');
 $query = "SELECT id, name, author, content, DATE_FORMAT(date, '%M %d, %Y') as sd FROM news_table ORDER BY date DESC";
 $result = @mysql_query($query);

 if ($result) {
 while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

 echo '<div class="news"><div align="center"><div class="name">'.$row['name'].'</div></div><div align="center"><div class="author">By: '.$row['author'].' ~ Posted On: '.$row['sd'].
'</div></div><br /><div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">'.$row['content'].'</span></div><br/>
</div><div class="space2"></div>';
      }
      } else {
      echo 'Updating news archive. Please check back later! :)';
      }
 }

  //Guests
function guestnews() {

?>
  <div class="news">
    <div align="center">
      <div class="author">
        Project: HaxMe
      </div>
    </div>

    <div align="center">
      <div class="author">
        By: cwade12c @ 5/28/2010
      </div>
    </div><br />

    <div align="left">
        <span><font size="2">
        Welcome to Project: HaxMe. We are currently within our Beta stage; meaning,
        there may be a few bugs, and the site appearance + system is not finalized. The
        database + account system is however finalized; so any change in the future will
        not affect your account/status.
        </font></span></div>
      </div>
    </div><br />
  </div>

  <?php
  }

   //Nav Links

  ###########################
  $main = array(
  "home-title"=>"HaxMe Home", "home"=>"Home",
  "forum-title"=>"Talk Security", "forum"=>"Forums",
  "mpanel-title"=>"Edit your profile information", "mpanel"=>"Edit Profile",
  "content-title"=>"Submit content to HaxMe", "submit"=>"Submit Content",
  "login-title"=>"Login to HaxMe to gain access to premium content and missions", "login"=>"Login",
  "logout-title"=>"Logout of HaxMe", "logout"=>"Logout",
  "reg-title"=>"Register an account to login", "reg"=>"Register");
  ###########################

  ###########################
  $missions = array(
  "novice-title"=>"Introductory security challenges", "novice"=>"Novice",
  "web-title"=>"Intermediate security challenges", "web"=>"Web",
  "crypt-title"=>"Introductory to intermediate cracking challenges", "crypt"=>"Cryptography",
  "code-title"=>"Learn how to code", "code"=>"Programming",
  "team-title"=>"Work with friends to complete security challenges", "team"=>"Team",
  "insane-title"=>"Advanced security challenges", "insane"=>"Insane");
  ###########################

  $source = array(
  "missrc-title"=>"Access source code to HaxMe missions", "missrc"=>"Missions",
  "haxmssrc-title"=>"Access source code to bits of the haXMS system", "haxmssrc"=>"haXMS",
  "softsrc-title"=>"Access source code to exclusive HaxMe software", "softsrc"=>"Software");

  ###########################
  $exclusives = array(
  "paper-title"=>"Exclusive HaxMe papers", "paper"=>"Papers",
  "video-title"=>"Exclusive HaxMe videos", "video"=>"Videos",
  "download-title"=>"Exclusive HaxMe downloads", "download"=>"Downloads");
  ###########################

  ###########################
  $database = array(
  "tut-title"=>"Browse our collection of rich tutorials", "tut"=>"Tutorials",
  "vtut-title"=>"Watch and download high quality video presentations", "vtut"=>"Video Tutorials",
  "download-title"=>"Download free tools and documents", "download"=>"Downloads");
  ###########################

  ###########################
  $tools = array(
  "hasht-title"=>"Convert text to an array of hashes", "hasht"=>"Hash Tools",
  "radiot-title"=>"Listen to our live talk show", "radiot"=>"Talk Show",
  "theatert-title"=>"Watch live broadcasts / tutorials", "theatert"=>"Theater");
  ###########################

  ?>