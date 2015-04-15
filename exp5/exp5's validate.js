function validateusn()
{
 var dom=document.getElementById("usn");
 var str=dom.value;
 var pos=str.search(/^[1-4][A-Z]{2}\d{2}[A-Z]{2}\d{3}$/);
 if(pos!=0)
 {
	alert("Incorrect USN. An example: 1MS13IS087");
 	dom.focus();
	dom.select();
	return false;
 }
 else
 {
	alert("USN is correct");
	return true;
 }	
}

function validatesem()
{
 var dom=document.getElementById("sem");
 var str=dom.value;
 var pos=str.search(/^[1-8]$/);
var po=str.search(/^[0][1-8]$/);
 if(pos==0 || po==0)
 {
	alert("Sem is correct");
	return true;
 }
 else
 {
	alert("Invalid semester. Enter again.");
 	dom.focus();
	dom.select();
	return false;
 }	
}
