var xmlHttp;
function getkecamatansekarang()
{
var  kabupatensekarang= document.getElementById("kabupatensekarang").value;
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="emget_kecamatansekarang.php";
url=url+"?kabupatensekarang="+kabupatensekarang;
//url=url+"&varbaris="+varbaris;
//url=url+"&kelompok="+kelompok;
//url=url+"&namaBekal="+namaBekal;

//url=url+"&sid="+Math.random();
xmlHttp.onreadystatechange=stateChanged4ass;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function stateChanged4ass() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("getkecamatansekarang").innerHTML=xmlHttp.responseText;
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
