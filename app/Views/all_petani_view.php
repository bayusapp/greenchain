<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Petani</title>
</head>

<body>
  <h1>Daftar Petani</h1>

  <table border="1">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Usia</th>
        <th>Lokasi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($nama as $index => $namaPetani): ?>
        <tr>
          <td><?= esc($namaPetani) ?></td>
          <td><?= esc($usia[$index]) ?></td>
          <td><?= esc($lokasi[$index]) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>

</html>