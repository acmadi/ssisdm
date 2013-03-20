var xmlHttp;
function getkelurahanasal()
{
var  kecamatanasal= document.getElementById("kecamatanasal").value;
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="emget_kelurahan.php";
url=url+"?kecamatanasal="+kecamatanasal;
//url=url+"&varbaris="+varbaris;
//url=url+"&kelompok="+kelompok;
//url=url+"&namaBekal="+namaBekal;

//url=url+"&sid="+Math.random();
xmlHttp.onreadystatechange=stateChanged4azz;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function stateChanged4azz() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("getkelurahanasal").innerHTML=xmlHttp.responseText;
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
