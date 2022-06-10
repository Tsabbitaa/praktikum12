<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>

    <script>
        function hapusMatakuliah(pesan){
            if (confirm(pesan)){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat datang $username</h2>";
}
?>
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
                <th>Action</th>
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
                <td>
                    <a href=<?php echo base_url("index.php/matakuliah/edit/$mtkl->id")?>
                    class="btn btn-success active">Edit</a>
                    &nbsp;
                    <a href=<?php echo base_url("index.php/matakuliah/delete/$mtkl->id")?>
                    class="btn btn-danger active" onclick="return hapusMatakuliah('Apakah anda yakin menghapus Mata Kuliah <?php echo $mtkl->nama?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href=<?php echo base_url("index.php/matakuliah/form")?> 
    class="btn btn-primary active">Tambah</a>
    </div>
</body>
</html>