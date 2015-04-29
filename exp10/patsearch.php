<?php
	$db=mysql_connect("localhost","root","");
	if(!$db)
		exit("Error connecting to mysql".mysql_error());
	$er=mysql_select_db("telephone");
	if(!$er)
		exit("Error opening telephone ".mysql_error());	
	$t1=$_POST["t1"];
	$query="select * from patient where phone_no=$t1;";
	$result=mysql_query($query);
	if(!$result)
		exit("Phone number doesn't exist".mysql_error());
	$row=mysql_fetch_array($result);	
	echo $row["phone_no"]."<br>";
	echo $row["name"]."<br>";
	echo $row["address"]."<br>";	
	echo $row["pincode"]."<br>";
	mysql_close();
?>
