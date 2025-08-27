<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Seller Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed left-0 top-0 w-64 h-full bg-blue-900 text-white transform transition-transform duration-300 ease-in-out z-30 overflow-y-auto">
        <!-- Logo -->
        <div class="flex items-center justify-center h-16 bg-blue-800 border-b border-blue-700">
            <i class="fas fa-store text-2xl mr-2"></i>
            <h2 class="text-xl font-bold">Seller Panel</h2>
        </div>

        <!-- Navigation -->
        <nav class="mt-6">
            <div class="px-4">
                <h3 class="text-xs font-semibold text-blue-300 uppercase tracking-wide mb-3">Store Management</h3>
            </div>

            <a href="{{ route('seller.dashboard') }}"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-chart-pie mr-3"></i>
                Dashboard
            </a>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-box mr-3"></i>
                Produk Saya
            </a>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-plus-circle mr-3"></i>
                Tambah Produk
            </a>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-shopping-bag mr-3"></i>
                Pesanan Masuk
            </a>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-truck mr-3"></i>
                Pengiriman
            </a>

            <!-- Analytics Menu -->
            <div class="px-4 mt-8">
                <h3 class="text-xs font-semibold text-blue-300 uppercase tracking-wide mb-3">Analytics</h3>
            </div>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-chart-bar mr-3"></i>
                Penjualan
            </a>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-star mr-3"></i>
                Review & Rating
            </a>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-wallet mr-3"></i>
                Keuangan
            </a>

            <!-- Account Menu -->
            <div class="px-4 mt-8">
                <h3 class="text-xs font-semibold text-blue-300 uppercase tracking-wide mb-3">Account</h3>
            </div>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-store-alt mr-3"></i>
                Profil Toko
            </a>

            <a href="#"
                class="flex items-center px-6 py-3 text-blue-200 hover:bg-blue-800 hover:text-white transition-colors duration-200">
                <i class="fas fa-cog mr-3"></i>
                Pengaturan
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 min-h-screen">
        <!-- Top Navigation -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="flex items-center justify-between px-6 py-4">
                <div class="flex items-center">
                    <button id="sidebarToggle" class="lg:hidden text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h1 class="ml-4 text-2xl font-semibold text-gray-900">@yield('page-title', 'Dashboard Penjual')</h1>
                </div>

                <div class="flex items-center space-x-4">
                    <!-- Quick Stats -->
                    <div class="hidden md:flex items-center space-x-4 text-sm">
                        <div class="flex items-center text-green-600">
                            <i class="fas fa-arrow-up mr-1"></i>
                            <span class="font-medium">Penjualan: Rp 2.5M</span>
                        </div>
                        <div class="flex items-center text-orange-600">
                            <i class="fas fa-clock mr-1"></i>
                            <span class="font-medium">5 Pesanan Baru</span>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="relative">
                        <button class="text-gray-500 hover:text-gray-700 relative">
                            <i class="fas fa-bell text-xl"></i>
                            <span
                                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">5</span>
                        </button>
                    </div>

                    <!-- User Menu -->
                    <div class="relative">
                        <button class="flex items-center text-gray-700 hover:text-gray-900">
                            <img class="h-8 w-8 rounded-full mr-2" src="https://via.placeholder.com/32" alt="Profile">
                            <span class="font-medium">Toko Saya</span>
                            <i class="fas fa-chevron-down ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            @yield('seller')
        </main>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 lg:hidden hidden"></div>

    <script>
        // Sidebar toggle functionality
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        });

        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        });
    </script>
</body>

</html>
