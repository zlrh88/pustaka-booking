<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="3" class="text-center">
                                Tampil Data Mata Kuliah
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th>Kode MTK</th>
                            <td>:</td>
                            <td><?= $kode; ?></td>
                        </tr>
                        <tr>
                            <th>Nama MTK</th>
                            <td>:</td>
                            <td><?= $nama; ?></td>
                        </tr>
                        <tr>
                            <th>SKS</th>
                            <td>:</td>
                            <td><?= $sks; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <a href="<?= base_url('matakuliah'); ?>" class="btn btn-primary">Kembali</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Tambahkan link ke Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
