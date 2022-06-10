<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>
<body>
    <div>
    <h3>Matakuliah</h3>
    <table border="1" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $mtkl) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $mtkl -> nama?></td>
                <td><?php echo $mtkl -> sks?></td>
                <td><?php echo $mtkl -> kode?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>