<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    @vite('resources/css/app.css')
</head>

<body class="bg-[#F9F9F9] font-sans">
<main class="flex-1">
    @include('components.navbar')
    <div>
        @yield('content')
    </div>
</main>
</body>
</html>
