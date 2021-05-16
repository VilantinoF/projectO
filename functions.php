<?php

$conn = mysqli_connect('localhost', 'root', '', 'ProjectO');
// $id = $_GET["id"];

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
    $address = $query["address"];
    $city = $query["city"];
    $insert_dsn = "INSERT INTO data_dsn (nip, name, degree, address, city) VALUES ('$nip', '$name', '$degree', '$address', '$city')";

    mysqli_query($conn, $insert_dsn);
    return mysqli_affected_rows($conn);
}

function add_nilai_mhs($query) {
    global $conn;

    $name = $query["name"];
    $smt1 = $query["smt1"];
    $smt2 = $query["smt2"];
    $smt3 = $query["smt3"];
    $smt4 = $query["smt4"];
    $insert_nilai = "INSERT INTO nilai_mhs (smt1, smt2, smt3, smt4, data_mhsID) VALUES ('$smt1', '$smt2', '$smt3', '$smt4', (SELECT id FROM data_mhs WHERE name='$name'))";

    mysqli_query($conn, $insert_nilai);
    return mysqli_affected_rows($conn);
}


?>