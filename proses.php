<?php
    include 'kondua.php';

    if(isset($_POST['aksi'])){
       if($_POST['aksi'] == "add"){

        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tanggal = $_POST['tanggal'];
        $kehadiran = $_POST['kehadiran'];

        $query = "INSERT INTO siswa VALUES(null, '$nama_siswa', '$jenis_kelamin', '$tanggal', '$kehadiran')";
        $sql = mysqli_query($connn, $query);

        if($sql){
            header("location: abs.php");
            //echo "Data berhasil ditambahkan <a href='abs.php'>[Home]</a>";
        }else{
            echo $query;
        }

        //echo $absen." | ".$nama_siswa." | ".$jenis_kelamin." | ".$tanggal." | ".$kehadiran;

        
        //echo "<br>Tambah data <a href='abs.php'>[Home]</a>";
        }else if($_POST['aksi'] == "edit"){
            echo "Edit Data  <a href='abs.php'>[Home]</a>";
            //var_dump($_POST);

            $id_siswa = $_POST['id_siswa'];
            $absen = $_POST['absen'];
            $nama_siswa = $_POST['nama_siswa'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $tanggal = $_POST['tanggal'];
            $kehadiran = $_POST['kehadiran'];

            $query = "UPDATE siswa SET nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', tanggal='$tanggal', kehadiran='$kehadiran' WHERE id_siswa= $id_siswa;";
            $sql = mysqli_query($connn, $query);
            //echo $id_siswa;

        }
        
}
if(isset($_GET['hapus'])){
    $id_siswa = $_GET['hapus'];
    $query = "DELETE FROM siswa WHERE id_siswa = $id_siswa ;";
    $sql = mysqli_query($connn, $query);

    if($sql){
        header("location: abs.php");
        echo "Data berhasil ditambahkan <a href='abs.php'>[Home]</a>";
    }else{
        echo $query;
    }

    //echo "Hapus data <a href='abs.php'>[Home]</a>";
}
?>