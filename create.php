<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$NO_INDUK= $_POST['NO_INDUK'];
	$Nama= $_POST['Nama'];
	$alamat= $_POST['alamat'];
	$jenis_kelamin= $_POST['jenis_kelamin'];
	$Tempat_Lahir= $_POST['Tempat_Lahir'];
	$Tanggal_Lahir= $_POST['Tanggal_Lahir'];
	$kualifikasi_akademik = $_POST['kualifikasi_akademik'];
	$tahun_lulus = $_POST['tahun_lulus'];
	$Bidang_Keahlian = $_POST['Bidang_Keahlian'];
	$query ="INSERT INTO `universitas_negeri_london`.`daftar_dosen`(
	`NO_INDUK`,
	`Nama`,
	`alamat`,
	`jenis_kelamin`,
	`Tempat_Lahir`,
	`Tanggal_Lahir`,
	`kualifikasi_akademik`,
	`tahun_lulus`,
	`Bidang_Keahlian`
	) 
	VALUES(
	'$NO_INDUK',
	'$Nama',
	'$alamat',
	'$jenis_kelamin',
	'$Tempat_Lahir',
	'$Tanggal_Lahir',
	'$kualifikasi_akademik',
	'$tahun_lulus',
	'$Bidang_Keahlian')";

	mysqli_query($connect,$query);
	if (mysqli_affected_rows($connect) > 0) {
		echo "<script>
            alert('DATA BERHASIL DITAMBAHKAN');
            document.location.href = 'index.php';
		</script>";
	}else{
		echo "<script>
            alert('DATA GAGAL DITAMBAHKAN');
            document.location.href = 'index.php';
		</script>";
	}

}
 ?>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 130vh;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}

h1 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input,
select,
button {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #4EB8BD;
}
</style>

<div class="container">
    <h1>Tambahkan Data</h1>
    <form action="" method="POST">
        <label for="no_induk">No. Induk</label>
        <input type="number" inputmode="number" name="NO_INDUK" required>

        <label for="nama">Nama</label>
        <input type="text" name="Nama" required>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" required>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        <label for="Tempat_Lahir">Tempat Lahir</label>
        <input type="text" name="Tempat_Lahir" required>

        <label for="Tanggal_Lahir">Tanggal Lahir</label>
        <input type="date" name="Tanggal_Lahir" required>

        <label for="kualifikasi_akademik">Kualifikasi Akademik</label>
        <input type="text" name="kualifikasi_akademik" required>

        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="text" name="tahun_lulus" required>

        <label for="Bidang_Keahlian">Bidang Keahlian</label>
        <input type="text" name="Bidang_Keahlian" required>

        <button type="submit" name="submit">+Tambah</button>
    </form>
</div>