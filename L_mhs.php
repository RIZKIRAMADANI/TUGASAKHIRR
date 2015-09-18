<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #00FFCC}
body {
	background-color: #0000FF;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {color: #FFFF00}
-->
</style>
</head>

<body>
<form action="" method="post" name="form1" class="style1" id="form1">
  <p align="center">LAPORAN MAHASISWA </p>
  <div align="center">
    <table width="930" border="5" cellspacing="0" cellpadding="10">
      <tr>
        <td colspan="5"><span class="style3">SARING DATA MAHASISWA</span> 
          
          <label>
          <input name="data" type="text" id="data" />
          <input name="SARING" type="submit" id="SARING" value="SARING" />
          </label>        </td>
      </tr>
      <tr>
        <td width="76"><div align="center" class="style2">NPM</div></td>
        <td width="259"><div align="center" class="style2">NAMA MAHASISWA </div></td>
        <td width="213"><div align="center" class="style2">KODE JURUSAN </div></td>
        <td width="131"><div align="center" class="style2">NAMA JURUSAN </div></td>
        <td width="131"><div align="center" class="style2">ANGKATAN</div></td>
      </tr>
      <?php
	  include "koneksi.php";
	  $data = $_POST['data'];
	  $query = mysql_query ("select * from tbl_mhs where
	  npm like '%$data%' or
	  nm_mhs like '%$data%' or
	  kd_jrs like '%$data%' or
	  nm_jrs like '%$data%' or
	  angkatan like '%$data%' ") or die ("Saring Data Gagal");
	  while($rs = mysql_fetch_array($query))
	  {
	  $npm = $rs['npm'];
	  $nm_mhs = $rs['nm_mhs'];
	  $kd_jrs = $rs['kd_jrs'];
	  $nm_jrs = $rs['nm_jrs'];
	  $angkatan = $rs['angkatan'];
	  ?>	  
      <tr>
        <td><div align="center">
          <?=$npm?>
        </div></td>
        <td align="center"><?=$nm_mhs?></td>
        <td align="center"><?=$kd_jrs?></td>
	    <td align="center"><?=$nm_jrs?></td>
	    <td align="center"><?=$angkatan?></td>
      </tr>
      <?php
	  }
	  ?>
    </table>
  </div>
  <p align="center">
    <label></label>
    <label></label>
  </p>
</form>
<form action="cetak.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
  <label>
  <input name="print" type="submit" id="print" value="print" />
  </label>
</form>
<p>&nbsp;</p>
