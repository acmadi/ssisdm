<?php
function add_date($tglawal1,$periode_kontrak){
    $cd = strtotime($tglawal1);
    $retDAY = date('d-m-Y', mktime(0,0,0,date('m',$cd)+$periode_kontrak-1,date('d',$cd),date('Y',$cd)));
    $bulan = substr($retDAY,3,2);
	$tahun = substr($retDAY,-4);
	$lastday= date('d-m-Y',strtotime('-1 second',strtotime('+1 month',strtotime(date($bulan).'/01/'.date($tahun).' 00:00:00'))));

  return $lastday ;
} 
function add_datetgl($tgl,$tambah){
    $cd = strtotime($tgl);
    $retDAY = date('d-m-Y', mktime(0,0,0,date('m',$cd),date('d',$cd)+$tambah,date('Y',$cd)));
    $bulan = substr($retDAY,3,2);
	$tahun = substr($retDAY,-4);
	$lastday= date('d-m-Y',strtotime('-1 second',strtotime('+1 day',strtotime(date($bulan).'/01/'.date($tahun).' 00:00:00'))));

  return $lastday ;
} 
$bulan = array(1=>'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agust','Sep','Okt','Nov','Des');

$bulan_pjg = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

function inject($show){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($show,ENT_QUOTES))));
  return $filter;
}

function dateEuro2Sql($date){
 	$xdate	=	substr($date,3,2);
	$xmonth	=	substr($date,0,2);
	$xyear	=	substr($date,6,4);
	$filter	=	$xyear."-".$xmonth."-".$xdate;	
  return $filter;
}

function dateSql2Euro($date){
 	$xdate	=	substr($date,8,2);
	$xmonth	=	substr($date,5,2);
	$xyear	=	substr($date,0,4);
	$filter	=	$xmonth."/".$xdate."/".$xyear;	
  return $filter;
}



function StringIsSelected($value, $comparer) 

{

	if ($value == $comparer) 

		return "selected";

	else

		return "";

}



function ShortDateFormat($mysqldate) 

{

	global $bulan;

	

	list($y, $m, $d) = split('[/.-]', $mysqldate); 

	

	return "$d ". $bulan[$m] ." $y";

}



function IntIsSelected($value, $comparer) 

{

	$a = (int)$value;

	$b = (int)$comparer;

	

	if ($a == $b) 

		return "selected";

	else

		return "";

}



function StringIsChecked($value, $comparer) 

{

	if ($value == $comparer) 

		return "checked";

	else

		return "";

}



function IntIsChecked($value, $comparer) 

{

	if ($value == $comparer) 

		return "checked";

	else

		return "";

}



function RandStr($length) 

{

	$charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

	$s = "";

	while(strlen($s) < $length) 

		$s .= substr($charset, rand(0, 61), 1);

	return $s;		

}



function NamaBulan($bln) 

{

	if ($bln == 1)

		return "January";

	elseif ($bln == 2)

		return "February";		

	elseif ($bln == 3)

		return "March";		

	elseif ($bln == 4)

		return "April";		

	elseif ($bln == 5)

		return "May";

	elseif ($bln == 6)

		return "June";		

	elseif ($bln == 7)

		return "July";

	elseif ($bln == 8)

		return "August";		

	elseif ($bln == 9)

		return "September";

	elseif ($bln == 10)

		return "October";		

	elseif ($bln == 11)

		return "November";

	elseif ($bln == 12)

		return "December";		

}



function NamaHari($hari) 

{

	if ($hari == 1)

		return "Senin";

	elseif ($hari == 2)

		return "Selasa";		

	elseif ($hari == 3)

		return "Rabu";		

	elseif ($hari == 4)

		return "Kamis";		

	elseif ($hari == 5)

		return "Jumat";

	elseif ($hari == 6)

		return "Sabtu";

	elseif ($hari == 7)

		return "Minggu";

}



function rpad($string, $padchar, $length) 

{

	$result = trim($string);

	if (strlen($result) < $length) 

	{

		$nzero = $length - strlen($result);

		$zero = "";

		for($i = 0; $i < $nzero; $i++)

			$zero .= "0";

		$result = $zero . $result;

	}

	return $result;

}



function MySqlDateFormat($date) 

{

	list($d, $m, $y) = split('[/.-]', $date); 

	return "$y-$m-$d";

}



function RegularDateFormat($mysqldate) 

{

	list($y, $m, $d) = split('[/.-]', $mysqldate); 

	return "$d-$m-$y";

}



function LongDateFormat($mysqldate) 

{

	list($y, $m, $d) = split('[/.-]', $mysqldate); 

	return "$d ". NamaBulan($m) ." $y";

}



function TglDb($value) 

{

	$tgl = split('-', $value);

	$tglx = $tgl[2]."-".$tgl[1]."-".$tgl[0];

	return $tglx;

}



function TglText($value) 

{

	$tahun = substr($value,0,4);

	$bulan = substr($value,5,2);

	$tanggal = substr($value,8,2);

	$tgl=$tanggal."-".$bulan."-".$tahun;

	return $tgl;

}



function TglTextLong($value) 

{

	$value = trim($value);

	$tahun = substr($value, 0, 4);

	$bulan = substr($value, 5, 2);

	$tanggal = substr($value, 8, 2);

	

	switch ($bulan)

	{

		case 01:

			$nama_bulan="Januari";

			break;

		case 02:

			$nama_bulan="Februari";

			break;

		case 03:

			$nama_bulan="Maret";

			break;

		case 04:

			$nama_bulan="April";

			break;

		case 05:

			$nama_bulan="Mei";

			break;

		case 06:

			$nama_bulan="Juni";

			break;

		case 07:

			$nama_bulan="Juli";

			break;

		case 08:

			$nama_bulan="Agustus";

			break;

		case 09:

			$nama_bulan="September";

			break;

		case 10:

			$nama_bulan="Oktober";

			break;

		case 11:

			$nama_bulan="November";

			break;

		case 12:

			$nama_bulan="Desember";

			break;

	}

	

	if ($tanggal < 10)

	{

		$tanggal=substr($tanggal,1,1);

	} 

	else 

	{

		$tanggal=$tanggal;

	}

	

	$tgl = $tanggal." ".$nama_bulan." ".$tahun;

	return $tgl;

}



