<?php
include('check.php');
require_once("interface/template.php");
fetchtemplate();
?>

<!--- Main Box =-->

<br />
<div>HaxMe Papers</div>
<div class="content">
<?php
if (is_numeric($_GET['id']) == true) {
    require('interface/db_core.php');
    $id = mysql_real_escape_string(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    $all = mysql_query("SELECT * FROM `archive_table` WHERE `id`='$id'") or die(mysql_error());
    $row = mysql_fetch_array($all);
    $stripped =  stripslashes ($row['content'])."</div>";
    echo strip_back($stripped);
    include("inc/page_copyright.php");
    echo "</div></div>";
} else {
    require('interface/db_core.php');
    $all = mysql_query("SELECT * FROM `archive_table` ORDER BY `id`") or die(mysql_error());
    ?>
    
    <div align="center">
    <table>
    <tr>
    
    <td><div align="center">Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    <td><div align="center">Author&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    <td><div align="center">Last Updated&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    
    </tr>
    <tr>
    
    <?php while ($row = mysql_fetch_array($all)) {
        if (empty($row)) {
            echo "Archive is currently undergoing maintenance. Please try back later.";
        }
        ?>

        <td><div align="center"><a href="?id=<?php echo $row['id'];?>"><?php echo stripslashes($row['title']); ?></a>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center"><?php echo stripslashes($row['author']); ?>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center"><?php echo stripslashes($row['lastupdated']); ?>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        </tr>
	<?php }
    ?>
    
    </table>
    </div>
    </div>
    
    <?php include("inc/page_copyright.php"); ?>
    
    </div>
</div> <?php }
?>
<!--- End Main Box =-->

<!--- Begin Footer =-->
<?php footer(); ?>
<!--- End Footer =-->
</div>
</body>
</html>