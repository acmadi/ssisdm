var xmlHttp;
function hapusorg(organisasi_id)
{

var  codetrx= document.getElementById("codetrx").value;
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
 {
 //alert ("Browser does not support HTTP Request");
 return;
 }
var url="tambahorg.php";
url=url+"?organisasi_id="+organisasi_id;
url=url+"&codetrx="+codetrx;

xmlHttp.onreadystatechange=stateChangedhapuskeluarga;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function stateChangedhapuskeluarga() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("hasilsimpantambahorg").innerHTML=xmlHttp.responseText;
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

