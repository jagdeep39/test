<?php
define('dbuser', 'localhost');
define('dbpass', '');
define('dbserver', '');
define('dbname', 'blood_donation');
$con=mysql_connect(dbuser,dbpass,dbserver,dbname);
if(!$con){
echo" ki gaal aaaa faild";
}
$quary="SELECT * FROM list_of_doners";
$result=mysql_query($con,$quary);
while($row=mysql_fetch_array($result)
{
	echo"".$row['Name']."";
}

?>