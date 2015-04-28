<?php
	$db=mysql_connect("localhost","root","");
	if(!db)
		exit("Error connecting to mysql".mysql_error());
	$er=mysql_select_db("hospital");
	if(!er)
		exit("Error opening hospital".mysql_error());	
	$t1=$_POST["t1"];
	$query="select * from patient where pno=$t1;";
	$result=mysql_query($query);
	if(!$result)
		exit("Patient doesn't exist".mysql_error());
	$row=mysql_fetch_array($result);	
	echo $row["pname"]."<br>";
	echo $row["pno"]."<br>";
	echo $row["disease"]."<br>";	
	echo $row["doctor"]."<br>";
	mysql_close();
?>