function TglTextShort($value) 

{

	$tahun = substr($value,0,4);

	$bulan = substr($value,5,2);

	$tanggal = substr($value,8,2);

	switch ($bulan)

	{

		case 01:

			$nama_bulan="Jan";

			break;

		case 02:

			$nama_bulan="Feb";

			break;

		case 03:

			$nama_bulan="Mar";

			break;

		case 04:

			$nama_bulan="Apr";

			break;

		case 05:

			$nama_bulan="Mei";

			break;

		case 06:

			$nama_bulan="Jun";

			break;

		case 07:

			$nama_bulan="Jul";

			break;

		case 08:

			$nama_bulan="Agust";

			break;

		case 09:

			$nama_bulan="Sep";

			break;

		case 10:

			$nama_bulan="Okt";

			break;

		case 11:

			$nama_bulan="Nov";

			break;

		case 12:

			$nama_bulan="Des";

			break;

	}

	if ($tanggal<10)

	{

		$tanggal=substr($tanggal,1,1);

	} 

	else 

	{

		$tanggal=$tanggal;

	}

	$tgl=$tanggal." ".$nama_bulan." ".$tahun;

	return $tgl;

}



function format_tgl($tanggal)

{

	$mdy = explode('-',$tanggal);

	$hasil = $mdy[2].' '.NamaBulan($mdy[1]).' '.$mdy[0];

	

	return $hasil;

}



function format_tgl_blnnmr($tanggal)

{

	$mdy = explode('-',$tanggal);

	$hasil = $mdy[2].'-'.$mdy[1].'-'.$mdy[0];

	

	return $hasil;

}



function unformat_tgl($tanggal)

{

	$mdy = explode('-',$tanggal);

	$hasil = $mdy[2].'-'.$mdy[1].'-'.$mdy[0];

	

	return $hasil;

}

	

function change_urut($a, $b, $c) 

{	

	$s = "";

	if ($a == $b) 

	{

		if ($c == "ASC") 

			$s = "<img src ='../../images/ico/descending copy.gif'>";

		else 

			$s = "<img src ='../../images/ico/ascending copy.gif'>";

	} 	

	return $s;

}



function random($number) 

{

	if ($number)

	{

    	for($i=1;$i<=$number;$i++)

		{

       		$nr=rand(0,9);

       		$total=$total.$nr;

       	}

    	return $total;

	}

}



function resize_foto($file) 

{

	$src = imagecreatefromjpeg($file); 

	$filename = "../temp/x.jpg";

	list($width,$height)=getimagesize($file);

	if ($width<$height)

	{

		$newheight=320;

		$newwidth=240;

	} 

	else if ($width>$height)

	{

		$newwidth=320;

		$newheight=240;

	}

	$tmp=imagecreatetruecolor($newwidth,$newheight);

	imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

	imagejpeg($tmp,$filename,100);

	imagedestroy($src);

	imagedestroy($tmp);

}



function JmlHari($bln, $th) 

{

	if ($bln == 4 || $bln == 6|| $bln == 9 || $bln == 11) 

		$n = 30;

	else if ($bln == 2 && $th % 4 <> 0)

		$n = 28;

	else if ($bln == 2 && $th % 4 == 0)

		$n = 29;

	else 

		$n = 31;

	return $n;

}	



function date2datesql ($date) {

	$my_year = substr($date, 6);

	$my_month = substr($date, 3, 2);

	$my_day = substr($date, 0, 2);



	$datesql = "$my_year-$my_month-$my_day";



	return $datesql;

}

function datedatesql ($date) {

    if (strlen($date)>=10)

	{

	$my_year = substr($date, 0, 4);

	$my_month = substr($date, 5, 2);

	$my_day = substr($date, 8, 2);

    $datesql = "$my_day-$my_month-$my_year";

    }else

	{

	$datesql = "";

	}

	return $datesql;

}

function datedatesqla ($date) {

    if (strlen($date)>=10)

	{

	$my_year = substr($date, 0, 4);

	$my_month = substr($date, 5, 2);

	$my_day = substr($date, 8, 2);

    $datesql = "$my_day/$my_month/$my_year";

    }else

	{

	$datesql = "";

	}

	return $datesql;

}
function bulanromawi($value) 

{

	$value = trim($value);

	$tahun = substr($value, 0, 4);

	$bulan = substr($value, 5, 2);

	$tanggal = substr($value, 8, 2);

	

	switch ($bulan)

	{

		case 01:

			$nama_bulan="I";

			break;

		case 02:

			$nama_bulan="II";

			break;

		case 03:

			$nama_bulan="III";

			break;

		case 04:

			$nama_bulan="IV";

			break;

		case 05:

			$nama_bulan="V";

			break;

		case 06:

			$nama_bulan="VI";

			break;

		case 07:

			$nama_bulan="VII";

			break;

		case 08:

			$nama_bulan="VIII";

			break;

		case 09:

			$nama_bulan="IX";

			break;

		case 10:

			$nama_bulan="X";

			break;

		case 11:

			$nama_bulan="XI";

			break;

		case 12:

			$nama_bulan="XII";

			break;

	}

	



	



	return $nama_bulan;

}
?>