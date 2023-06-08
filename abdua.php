<!DOCTYPE html>
    <?php
    include 'kondua.php';

            $id_siswa = '';
            $nama_siswa = '';
            $jenis_kelamin = '';
            $tanggal = '';
            $kehadiran = '';

         if(isset($_GET['ubah'])){
            $id_siswa = $_GET['ubah'];
            
            $query = "SELECT * FROM siswa WHERE id_siswa = $id_siswa;";
            $sql = mysqli_query($connn, $query);

            $result = mysqli_fetch_array($sql);

            $nama_siswa = $result['nama_siswa'];
            $jenis_kelamin = $result['jenis_kelamin'];
            $tanggal = $result['tanggal'];
            $kehadiran = $result['kehadiran'];

            //var_dump($result);

            //die();
         }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
    
        h1 {
            text-align: center;
            font-weight: 700;
            color: #333;
        }
    
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    
        .form-group {
            margin-bottom: 10px;
        }
    
        label {
            font-weight: 400;
            color: #333;
        }
    
        input[type="text"],
        select {
            width: 70%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    
        input[type="text"]:focus,
        select:focus {
            outline: none;
            border-color: #547FE5;
        }
    
        .form-group button {
            padding: 8px 12px;
            background-color: #547FE5;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            font-weight: 700;
        }
    
        .form-group .button-container {
            display: flex;
            justify-content: flex-start;
        }
    
        .form-group .button-container button {
            margin-right: 10px;
        }
    
        .form-group button.batal {
            background-color: #FF0000;
        }
        a{
            text-decoration: none;
            color: #fff;
        }
    </style>
    
</head>
<body>
    <h1>Tambah Data</h1>
    <div class="container">
    <form method="POST" action="proses.php">
        <input type="hidden" value="<?php echo $id_siswa; ?>" name="id_siswa">
        <div class="form-group">
                <label for="absen" class="col-sm-2 col-form-label">Absen</label>
                <div class="col-sm-10">
                    <input type="text" name="absen" class="form-control" id="absen" value="<?php echo $id_siswa; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_siswa" class="form-control" id="nama" value="<?php echo $nama_siswa; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select name="jenis_kelamin" id="jkel" class="form-control">
                        <option <?php if($jenis_kelamin == 'Laki-laki'){ echo "selected";} ?> value="Laki-laki">Laki-laki</option>
                        <option <?php if($jenis_kelamin == 'Perempuan'){ echo "selected";} ?> value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="tahun/bulan/tanggal" value="<?php echo $tanggal; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="kehadiran" class="col-sm-2 col-form-label">Kehadiran</label>
                <div class="col-sm-10">
                    <select name="kehadiran" id="kehadiran" class="form-control">
                        <option <?php if($kehadiran == 'Hadir'){ echo "selected";} ?> value="Hadir">Hadir</option>
                        <option <?php if($kehadiran == 'Tidak Hadir'){ echo "selected";} ?> value="Tidak Hadir">Tidak Hadir</option>
                        <option <?php if($kehadiran == 'Izin'){ echo "selected";} ?> value="izin">Izin</option>
                        <option <?php if($kehadiran == 'Tidak Ada Keterangan'){ echo "selected";} ?> value="tidak ada keterangan">Tidak Ada Keterangan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="button-container">
                    <?php
                        if(isset($_GET['ubah'])){
                    ?>
                    <button type="submit" name="aksi" value="edit" class="simpan">Simpan</button>
                    <?php
                        } else{
                    ?>
                    <button type="submit" name="aksi" value="add" class="tambahkan">Tambahkan</button>
                    <?php
                        }
                    ?>
                    <button type="button" class="batal"><a href="abs.php">Batal</a></button>
                </div>
            </div>
    </form>
    </div>
</body>
</html>
