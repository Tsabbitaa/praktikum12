<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <h3>Detail Dosen</h3>
    <table border="1" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dosen -> id?></td>
                <td><?php echo $dosen -> nama?></td>
                <td><?php echo $dosen -> tmp_lahir?></td>
                <td><?php echo $dosen -> tgl_lahir?></td>
                <td><?php echo $dosen -> gender?></td>
                <td><?php echo $dosen -> nidn?></td>
                <td><?php echo $dosen -> pendidikan?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$dosen->id?>.jpg"
                    alt="ini foto" width="300"/>
                    <div class="mt-4">
                        <h4><?=$dosen->nama?></h4>
                        <p>Foto dosen</p>
                        <?php echo $error;?>
                        <br>
                        <a href="https://www.instagram.com/astahidah/" target="_blank">
                            <button class="btn btn-outline-info">Instagram</button>
                        </a>
                        <?php echo form_open_multipart('dosen/upload')?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="iddosen" value="<?=$dosen->id?>"/>
                        <br>
                        <input type="submit" value="Upload Foto" class="btn btn-primary"/>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>