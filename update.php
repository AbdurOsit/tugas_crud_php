<?php
include 'koneksi.php';
$id = $_GET['id'];
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

	$query ="UPDATE `universitas_negeri_london`.`daftar_dosen`
	SET
	NO_INDUK = '$NO_INDUK',
	Nama= '$Nama',
	alamat= '$alamat',
	jenis_kelamin = '$jenis_kelamin',
	Tempat_Lahir = '$Tempat_Lahir',
	Tanggal_Lahir = '$Tanggal_Lahir',
	kualifikasi_akademik = '$kualifikasi_akademik',
	tahun_lulus = '$tahun_lulus',
	Bidang_Keahlian = '$Bidang_Keahlian'
    
    WHERE id = $id
    ";

	mysqli_query($connect,$query);
	if (mysqli_affected_rows($connect) > 0) {
		echo "<script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = 'index.php';
		</script>";
	}else{
		echo "<script>
            alert('DATA GAGAL DIUBAH');
            document.location.href = 'index.php';
		</script>";
	}

}
 ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 125vh;
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
</head>

<body>
    <div class="container">
        <h1>Ubah Data</h1>
        <form action="" method="POST">
            <label for="no_induk">No. Induk</label>
            <input type="number" inputmode="number" name="NO_INDUK" value="<?php echo $_GET["NO_INDUK"]?>">

            <label for="nama">Nama</label>
            <input type="text" name="Nama" value="<?php echo $_GET["Nama"]?>">

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="<?php echo $_GET["alamat"]?>">

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="L" <?php if($_GET["jenis_kelamin"] == "L") echo "selected"; ?>>Laki-laki</option>
                <option value="P" <?php if($_GET["jenis_kelamin"] == "P") echo "selected"; ?>>Perempuan</option>
            </select>

            <label for="Tempat_Lahir">Tempat Lahir</label>
            <input type="text" name="Tempat_Lahir" value="<?php echo $_GET["Tempat_Lahir"]?>">

            <label for="Tanggal_Lahir">Tanggal Lahir</label>
            <input type="date" name="Tanggal_Lahir" value="<?php echo $_GET["Tanggal_Lahir"]?>">

            <label for="kualifikasi_akademik">Kualifikasi Akademik</label>
            <input type="text" name="kualifikasi_akademik" value="<?php echo $_GET["kualifikasi_akademik"]?>">

            <label for="tahun_lulus">Tahun Lulus</label>
            <input type="text" name="tahun_lulus" value="<?php echo $_GET["tahun_lulus"]?>">

            <label for="Bidang_Keahlian">Bidang Keahlian</label>
            <input type="text" name="Bidang_Keahlian" value="<?php echo $_GET["Bidang_Keahlian"]?>">

            <button type="submit" name="submit">Ubah</button>
        </form>
    </div>
</body>

</html>