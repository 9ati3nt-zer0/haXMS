<?php
include('config.php');
$redir = HOME;

header("location:$redir/forum/index.php?app=core&module=global&section=login&do=logout"); //Remember, IPB integration
?>