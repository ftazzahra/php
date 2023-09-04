<?php
// koneksi ke database
$reza = mysqli_connect("localhost", "root", "", "phpdasar1");

function query($query) {
    global $reza;
    $result = mysqli_query($reza, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;

}
?>