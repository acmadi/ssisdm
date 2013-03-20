var xmlHttp;
function gettgl_akhir()
{

//var  tgl_awal= document.getElementById("tgl_awal").value;
//var  periode_kontrak= document.getElementById("periode_kontrak").value;
var tgl_awal = document.formData.tgl_awal.value;
var periode_kontrak = document.formData.periode_kontrak.value;
    if (tgl_awal.length == 0) {
		alert(" tgl awal  tidak boleh kosong");
		document.formData.tgl_awal.focus();
		return false;
   	}	
	    if (periode_kontrak.length == 0) {
		alert(" periode kontrak awal  tidak boleh kosong");
		document.formData.periode_kontrak.focus();
		return false;
   	}	
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="gettgl_akhir.php";
url=url+"?tgl_awal="+tgl_awal;
url=url+"&periode_kontrak="+periode_kontrak;
//url=url+"&kelompok="+kelompok;
//url=url+"&namaBekal="+namaBekal;

//url=url+"&sid="+Math.random();
xmlHttp.onreadystatechange=stateChanged4divtgl_akhir;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function stateChanged4divtgl_akhir() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("divtgl_akhir").innerHTML=xmlHttp.responseText;
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
