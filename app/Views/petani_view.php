<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Petani</title>
</head>

<body>
  <h1>Data Petani</h1>

  <p><strong>Nama:</strong> <?= esc($nama) ?></p>
  <p><strong>Usia:</strong> <?= esc($usia) ?></p>
  <p><strong>Lokasi:</strong> <?= esc($lokasi) ?></p>

  <a href="<?= base_url('/') ?>">Kembali ke Home</a>
</body>

</html>