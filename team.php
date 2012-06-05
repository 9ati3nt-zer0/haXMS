<?php
#This is an unfinished file. 
#We are currently working on OUR team system and are making it as secure as possible.
#This is only a snippet of the actual TEAM system. 

include('check.php');
require_once("interface/template.php");
$memid = intval($_COOKIE['member_id']);

if ($boolean == "0") {

    $genid = "yes";
    //f == first
    $fteam = "yes";

} else {
    $genid = "no";
    //f == first
    $fteam = "no";
}

if ($genid == "yes") {

    //We have no team id number, lets generate the user one.

    $team_length = 128;

    function make_seed()
    {
        list($usec, $sec) = explode(' ', microtime());
        return(float) $sec + ((float) $usec * 100000);
    }

    srand(make_seed());

    $charset = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()";
    $tid = "";
    for ($i = 0; $i < $team_length; $i ++) {
        $tid .= $charset[rand(0, strlen($charset))];
        #update sql booleans
        mysql_query("UPDATE ipb_members SET booleancolumn = '1' WHERE member_id = '$memid'");
        mysql_query("UPDATE ipb_members SET tidcolumn = '1' WHERE member_id = '$memid'");
        mysql_query("UPDATE ipb_members SET tuidcolumn = '$tid' WHERE member_id = '$memid'");
    }
} else if ($genid == "no") {
    //lets get our previously generate tid
    $tuidcmd =  mysql_query("SELECT tuidcolumb FROM ipb_members WHERE member_id = '$memid'");
    $tuidcontainer = mysql_fetch_array($tuidcmd);
    //now lets set it
    $tuidf = stripslashes($tuidcontainer['tuid']);
}

/* That's all for now! I know, I know... this is a highly anticipated file. This is about 5x (if not more) as much
code to this. I just need to make sure it is working all nice and well, and I need to make sure it is secure as
possible. I will get this to you guys as soon as possible. Cheers. 
*/

?>

