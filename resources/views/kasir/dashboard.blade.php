<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Kasir</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f4f6f9;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #16a085;
            position: fixed;
            padding: 20px;
            color: white;
        }

        .content {
            margin-left: 240px;
            padding: 20px;
        }

        .menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-top: 10px;
            background: #1abc9c;
            border-radius: 5px;
        }

        .menu a:hover {
            background: #0e6655;
        }

        .card {
            background: white;
            padding: 15px;
            margin-top: 15px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            background: #16a085;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn:hover {
            background: #0e6655;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>KASIR 🎟️</h2>

    <div class="menu">
        <a href="/kasir">Dashboard</a>
        <a href="#">Transaksi Tiket</a>
        <a href="#">Riwayat Penjualan</a>
    </div>
</div>

<!-- CONTENT -->
<div class="content">
    <h1>Dashboard Kasir</h1>
    <p>Silakan pilih film untuk transaksi tiket</p>

    <!-- LIST FILM (sementara manual dulu, nanti kita ambil dari database) -->
    <div class="card">
        <h3>Contoh Film</h3>
        <p>Film belum dihubungkan ke database</p>
        <a href="#" class="btn">Pilih Tiket</a>
    </div>

</div>

</body>
</html>