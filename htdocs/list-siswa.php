<?php include ("config.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru | coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
<body>
<div class="container">
<center>  

<header class="mt-4">
   <h3 class=" fw-bold">SISWA <span style="color: rgb(11, 127, 255);">YANG SUDAH MENDAFTAR</span></h3>
</header>

<nav>
   <a href="form-daftar.php">[+] Tambah Baru</a>
</nav>

<br>

<table border="1" class="table-primary table table-hover table-striped table-striped-columns table table-bordered border-primary">
   <thead>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Asal Sekolah</th>
    <th>Tindakan</th>
</tr>
</thead>
<tbody class="table-group-divider">

<?php
$sql = "SELECT * FROM calon_siswa";
$query = mysqli_query($db, $sql);

while ($siswa = mysqli_fetch_array($query)) {
echo "<tr>";

echo "<td>".$siswa ['id']."</td>";
echo "<td>".$siswa ['nama']."</td>";
echo "<td>".$siswa ['alamat']."</td>";
echo "<td>".$siswa ['jenis_kelamin']."</td>";
echo "<td>".$siswa ['agama']."</td>";
echo "<td>".$siswa ['sekolah_asal']."</td>";

echo "<td>";
echo "<a href='form-edit.php?id=".$siswa ['id']."'>Edit</a> | ";
echo "<a href='hapus.php?id=".$siswa ['id']."'>Hapus</a>";
echo "</td>";
echo "</tr>";
}
?>
</tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</center>

<a href="index.php" class="btn btn-primary"><i class="bi bi-arrow-left"></i> kembali</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>