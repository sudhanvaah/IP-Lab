<!--sudo /opt/lampp/lampp start
cd /opt/lampp/htdocs
sudo gedit first.php
http://localhost
http://localhost/first.php
-->

<?php session_start();
	if(!IsSet($_SESSION["pn"]))
		$_SESSION["pn"=1;
	$pg=$_SESSION["pn"];
		$_SESSION["pn"]++;
	$num=rand(1,5);
	switch($num)
	{
		case 1: echo"Hello";break;
		case 2: echo"Hey";break;
		case 3: echo"All the best!";break;
		case 4: echo"Happy birthday";break;
		case 5: echo"Have a good day!";break;
	}
	print("Number of visitors: $pg");
?>
