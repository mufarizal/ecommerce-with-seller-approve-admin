@extends('layouts.user')

@section('title', 'Dashboard User')

@section('user')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-green-500 to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Selamat Datang, {{ $user->name }}! 👋
                </h1>
                <p class="text-xl text-green-100 mb-6">
                    Temukan produk terbaik dengan harga terjangkau
                </p>
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm font-medium">
                        <i class="fas fa-user mr-2"></i>
                        {{ ucfirst($user->role) }}
                    </span>
                    <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm font-medium">
                        <i class="fas fa-shield-check mr-2"></i>
                        Status: {{ ucfirst($user->status) }}
                    </span>
                </div>
                <div class="flex justify-center">
                    <a href="#products"
                        class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 flex items-center">
                        <i class="fas fa-shopping-bag mr-2"></i>
                        Mulai Belanja
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <!-- Pesanan Aktif -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-blue-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Pesanan Aktif</h3>
                        <p class="text-2xl font-bold text-gray-900">3</p>
                    </div>
                </div>
            </div>

            <!-- Wishlist -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-red-500">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-heart text-red-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Wishlist</h3>
                        <p class="text-2xl font-bold text-gray-900">12</p>
                    </div>
                </div>
            </div>

            <!-- Poin Reward -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-yellow-500">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-coins text-yellow-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Poin Reward</h3>
                        <p class="text-2xl font-bold text-gray-900">2,450</p>
                    </div>
                </div>
            </div>

            <!-- Kupon -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-ticket-alt text-purple-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-500 uppercase">Kupon Aktif</h3>
                        <p class="text-2xl font-bold text-gray-900">5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                <i class="fas fa-bolt text-yellow-500 mr-2"></i>
                Aksi Cepat
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#"
                    class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg hover:from-blue-100 hover:to-blue-200 transition-all duration-200 transform hover:scale-105">
                    <i class="fas fa-shopping-bag text-3xl text-blue-600 mb-3"></i>
                    <span class="font-medium text-gray-900">Pesanan Saya</span>
                    <span class="text-xs text-gray-600 mt-1">Lacak pesanan</span>
                </a>

                <a href="#"
                    class="flex flex-col items-center p-6 bg-gradient-to-br from-red-50 to-red-100 rounded-lg hover:from-red-100 hover:to-red-200 transition-all duration-200 transform hover:scale-105">
                    <i class="fas fa-heart text-3xl text-red-600 mb-3"></i>
                    <span class="font-medium text-gray-900">Wishlist</span>
                    <span class="text-xs text-gray-600 mt-1">Produk favorit</span>
                </a>

                <a href="#"
                    class="flex flex-col items-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-lg hover:from-green-100 hover:to-green-200 transition-all duration-200 transform hover:scale-105">
                    <i class="fas fa-credit-card text-3xl text-green-600 mb-3"></i>
                    <span class="font-medium text-gray-900">Pembayaran</span>
                    <span class="text-xs text-gray-600 mt-1">Metode bayar</span>
                </a>

                <a href="#"
                    class="flex flex-col items-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg hover:from-purple-100 hover:to-purple-200 transition-all duration-200 transform hover:scale-105">
                    <i class="fas fa-user-cog text-3xl text-purple-600 mb-3"></i>
                    <span class="font-medium text-gray-900">Profil</span>
                    <span class="text-xs text-gray-600 mt-1">Edit akun</span>
                </a>
            </div>
        </div>

        <!-- Recent Orders & Recommendations -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Recent Orders -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-blue-50 to-blue-100">
                    <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                        <i class="fas fa-history text-blue-600 mr-2"></i>
                        Pesanan Terakhir
                    </h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <!-- Order Item -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://via.placeholder.com/60" alt="Product"
                                        class="w-15 h-15 rounded-lg object-cover">
                                    <div class="ml-4">
                                        <h4 class="font-medium text-gray-900">Smartphone Samsung Galaxy</h4>
                                        <p class="text-sm text-gray-600">#ORD-2024-001</p>
                                        <p class="text-sm font-semibold text-green-600">Rp 3.200.000</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                    <i class="fas fa-check mr-1"></i>Selesai
                                </span>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://via.placeholder.com/60" alt="Product"
                                        class="w-15 h-15 rounded-lg object-cover">
                                    <div class="ml-4">
                                        <h4 class="font-medium text-gray-900">Laptop ASUS VivoBook</h4>
                                        <p class="text-sm text-gray-600">#ORD-2024-002</p>
                                        <p class="text-sm font-semibold text-green-600">Rp 7.500.000</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                    <i class="fas fa-truck mr-1"></i>Dikirim
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Lihat semua pesanan
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recommendations -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-green-50 to-green-100">
                    <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                        <i class="fas fa-magic text-green-600 mr-2"></i>
                        Rekomendasi Untuk Anda
                    </h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <!-- Product Recommendation -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/60" alt="Product"
                                    class="w-15 h-15 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-medium text-gray-900">Headphone Sony WH-1000XM4</h4>
                                    <p class="text-sm text-gray-600">Noise Cancelling</p>
                                    <div class="flex items-center justify-between mt-2">
                                        <p class="text-lg font-semibold text-green-600">Rp 1.899.000</p>
                                        <div class="flex items-center">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span class="text-sm text-gray-600">4.8</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/60" alt="Product"
                                    class="w-15 h-15 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-medium text-gray-900">Apple Watch Series 9</h4>
                                    <p class="text-sm text-gray-600">45mm GPS</p>
                                    <div class="flex items-center justify-between mt-2">
                                        <p class="text-lg font-semibold text-green-600">Rp 5.999.000</p>
                                        <div class="flex items-center">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span class="text-sm text-gray-600">4.9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium flex items-center">
                            Lihat lebih banyak
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promo Banner -->
        <div id="products" class="bg-gradient-to-r from-orange-400 to-red-500 rounded-lg p-8 mb-8 text-white">
            <div class="text-center">
                <i class="fas fa-fire text-4xl mb-4"></i>
                <h2 class="text-3xl font-bold mb-2">Flash Sale 70% OFF!</h2>
                <p class="text-xl mb-6">Dapatkan produk elektronik terbaik dengan harga super hemat</p>
                <div class="flex justify-center space-x-4">
                    <a href="#"
                        class="bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                        Belanja Sekarang
                    </a>
                    <a href="#"
                        class="border border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-600 transition-colors duration-200">
                        Lihat Semua Promo
                    </a>
                </div>
            </div>
        </div>

        <!-- Account Summary -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                <i class="fas fa-user-circle text-blue-600 mr-2"></i>
                Ringkasan Akun
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg">
                    <i class="fas fa-shopping-cart text-3xl text-blue-600 mb-3"></i>
                    <h4 class="font-semibold text-gray-900">Total Pembelian</h4>
                    <p class="text-2xl font-bold text-blue-600 mt-2">Rp 25.7M</p>
                    <p class="text-sm text-gray-600 mt-1">Sejak bergabung</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-lg">
                    <i class="fas fa-medal text-3xl text-green-600 mb-3"></i>
                    <h4 class="font-semibold text-gray-900">Status Member</h4>
                    <p class="text-lg font-bold text-green-600 mt-2">Gold Member</p>
                    <p class="text-sm text-gray-600 mt-1">Benefit eksklusif</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg">
                    <i class="fas fa-gift text-3xl text-purple-600 mb-3"></i>
                    <h4 class="font-semibold text-gray-900">Cashback</h4>
                    <p class="text-2xl font-bold text-purple-600 mt-2">Rp 450K</p>
                    <p class="text-sm text-gray-600 mt-1">Dapat digunakan</p>
                </div>
            </div>
        </div>

        <!-- Logout Section -->
        <div class="text-center">
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-medium transition-colors duration-200 flex items-center mx-auto">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>
@endsection
