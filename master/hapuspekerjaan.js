var xmlHttp;
function hapuspekerjaan(pengalaman_kerja_id)
{

var  codetrx= document.getElementById("codetrx").value;
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
 {
 //alert ("Browser does not support HTTP Request");
 return;
 }
var url="tambahpekerjaan.php";
url=url+"?pengalaman_kerja_id="+pengalaman_kerja_id;
url=url+"&codetrx="+codetrx;

xmlHttp.onreadystatechange=stateChangedhapuspekerjaan;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function stateChangedhapuspekerjaan() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("hasilsimpantambahpekerjaan").innerHTML=xmlHttp.responseText;
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

