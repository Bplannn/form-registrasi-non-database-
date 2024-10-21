<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Data statis untuk login
    $correct_email = "admin@gmail.com";
    $correct_password = "admin";

    // Cek apakah email dan password benar
    if ($email === $correct_email && $password === $correct_password) {
        // Jika login berhasil
        echo json_encode(["status" => "Login Successful"]);
    } else {
        // Jika login gagal
        echo json_encode(["status" => "Login Failed", "message" => "Email or password is incorrect."]);
    }
}
?>
