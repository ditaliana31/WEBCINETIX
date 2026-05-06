<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineTix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#14070d] text-white font-sans min-h-screen p-6">

    <div class="max-w-7xl mx-auto bg-[#1f1f1f] rounded-3xl p-6 shadow-2xl">

        <!-- NAVBAR -->
        @include('components.navbar')

        <!-- CONTENT -->
        @yield('content')

    </div>

</body>

</html>