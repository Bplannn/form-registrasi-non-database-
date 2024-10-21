<?php
// Simulasi data pengguna
$userData = [
    'email' => 'dinda@gmail.com',
    'fullname' => 'Dinda Oktavia',
    'phone' => '9999999999',
    'age' => '20',
    'address' => 'Serang, Banten'
];

// Logout function (jika ingin implementasi logout sebenarnya)
if (isset($_POST['logout'])) {
    // Proses logout misalnya dengan menghapus sesi
    session_start();
    session_destroy();
    header("Location: index.html"); // Redirect ke halaman login setelah logout
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 20px;
            color: #555;
            margin-bottom: 20px;
        }

        .details {
            text-align: left;
            margin-bottom: 30px;
        }

        .details p {
            font-size: 16px;
            margin-bottom: 10px;
            color: #666;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .btn.logout {
            background-color: #c1bbdd;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <h1>Hello</h1>
        <h2>Welcome, <?php echo $userData['fullname']; ?></h2>

        <div class="details">
            <p>Email: <?php echo $userData['email']; ?></p>
            <p>Full Name: <?php echo $userData['fullname']; ?></p>
            <p>Phone Number: <?php echo $userData['phone']; ?></p>
            <p>Age: <?php echo $userData['age']; ?></p>
            <p>Address: <?php echo $userData['address']; ?></p>
        </div>

        <!-- Logout form -->
        <form method="POST">
            <button class="btn logout" type="submit" name="logout">Logout</button>
        </form>
    </div>

</body>
</html>
