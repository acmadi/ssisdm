<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Add Edit Delete Search & Pagination berbasis Ajax dengan JQuery</title>
<link rel="stylesheet" type="text/css" href="css/style-page.css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/pelanggan.js"></script>
</head>

<body>
<div id="divFormContent"></div>
<br /><input type="button" value="Tambah Pelanggan" id="btntambah"><input type="button" value="Tampilkan/Sembunyikan" id="btnhide" /><br /><br />

<div id="divSearch">
  <form id="formSearch">
  <table><tr>
  <td>Cari Berdasarkan</td><td><select id="pilihcari">
      <option value="namapelanggan">Nama Pelanggan</option>
      <option value="idpelanggan">ID Pelanggan</option>
      <option value="semua">Semua</option>
  </select></td>
  <td id="kolompilih"><input type="text" name="fieldcari" id="fieldcari" /></td><td>
  <input type="submit" value="Cari" /></td>
  </tr></table>
  </form><br />
</div>

<div id="divLoading"></div>
<div id="divPageData"></div>

</body>
</html>
