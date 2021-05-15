<?php

$conn = mysqli_connect('localhost', 'root', '', 'ProjectO');

function query($query) {
    global $conn;
    $data = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($data)) {
        $rows[] = $row;
    }
}


function add_mhs($query) {
    global $conn;
    
    $nim = $query["nim"];
    $name = $query["name"];
    $city = $query["city"];
    $insert = "INSERT INTO data_mhs VALUES ('$nim', '$name', '$city')";

    mysqli_query($conn, $insert);
    return mysqli_affected_rows($conn);
}


?>