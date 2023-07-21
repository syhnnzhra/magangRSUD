<?php

    function koneksi(){
        $conn=mysqli_connect("localhost", "root","", "rsud") or die('Koneksi gagal!');
        return $conn;
    }

    function query($query){
        $conn = koneksi();
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        // siapkan data  $mahasiswa
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        
        return $rows;
    }

    function komentar($data) {
        $conn = koneksi();

        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $komentar = htmlspecialchars($data["komentar"]);
        $tgl = htmlspecialchars($data["tgl"]);

        $query = "INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `komentar`, `tgl`) VALUES (NULL, '$nama', '$email', '$komentar', '$tgl');";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    
    }

?>