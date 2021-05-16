<?php

$conn = mysqli_connect('localhost', 'root', '', 'ProjectO');

function query($query) {
    global $conn;
    $data = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($data)) {
        $rows[] = $row;
    }
    return $rows;
}


function add_mhs($query) {
    global $conn;
    
    $nim = $query["nim"];
    $name = $query["name"];
    $city = $query["city"];
    $insert_mhs = "INSERT INTO data_mhs (nim, name, city) VALUES ('$nim', '$name', '$city')";

    mysqli_query($conn, $insert_mhs);
    return mysqli_affected_rows($conn);
}

function add_dsn($query) {
    global $conn;
    
    $nip = $query["nip"];
    $name = $query["name"];
    $degree = $query["degree"];
    $city = $query["city"];
    $insert_dsn = "INSERT INTO data_dsn (nip, name, degree, city) VALUES ('$nip', '$name', '$degree', '$city')";

    mysqli_query($conn, $insert_dsn);
    return mysqli_affected_rows($conn);
}


?>