<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>

    <script>
        function hapusMahasiswa(pesan){
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
    <h3>Mahasiswa</h3>
    <table border="1" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($mahasiswa as $mhs) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $mhs -> nim?></td>
                <td><?php echo $mhs -> nama?></td>
                <td><?php echo $mhs -> gender?></td>
                <td><?php echo $mhs -> ipk?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id")?>"
                    class="btn btn-info active text-white">Detail</a>
                    &nbsp;
                    <a href=<?php echo base_url("index.php/mahasiswa/edit/$mhs->id")?>
                    class="btn btn-success active">Edit</a>
                    &nbsp;
                    <a href=<?php echo base_url("index.php/mahasiswa/delete/$mhs->id")?>
                    class="btn btn-danger active" onclick="return hapusMahasiswa('Apakah anda yakin menghapus mahasiswa yang bernama <?php echo $mhs->nama?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href=<?php echo base_url("index.php/mahasiswa/form")?> 
    class="btn btn-primary active">Tambah</a>
    </div>
</body>
</html>