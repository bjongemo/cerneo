<?php

$nm=$_GET["nm"];
mysql_connect("localhost","root","");
mysql_select_db("timecardmonitoring");
mysql_query("insert into timein values('$nm',NOW())");
?>