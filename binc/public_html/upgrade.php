<?php 

define('IN_MYBB', 1); require "./global.php";

add_breadcrumb("Upgrade", "upgrade.php"); 

eval("\$html = \"".$templates->get("upgrade")."\";"); 

output_page($html);

?>