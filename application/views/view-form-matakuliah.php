<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 bg-white">
                <h3 class="text-center">Form Input Data Mahasiswa</h2>
                <form action="<?= base_url('matakuliah/cetak'); ?>" method="post" class="mb-4">
                    <div class="form-group">
                        <label for="kode">Kode MTK</label>
                        <input type="text" class="form-control" name="kode" id="kode">
                        <!-- Tampilkan pesan kesalahan untuk kode hanya setelah formulir disubmit -->
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama MTK</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                        <!-- Tampilkan pesan kesalahan untuk nama hanya setelah formulir disubmit -->
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <select class="form-control" name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <!-- Tampilkan pesan kesalahan untuk sks hanya setelah formulir disubmit -->
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- Tampilkan semua pesan kesalahan validasi sekaligus di bawah formulir setelah formulir disubmit -->
                <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>
            </div>
        </div>
    </div>
    
    <!-- Tambahkan link ke Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>