<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($email) && !empty($username) && !empty($password)) {
        // Menyimpan data atau logika lain dapat ditambahkan di sini
        // Setelah registrasi berhasil, arahkan ke halaman login
        header('Location: index.html');
        exit();
    } else {
        // Menampilkan pesan error dan mengarahkan kembali ke halaman register
        echo "<script>alert('Please fill all fields!'); window.location.href='register.html';</script>";
    }
} else {
    echo "Invalid request.";
}

