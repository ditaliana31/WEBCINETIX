<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f4f6f9;
        }

        .sidebar {
            width: 200px;
            height: 100vh;
            background: #2c3e50;
            position: fixed;
            padding: 20px;
            color: white;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-top: 10px;
            background: #34495e;
            border-radius: 5px;
        }

        .menu a:hover {
            background: #1abc9c;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>ADMIN</h2>

        <div class="menu">
            <a href="/admin">Dashboard</a>
            <a href="/film">Data Film</a>
            <a href="/film/create">Tambah Film</a>
        </div>
    </div>

    <div class="content">
        <h1>Selamat Datang Admin 👑</h1>

        <div class="card">
            <h3>Dashboard Bioskop</h3>
            <p>Kelola film dan data bioskop dari sini.</p>
        </div>
    </div>

</body>

</html>