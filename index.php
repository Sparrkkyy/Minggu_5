<?php
// Inisialisasi variabel untuk menyimpan nilai input dan error
$nama = $email = $nomor = $mobil = $alamat = "";
$namaErr = $emailErr = $nomorErr = $alamatErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi Nama
    $nama = $_POST["nama"];
    if (empty($nama)) {
        $namaErr = "Nama wajib diisi";
    }

    // Validasi Email
    $email = $_POST["email"];

    // Periksa apakah email mengandung simbol '@'
    if (strpos($email, '@') !== false) {
        echo "Email valid: " . htmlspecialchars($email);
    } else {
        echo "Email tidak valid. Pastikan terdapat simbol '@'.";
    }
}

    // Validasi Nomor Telepon
    $nomor = $_POST["nomor"];
    if (empty($nomor)) {
        $nomorErr = "Nomor Telepon wajib diisi";
    } elseif (!ctype_digit($nomor)) {
        $nomorErr = "Nomor Telepon harus berupa angka";
    }

    // Validasi Alamat
    $alamat = $_POST["alamat"];
    if (empty($alamat)) {
        $alamatErr = "Alamat wajib diisi";
    }

    // Menyimpan pilihan 
    $mobil = $_POST["mobil"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FootArena</title>
    <style>
    body {
        background-image: url('lapangan.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-color: black;
        height: 100vh;
        margin: 0;

    }

    body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: black;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: darkgreen;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .services {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }
        .service {
            width: 30%;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Foot Arena!</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        
        <div class="services">
            <div class="service">
                <h3>Field Booking</h3>
                <p>Book our mini soccer field for your team and enjoy a great game.</p>
            </div>

            <div class="service">
                <h3>Events</h3>
                <p>Host your soccer events and tournaments on our field.</p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Mini Soccer Field. All rights reserved.</p>
    </footer>
</body>
</html>
    </style>
  <script>
      function showSection(sectionId, name, nim, description) {
  document.querySelectorAll('.content').forEach(section => {
   section.classList.remove('active');
        });
 document.getElementById(sectionId).classList.add('active');
   alert("Nama: " + name + "\nNIM: " + nim + "\nDeskripsi: " + description);
        }
</script>
    
</head>

<body>
    
</body>
</html>