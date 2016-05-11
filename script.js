var source = new EventSource("getEntrys.php");

if(typeof(EventSource) !== "undefined")
  {
  // Yes! Server-sent events support!
  // Some code.....
  }
else
  {
	alert("Kein Support! Bitte Browser upgraden!");
  }


/* source.onerror = function(event) //MAcht irgentwie immer ein error
{
	alert("ERROR: "+event.data);
};
 */


source.onmessage = function(event)
{
	var data = event.data.split("#");
	var name=new Array();
	var comment=new Array();
	var time=new Array();
	

	for(var i=0;i<data.length;i++)
	{
		name.push(data[i]);
		i++;
		comment.push(data[i]);
		i++;
		time.push(data[i]);
		
	}
	
	var newDiv="";
	
	for(var i=0;i<name.length;i++)
	{
		
		if((typeof name[i] !== 'undefined')&&(typeof comment[i] !== 'undefined')&&(typeof time[i] !== 'undefined'))
		{
			newDiv+="<div id=eintrag>";
			newDiv+="Name: "+name[i]+"<br>"+"Datum: "+time[i]+"<br>"+"Kommentar: "+comment[i]+"<br>";
			newDiv+="<div id=eintrag>";
			newDiv+="<br><br>";
		}
		else
		{
			
		}
		
	}
	
	
	
	document.getElementById("ausgabe").innerHTML =newDiv;
};








//EINGSABE


function makeEntry()
{
var name=document.forms["myForm"]["name"].value;
var comment=document.forms["myForm"]["comment"].value;

//# entfernen
name=name.replace("#","+");
comment=comment.replace("#","+");


if (name==null || name=="" || comment==null || comment=="" )
  {
  
  return false;
  }

  var xmlhttp;
  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		
    }
  }
xmlhttp.open("POST","makeEntry.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("name="+name+"&comment="+comment);



document.forms["myForm"]["comment"].value="";




}



















