<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-blue-600 text-white shadow-lg">
            <div class="container mx-auto px-4 py-3">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-bold">
                        <i class="fas fa-graduation-cap mr-2"></i>
                        Sistem Data Siswa
                    </h1>
                    <div class="space-x-4">
                        <a href="{{ route('siswa.welcome') }}" class="hover:text-blue-200 transition">
                            <i class="fas fa-home mr-1"></i> Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-6">
            @yield('content')
        </main>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform transition-transform duration-300 ease-in-out">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg transform transition-transform duration-300 ease-in-out">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    {{ session('error') }}
                </div>
            </div>
        @endif
    </div>

    <script>
        // Auto-hide flash messages
        document.addEventListener('DOMContentLoaded', function() {
            const flashMessages = document.querySelectorAll('.fixed');
            flashMessages.forEach(message => {
                setTimeout(() => {
                    message.style.transform = 'translateX(100%)';
                    setTimeout(() => message.remove(), 300);
                }, 3000);
            });
        });
    </script>
</body>
</html>