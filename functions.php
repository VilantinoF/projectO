<?php

$conn = mysqli_connect('localhost', 'root', '', 'ProjectO');


function connect() {
    global $conn;
    var_dump(mysqli_errno($conn));

}

function query($query) {
    global $conn;
    $data = mysqli_query($conn, $query);
    var_dump($data);

}


function add_mhs() {
    global $conn;
    
    $
}


?>