<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru | coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
  <style>
  </style>
<body>
<div class="container">
<center>
    <header class="mt-4">
    <h3 class=" fw-bold">FORMULIR <span style="color: rgb(11, 127, 255);">PENDAFTARAN SISWA BARU</span></h3>
    </header>
<a href="index.php" class="btn btn-primary">kembali <i class="bi bi-arrow-right"></i></a>
</center>

    <form action="proses-pendaftaran.php" method="POST" class="p-3">
        <fieldset>
            <p>
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" class="form-control" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat" class="form-label">Alamat: </label>
                <textarea name="alamat" class="form-control"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin" class="me-2">Jenis Kelamin:</label>
                <label class="form-check-label"><input type="radio" class="form-check-input" name="jenis_kelamin" value="laki" /> Laki-laki</label>
                <label class="form-check-label"><input type="radio" class="form-check-input" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
            </p>
            <p>
                <label for="agama" class="form-label">Agama: </label>
                <select name="agama" class="form-select">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
                <input type="text" class="form-control" name="sekolah_asal" placeholder="nama sekolah" />
            </p>
            <center>
            <p>
                <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" style="width: 50%;" />
            </p>
            </center>
        </fieldset>
    </form>

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>