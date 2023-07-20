<?php

    function koneksilogin(){
        $conn=mysqli_connect("localhost", "root","", "rsud") or die('Koneksi gagal!');
        return $conn;
    }

    function querylogin($query){
        $conn = koneksilogin();
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        
        return $rows;
    }

?>