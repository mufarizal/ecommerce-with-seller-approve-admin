@extends('layouts.admin')

@section('title', 'Dashboard Admin')
@section('page-title', 'Dashboard Admin')

@section('admin')
    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-lg p-6 mb-6 text-white">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <i class="fas fa-crown text-4xl text-yellow-300"></i>
            </div>
            <div class="ml-4">
                <h1 class="text-2xl font-bold">Selamat Datang, {{ $user->name }}!</h1>
                <p class="text-blue-100">Administrator Dashboard - Kelola seluruh sistem</p>
            </div>
        </div>
    </div>

    {{-- Alert Messages --}}
    @if (session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <div class="flex items-center mb-2">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <span class="font-medium">Terdapat kesalahan:</span>
            </div>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Statistics Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Total Users Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-users text-blue-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Total User</h3>
                    <p class="text-3xl font-bold text-gray-900">{{ number_format($totalUser) }}</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm text-gray-600">
                    <i class="fas fa-arrow-up text-green-500 mr-1"></i>
                    <span>Pengguna terdaftar</span>
                </div>
            </div>
        </div>

        <!-- Total Sellers Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-store text-green-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Total Seller</h3>
                    <p class="text-3xl font-bold text-gray-900">{{ number_format($totalSeller) }}</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm text-gray-600">
                    <i class="fas fa-check-circle text-green-500 mr-1"></i>
                    <span>Seller aktif</span>
                </div>
            </div>
        </div>

        <!-- Pending Sellers Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-orange-500">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-clock text-orange-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Pending Seller</h3>
                    <p class="text-3xl font-bold text-gray-900">{{ number_format($pendingSeller) }}</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center text-sm text-gray-600">
                    <i class="fas fa-hourglass-half text-orange-500 mr-1"></i>
                    <span>Menunggu persetujuan</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Pending Approval Table --}}
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center">
                <i class="fas fa-user-clock text-orange-500 mr-2"></i>
                <h3 class="text-lg font-semibold text-gray-900">Daftar User Pending Approval</h3>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-user mr-2"></i>Nama
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-envelope mr-2"></i>Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-info-circle mr-2"></i>Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <i class="fas fa-cogs mr-2"></i>Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($pendingUsers as $pending)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center">
                                            <i class="fas fa-user text-gray-600"></i>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $pending->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $pending->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    <i class="fas fa-clock mr-1"></i>
                                    {{ $pending->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <form method="POST" action="{{ route('admin.approve', $pending->id) }}" class="inline">
                                    @csrf
                                    <button type="submit"
                                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 flex items-center">
                                        <i class="fas fa-check mr-1"></i>
                                        Approve
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-check-circle text-6xl text-green-300 mb-4"></i>
                                    <p class="text-gray-500 text-lg font-medium">Tidak ada user pending</p>
                                    <p class="text-gray-400 text-sm">Semua user sudah disetujui</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <a href="#"
            class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 text-center">
            <i class="fas fa-users text-3xl text-blue-600 mb-3"></i>
            <h4 class="font-semibold text-gray-900">Kelola User</h4>
            <p class="text-sm text-gray-600 mt-1">Lihat semua pengguna</p>
        </a>

        <a href="#"
            class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 text-center">
            <i class="fas fa-store text-3xl text-green-600 mb-3"></i>
            <h4 class="font-semibold text-gray-900">Kelola Seller</h4>
            <p class="text-sm text-gray-600 mt-1">Manajemen penjual</p>
        </a>

        <a href="#"
            class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 text-center">
            <i class="fas fa-chart-line text-3xl text-purple-600 mb-3"></i>
            <h4 class="font-semibold text-gray-900">Laporan</h4>
            <p class="text-sm text-gray-600 mt-1">Analitik sistem</p>
        </a>

        <a href="#"
            class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200 text-center">
            <i class="fas fa-cog text-3xl text-gray-600 mb-3"></i>
            <h4 class="font-semibold text-gray-900">Pengaturan</h4>
            <p class="text-sm text-gray-600 mt-1">Konfigurasi sistem</p>
        </a>
    </div>

    {{-- Logout Section --}}
    <div class="mt-8 flex justify-end">
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
