<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Marketplace')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    <!-- Top Navigation Bar -->
    <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo & Search -->
                <div class="flex items-center flex-1">
                    <div class="flex items-center">
                        <i class="fas fa-shopping-cart text-2xl text-green-600 mr-3"></i>
                        <h1 class="text-2xl font-bold text-gray-900">ShopMart</h1>
                    </div>

                    <!-- Search Bar -->
                    <div class="ml-8 flex-1 max-w-lg">
                        <div class="relative">
                            <input type="text" placeholder="Cari produk, toko, atau kategori..."
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <i
                                class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- Right Menu -->
                <div class="flex items-center space-x-6">
                    <!-- Cart -->
                    <a href="#" class="flex items-center text-gray-600 hover:text-green-600 transition-colors">
                        <div class="relative">
                            <i class="fas fa-shopping-bag text-xl"></i>
                            <span
                                class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
                        </div>
                        <span class="ml-2 font-medium">Keranjang</span>
                    </a>

                    <!-- Wishlist -->
                    <a href="#" class="flex items-center text-gray-600 hover:text-green-600 transition-colors">
                        <i class="fas fa-heart text-xl"></i>
                        <span class="ml-2 font-medium">Wishlist</span>
                    </a>

                    <!-- User Menu -->
                    <div class="relative">
                        <button class="flex items-center text-gray-700 hover:text-green-600">
                            <img class="h-8 w-8 rounded-full mr-2" src="https://via.placeholder.com/32" alt="Profile">
                            <span class="font-medium">John Doe</span>
                            <i class="fas fa-chevron-down ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Secondary Navigation -->
    <nav class="bg-green-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-12">
                <!-- Categories -->
                <div class="flex items-center space-x-8">
                    <a href="#" class="flex items-center hover:text-green-200 transition-colors">
                        <i class="fas fa-bars mr-2"></i>
                        Semua Kategori
                    </a>
                    <a href="#" class="hover:text-green-200 transition-colors">Elektronik</a>
                    <a href="#" class="hover:text-green-200 transition-colors">Fashion</a>
                    <a href="#" class="hover:text-green-200 transition-colors">Rumah & Taman</a>
                    <a href="#" class="hover:text-green-200 transition-colors">Olahraga</a>
                    <a href="#" class="hover:text-green-200 transition-colors">Makanan</a>
                </div>

                <!-- Promo Banner -->
                <div class="flex items-center">
                    <i class="fas fa-fire mr-2 text-orange-300"></i>
                    <span class="text-sm font-medium">Flash Sale 50%!</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Button -->
    <button id="mobileMenuBtn"
        class="lg:hidden fixed bottom-4 right-4 bg-green-600 text-white p-3 rounded-full shadow-lg z-50">
        <i class="fas fa-bars text-xl"></i>
    </button>

    <!-- Mobile Sidebar -->
    <div id="mobileSidebar"
        class="fixed left-0 top-0 w-80 h-full bg-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50 lg:hidden">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-900">Menu</h2>
                <button id="closeMobileMenu" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>

        <nav class="p-4">
            <div class="space-y-2">
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-user mr-3 text-green-600"></i>
                    Akun Saya
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-shopping-bag mr-3 text-green-600"></i>
                    Pesanan Saya
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-heart mr-3 text-green-600"></i>
                    Wishlist
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-comments mr-3 text-green-600"></i>
                    Chat
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-credit-card mr-3 text-green-600"></i>
                    Pembayaran
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-map-marker-alt mr-3 text-green-600"></i>
                    Alamat
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-cog mr-3 text-green-600"></i>
                    Pengaturan
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <i class="fas fa-question-circle mr-3 text-green-600"></i>
                    Bantuan
                </a>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('user')
    </main>

    <!-- Quick Access Menu (Desktop) -->
    <div class="hidden lg:block fixed right-6 top-1/2 transform -translate-y-1/2 z-40">
        <div class="bg-white rounded-lg shadow-lg p-2 space-y-2">
            <a href="#"
                class="flex items-center justify-center w-12 h-12 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                <i class="fas fa-user"></i>
            </a>
            <a href="#"
                class="flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-shopping-bag"></i>
            </a>
            <a href="#"
                class="flex items-center justify-center w-12 h-12 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                <i class="fas fa-heart"></i>
            </a>
            <a href="#"
                class="flex items-center justify-center w-12 h-12 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors">
                <i class="fas fa-comments"></i>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tentang ShopMart</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Layanan Pelanggan</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition-colors">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Hubungi Kami</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pengembalian</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Untuk Seller</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition-colors">Mulai Berjualan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Seller Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Edukasi Seller</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 ShopMart. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Sidebar Overlay -->
    <div id="mobileSidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>

    <script>
        // Mobile menu functionality
        const mobileSidebar = document.getElementById('mobileSidebar');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileSidebarOverlay = document.getElementById('mobileSidebarOverlay');

        mobileMenuBtn.addEventListener('click', function() {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileSidebarOverlay.classList.remove('hidden');
        });

        closeMobileMenu.addEventListener('click', function() {
            mobileSidebar.classList.add('-translate-x-full');
            mobileSidebarOverlay.classList.add('hidden');
        });

        mobileSidebarOverlay.addEventListener('click', function() {
            mobileSidebar.classList.add('-translate-x-full');
            mobileSidebarOverlay.classList.add('hidden');
        });
    </script>
</body>

</html>
