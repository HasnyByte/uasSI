<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite('resources/css/app.css')

</head>
<body class="bg-[#F9F9F9] font-sans">

<div class="flex min-h-screen">
    @include('components.sidebar')

    <main class="flex-1">
        @include('components.topbar')
        <div class="p-6">
            @yield('content')
        </div>
    </main>
</div>

</body>
</html>
