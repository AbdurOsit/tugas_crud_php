<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM `universitas_negeri_london`.`daftar_dosen` WHERE id = $id ");
if (mysqli_affected_rows($connect) > 0) {
	echo "<script>
       alert('DATA BERHASIL DIHAPUS');
       document.location.href = 'index.php';
	</script>";
}else{
	echo "<script>
       alert('DATA GAGAL DIHAPUS');
       document.location.href = 'index.php';
	</script><br>";
	echo mysqli_error($connect);
}
?>


<!-- sampang
P
Madrid

Strata III
2016
Kimia -->