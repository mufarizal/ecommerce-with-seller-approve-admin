@extends('layouts.seller')

@section('title', 'Dashboard Seller')
@section('page-title', 'Dashboard Penjual')

@section('seller')
    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg shadow-lg p-6 mb-6 text-white">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <i class="fas fa-store text-4xl text-blue-200"></i>
                </div>
                <div class="ml-4">
                    <h1 class="text-2xl font-bold">Selamat Datang, {{ $user->name }}! 👋</h1>
                    <p class="text-blue-100">Kelola toko dan produk Anda dengan mudah</p>
                    <div class="flex items-center mt-2">
                        <span class="text-sm bg-white bg-opacity-20 px-3 py-1 rounded-full">
                            <i class="fas fa-user-tag mr-1"></i>
                            {{ ucfirst($user->role) }}
                        </span>
                        <span class="text-sm bg-white bg-opacity-20 px-3 py-1 rounded-full ml-2">
                            <i class="fas fa-check-circle mr-1"></i>
                            {{ ucfirst($user->status) }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <div class="text-3xl font-bold">Rp 2.5M</div>
                <div class="text-blue-200 text-sm">Penjualan bulan ini</div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Produk -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-box text-green-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Total Produk</h3>
                    <p class="text-2xl font-bold text-gray-900">245</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>+12 produk baru</span>
                </div>
            </div>
        </div>

        <!-- Pesanan Hari Ini -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-blue-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Pesanan Hari Ini</h3>
                    <p class="text-2xl font-bold text-gray-900">18</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm text-blue-600">
                    <i class="fas fa-clock mr-1"></i>
                    <span>5 perlu diproses</span>
                </div>
            </div>
        </div>

        <!-- Rating Toko -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-yellow-500">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-star text-yellow-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Rating Toko</h3>
                    <p class="text-2xl font-bold text-gray-900">4.8</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm text-yellow-600">
                    <i class="fas fa-thumbs-up mr-1"></i>
                    <span>98% positif</span>
                </div>
            </div>
        </div>

        <!-- Pengunjung -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-eye text-purple-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Pengunjung</h3>
                    <p class="text-2xl font-bold text-gray-900">1.2K</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm text-purple-600">
                    <i class="fas fa-chart-line mr-1"></i>
                    <span>+15% minggu ini</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities & Quick Actions -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Recent Orders -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                    <i class="fas fa-shopping-bag text-blue-600 mr-2"></i>
                    Pesanan Terbaru
                </h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <!-- Order Item -->
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-box text-blue-600"></i>
                            </div>
                            <div class="ml-3">
                                <p class="font-medium text-gray-900">#ORD-001</p>
                                <p class="text-sm text-gray-600">Smartphone XYZ</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-gray-900">Rp 2.500.000</p>
                            <span
                                class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-box text-green-600"></i>
                            </div>
                            <div class="ml-3">
                                <p class="font-medium text-gray-900">#ORD-002</p>
                                <p class="text-sm text-gray-600">Laptop Gaming ABC</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-gray-900">Rp 8.900.000</p>
                            <span
                                class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                Selesai
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-box text-blue-600"></i>
                            </div>
                            <div class="ml-3">
                                <p class="font-medium text-gray-900">#ORD-003</p>
                                <p class="text-sm text-gray-600">Headphone DEF</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-gray-900">Rp 750.000</p>
                            <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                Diproses
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center">
                        Lihat semua pesanan
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                    <i class="fas fa-bolt text-yellow-600 mr-2"></i>
                    Aksi Cepat
                </h3>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-2 gap-4">
                    <a href="#"
                        class="flex flex-col items-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                        <i class="fas fa-plus-circle text-2xl text-blue-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Tambah Produk</span>
                    </a>

                    <a href="#"
                        class="flex flex-col items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                        <i class="fas fa-shopping-bag text-2xl text-green-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Kelola Pesanan</span>
                    </a>

                    <a href="#"
                        class="flex flex-col items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                        <i class="fas fa-chart-bar text-2xl text-purple-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Lihat Analitik</span>
                    </a>

                    <a href="#"
                        class="flex flex-col items-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors">
                        <i class="fas fa-store-alt text-2xl text-orange-600 mb-2"></i>
                        <span class="text-sm font-medium text-gray-900">Edit Profil Toko</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Chart Placeholder -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
            <i class="fas fa-chart-line text-green-600 mr-2"></i>
            Performa Penjualan (7 Hari Terakhir)
        </h3>
        <div class="h-64 bg-gray-100 rounded-lg flex items-center justify-center">
            <div class="text-center text-gray-500">
                <i class="fas fa-chart-area text-4xl mb-2"></i>
                <p>Grafik penjualan akan ditampilkan di sini</p>
            </div>
        </div>
    </div>

    <!-- Logout Section -->
    <div class="flex justify-end">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200 flex items-center">
                <i class="fas fa-sign-out-alt mr-2"></i>
                Logout
            </button>
        </form>
    </div>
@endsection
