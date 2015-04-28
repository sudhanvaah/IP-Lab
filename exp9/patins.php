<?php
	$db=mysql_connect("localhost","root","");
	if(!db)
		exit("Error connecting to mysql".mysql_error());
	$er=mysql_select_db("hospital");
	if(!er)
		exit("Error opening hospital".mysql_error());	
	$t1=$_POST["t1"];
	$t2=$_POST["t2"];
	$t3=$_POST["t3"];
	$t4=$_POST["t4"];
	$query="insert into patient(pname,pno,disease,doctor) values ($t1,$t2,$t3,$t4);";
	$result=mysql_query($query);
	if(!$result)
		exit("Error executing query".mysql_error());
	print "Record successfully added";
	mysql_close();
?>
