var xmlHttp;
function hapuspendidikannonformal(pendidikannonf_id)
{

var  codetrx= document.getElementById("codetrx").value;
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
 {
 //alert ("Browser does not support HTTP Request");
 return;
 }
var url="tambahdatasekolahnf.php";
url=url+"?pendidikannonf_id="+pendidikannonf_id;
url=url+"&codetrx="+codetrx;

xmlHttp.onreadystatechange=stateChangedhapuspendidikannformal;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function stateChangedhapuspendidikannformal() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("hasilsimpanpendidikannf").innerHTML=xmlHttp.responseText;
 } 
}
function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}

