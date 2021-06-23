<?php

$conn = mysqli_connect('localhost', 'root', '', 'projectO');

function query($query)
{
    global $conn;
    $data = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($data)) {
        $rows[] = $row;
    }
    return $rows;
}


function add_mhs($query)
{
    global $conn;

    $nim = $query["nim"];
    $name = $query["name"];
    $city = $query["city"];
    $file = upload($query);

    if (!$file) {
        return false;
    }

    $insert_mhs = "INSERT INTO data_mhs (nim, name, city, file) VALUES ('$nim', '$name', '$city', '$file')";

    mysqli_query($conn, $insert_mhs);
    return mysqli_affected_rows($conn);
}



function add_dsn($query)
{
    global $conn;

    $nip = $query["nim"];
    $name = $query["name"];
    $degree = $query["degree"];
    $address = $query["address"];
    $city = $query["city"];
    $file = upload($query);

    if (!$file) {
        return false;
    }

    $insert_dsn = "INSERT INTO data_dsn (nip, name, degree, address, city, file) VALUES ('$nip', '$name', '$degree', '$address', '$city', '$file')";

    mysqli_query($conn, $insert_dsn);
    return mysqli_affected_rows($conn);
}

function add_jadwal($query)
{
    global $conn;

    $kls = $query["kls"];
    $smt = $query["smt"];
    $file = upload($query);

    if (!$file) {
        return false;
    }

    $insert_jadwal = "INSERT INTO jadwal (kls, smt, file) VALUES ('$kls', '$smt', '$file')";

    mysqli_query($conn, $insert_jadwal);
    return mysqli_affected_rows($conn);
}

function upload($query)
{
    $nameFile = $_FILES['file']['name'];
    $tmpFile = $_FILES['file']['tmp_name'];
    $eksFileValid = ['docx', 'pdf', 'xlsx', 'pptx'];
    $eksFile = explode('.', $nameFile);
    $eksFile = strtolower(end($eksFile));
    $newNameFile = $query['nim'] . '.' . $eksFile;

    if (!in_array($eksFile, $eksFileValid)) {
        echo "  <script>
        alert('Please Select Valid Type');
        </script>
        ";
        return false;
    }

    move_uploaded_file($tmpFile, 'files/' . $newNameFile);
    return $newNameFile;
}

function add_nilai_mhs($query)
{
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

function search($keyword)
{
    $result = "(SELECT id, nim, name, 'mhs' as type FROM data_mhs WHERE nim LIKE '%" .
        $keyword . "%' OR name LIKE '%" . $keyword . "%') 
    UNION
    (SELECT id, nip, name, 'dsn' as type FROM data_dsn WHERE  nip LIKE '%" .
        $keyword . "%' OR name LIKE '%" . $keyword . "%')";

    return query($result);
}

function signup($query)
{
    global $conn;

    $uname = strtolower(stripslashes($query["username"]));
    $pass = mysqli_real_escape_string($conn, $query["password"]);
    $pass2 = mysqli_real_escape_string($conn, $query["password2"]);
    if ($pass != $pass2) {
        echo "  <script>
        alert('Konfirmasi Password Tidak Sesuai');
        </script>
        ";
        return false;
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $insert_user = "INSERT INTO user (username, password) VALUES ('$uname', '$pass')";
    mysqli_query($conn, $insert_user);
    return mysqli_affected_rows($conn);
}
