<?php

/* The following is for our SECOND database.
This database holds missions, archive content, security information, etc.
*/

DEFINE ('haxme_user', 'username2');
DEFINE ('haxme_password', 'password2');
DEFINE ('haxme_host', 'ip2');
DEFINE ('haxme_container', 'database2');

$dbc = @mysql_connect (haxme_host, haxme_user, haxme_password) OR die ('Could not connect to MySQL: ' . mysql_error());
@mysql_select_db (haxme_container) OR die('Could not select the database: ' . mysql_error() );
?>