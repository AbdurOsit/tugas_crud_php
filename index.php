<?php
include "koneksi.php";
$cari = isset($_GET['cari']) ? $_GET['cari'] : "";
if (isset($_GET['cari'])) {
    echo "<button style='background-color:#007bff; padding:10px; border:none;'><a href = 'index.php' style='color:white; text-decoration:none;'>kembali</a></button>";
} 

// Pagination
$limit = 5; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page > 1) ? ($page * $limit) - $limit : 0;

// Menghitung total jumlah data yang sesuai dengan kriteria pencarian
$total = mysqli_query($connect, "SELECT COUNT(*) AS total FROM `daftar_dosen` WHERE `Nama` LIKE '%$cari%' OR `NO_INDUK` LIKE '%$cari%' OR `alamat` LIKE '%$cari%' OR `jenis_kelamin` LIKE '%$cari%' OR `Tempat_Lahir` LIKE '%$cari%' OR `Tanggal_Lahir` LIKE '%$cari%' OR `kualifikasi_akademik` LIKE '%$cari%' OR `tahun_lulus` LIKE '%$cari%' OR `Bidang_Keahlian` LIKE '%$cari%'");

// Mengambil hasil total jumlah data
$total = mysqli_fetch_assoc($total)['total'];

// Menghitung jumlah halaman yang dibutuhkan berdasarkan total data dan limit per halaman
$pages = ceil($total / $limit);

$read = mysqli_query($connect,"SELECT * FROM `daftar_dosen` WHERE `Nama` LIKE '%$cari%' OR `NO_INDUK` LIKE '%$cari%' OR `alamat` LIKE '%$cari%' OR `jenis_kelamin` LIKE '%$cari%' OR `Tempat_Lahir` LIKE '%$cari%' OR `Tanggal_Lahir` LIKE '%$cari%' OR `kualifikasi_akademik` LIKE '%$cari%' OR `tahun_lulus` LIKE '%$cari%' OR `Bidang_Keahlian` LIKE '%$cari%' LIMIT $start, $limit");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
</head>

<body>

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
    }

    .container {
        width: 90%;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        color: #007bff;
    }

    form {
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="submit"] {
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ced4da;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #dee2e6;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #e9ecef;
    }

    tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    tr:hover {
        background-color: #e2e6ea;
    }

    .btn {
        padding: 8px 12px;
        margin: 5px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        text-decoration: none;
        color: #007bff;
        display: inline-block;
        transition: 0.5s;
    }

    .btn:hover {
        color: white;
        background-color: #007bff;
    }
    </style>

    <div class="container">
        <h1>Daftar Dosen</h1>
        <!-- Tambah Data -->
        <form action="" method="post">
            <a href="create.php" class="btn">Tambahkan Data</a>
        </form>

        <!-- cari data -->
        <form method="get" action="index.php">
            <input type="text" name="cari" placeholder="Cari Data" autocomplete="off" autofocus>
            <input type="submit" value="Cari Data">
        </form>
        <!--tampilkan data -->
        <table>
            <tr>
                <th>No</th>
                <th>NO. Induk</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kualifikasi Akademik</th>
                <th>Tahun Lulus</th>
                <th>Bidang Keahlian</th>
                <th>Aksi</th>
            </tr>
            <?php $no = $start + 1; ?>
            <?php while($item = mysqli_fetch_assoc($read)) :?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item["NO_INDUK"]; ?></td>
                <td><?php echo $item["Nama"]; ?></td>
                <td><?php echo $item["alamat"]; ?></td>
                <td>
                    <?php echo $item["jenis_kelamin"] == "L" ? "Laki-laki" : "Perempuan"; ?>
                </td>
                <td><?php echo $item["Tempat_Lahir"]; ?></td>
                <td><?php echo $item["Tanggal_Lahir"]; ?></td>
                <td><?php echo $item["kualifikasi_akademik"]; ?></td>
                <td><?php echo $item["tahun_lulus"]; ?></td>
                <td><?php echo $item["Bidang_Keahlian"]; ?></td>
                <td>
                    <a href="update.php?aksi=update&id=<?php echo $item['id'];?>&NO_INDUK=<?php echo $item['NO_INDUK'];?>&Nama=<?php echo $item['Nama'];?>&alamat=<?php echo $item['alamat'];?>&jenis_kelamin=<?php echo $item['jenis_kelamin'];?>&Tempat_Lahir=<?php echo $item['Tempat_Lahir'];?>&Tanggal_Lahir=<?php echo $item['Tanggal_Lahir'];?>&kualifikasi_akademik=<?php echo $item['kualifikasi_akademik'];?>&tahun_lulus=<?php echo $item['tahun_lulus'];?>&Bidang_Keahlian=<?php echo $item['Bidang_Keahlian'];?>"
                        class="btn">Update</a>

                    <a href="delete.php?delete&id=<?php echo $item['id']; ?>"
                        onclick="return confirm('yakin ingin menghapus')" class="btn">Delete</a>
                </td>
            </tr>
            <?php $no++?>
            <?php endwhile; ?>
        </table>

        <!-- pagination -->
        <div>
            <?php for ($i = 1; $i <= $pages; $i++) : ?>
            <a href="?page=<?php echo $i; ?>&cari=<?php echo $cari; ?>" class="btn"><?php echo $i; ?></a>
            <?php endfor; ?>
        </div>
    </div>
</body>

</html>