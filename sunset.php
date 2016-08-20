<?php 
date_default_timezone_set('America/New_York');
$sun_info = date_sun_info(strtotime($_GET['year']."-".$_GET['month']."-".$_GET['day']), $longitude=33.9951047, $latitude=-84.0960053);
print date('g:i a',$sun_info['sunset']);
?>