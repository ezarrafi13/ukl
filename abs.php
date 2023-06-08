<?php 
    include 'kondua.php';

    $query = "SELECT * FROM siswa;";
    $sql = mysqli_query($connn, $query);
    $no = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <style>
        .navbar {
            background-color: #547FE5;
            overflow: hidden;
        }

        .navbar a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #d9d9d9;
        }

        h1 {
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .btn {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            margin-right: 5px;
        }

        .btn a {
            text-decoration: none;
            color: white;
        }

        .btn-tambah {
            background-color: #547FE5;
            color: white;
        }

        .btn-edit {
            background-color: #547FE5;
            color: white;
        }

        .btn-hapus {
            background-color: red;
            color: white;
        }

        table {
            width: 85%;
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: white;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e6e6e6;
        }
    </style>

</head>
<body>
<div class="navbar">
        <a href="http://localhost:8080/HEI/home.php">Home</a>
        <a href="http://localhost:8080/HEI/kas.php">Kas</a>
        <a href="http://localhost:8080/HEI/about.php">About Us</a>
        <a href="http://localhost:8080/HEI/contact.php">Contact</a>
    </div>
    <h1>Absensi Siswa</h1>
    <div class="container">
        <form method="post" action="http://localhost:8080/HEI/abdua.php">
            <button type="submit" class="btn btn-tambah">
                Tambah Data
            </button>
        </form>
    </div>
    <table>
        <tr>
            <th>Absen</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal</th>
            <th>Kehadiran</th>
            <th>Aksi</th>
        </tr>
        <?php while($result = mysqli_fetch_assoc($sql)) { ?>
            <tr>
                <td><center><?php echo ++$no; ?>.</center></td>
                <td><?php echo $result['nama_siswa']; ?></td>
                <td><?php echo $result['jenis_kelamin']; ?></td>
                <td><?php echo $result['tanggal']; ?></td>
                <td><center><?php echo $result['kehadiran']; ?></center></td>
                <td>
                    <button class="btn btn-edit"><a href="http://localhost:8080/HEI/abdua.php?ubah=<?php echo $result['id_siswa']; ?>">Edit</a></button>
                    <button class="btn btn-hapus"><a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data terssebut?')">Hapus</a></button>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>