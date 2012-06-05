<?php
/* 
 * Software: haXMS 0.1 Pre-Release [Alpha]
 * License: GNU OpenSource Restricted || Some Rights Reserved
 * Author: cwade12c
 * Copyright: 2010 - Some Rights Reserved
 * Site: http://haxme.org/
 * 
 *  #####################################
 *  Please note, that most files are currently encoded to protect the unstable
 *  release of this software. While some source is available from the official site
 *  itself, please note that files are currently encoded to protect special server
 *  configurations and schemes. We 100% encourage opensource, and will keep 
 *  publishing source as we move along.
 *  #####################################
*/

// --> Website Information <-- 
define("HOME", "http://haxme.org/");
define("NAME", "HaxMe");
define("SLOGAN", "//Your Security");
define("AUTHOR", "cwade12c"); #Please leave this line intact!
define("COPYRIGHT", "&copy HaxMe 2010 - 2011 || All Rights Reserved");
define("KEYWORDS", "HaxMe,Hax,Me,How,To,Hack,Computer,Hacking,Security,Training,Networking,Programming,Web,2.0,Open,Source,Free,Tutorials,Videos,Downloads,Forums,Penetration,Grounds,Missions,Game,Project,Help,Exploits,Tech,Internet");
define("DESCRIPTION", "HaxMe is an opensource project - offering unlimited knowledge towards computer security, programming, and other tech-related fields.");
define("VERSION", "0.1A");
define("LOGOUT", "http://haxme.org/logout.php");

// --> IPBv3 DB Information <--
$host = 'ip';
$db = 'dbname';
$usr = 'username';
$pwd = 'password';
  ###<Do not edit>###
  $go = mysql_connect($host,$usr,$pwd);
  $sel = mysql_select_db($db,$go);
  return $go;
  ###</Do not edit>###
?>