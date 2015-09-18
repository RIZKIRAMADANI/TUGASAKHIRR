<?php
include "koneksi.php";
if (isset($_POST['smhs']))

{	
	$npm = $_POST['npm'];
	$nm_mhs = $_POST['nm_mhs'];
	$kd_jrs = $_POST['kd_jrs'];
	$nm_jrs = $_POST['nm_jrs'];
	$angkatan = $_POST['angkatan'];
	
	mysql_query ("insert into tbl_mhs (npm, nm_mhs, kd_jrs, nm_jrs, angkatan)
	value ('$npm','$nm_mhs', '$kd_jrs', '$nm_jrs', '$angkatan') ") or die ("Simpan Error");
?>
	<script>
	alert('Data Berhasil di Simpan');
	location.href ='FORM_MAHASISWA.php';
	</script>
<?php
}
else
if (isset($_POST['sjrs']))
{
$kd_jrs = $_POST['kd_jrs'];
$nm_jrs = $_POST['nm_jrs'];

mysql_query ("insert into tbl_jurusan (kd_jrs, nm_jrs)
value ('$kd_jrs', '$nm_jrs') ") or die ("Simpan Error");

?>
<script>
alert('Data Berhasil di Simpan');
location.href ='f_jurusan.php';
</script>
<?php
}
?>

