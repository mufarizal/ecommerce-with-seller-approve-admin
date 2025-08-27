<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - E-Commerce</title>
    @vite(['resources/css/app.css'], ['resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h1 {
            color: #333;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .register-header p {
            color: #666;
            font-size: 1rem;
        }

        .message-success {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: 500;
            text-align: center;
            animation: slideIn 0.5s ease-out;
        }

        .error-list {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            animation: slideIn 0.5s ease-out;
        }

        .error-list ul {
            list-style: none;
        }

        .error-list li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .error-list li:before {
            content: "⚠";
            position: absolute;
            left: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }

        .form-input:focus {
            outline: none;
            border-color: #667eea;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
        }

        .form-select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.8);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
        }

        .seller-fields {
            background: rgba(102, 126, 234, 0.05);
            padding: 20px;
            border-radius: 15px;
            border: 2px dashed #667eea;
            margin-top: 20px;
            animation: fadeIn 0.5s ease-out;
        }

        .seller-fields h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.2rem;
            text-align: center;
        }

        .register-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .login-link {
            text-align: center;
            margin-top: 25px;
            color: #666;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #764ba2;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 480px) {
            .register-container {
                padding: 25px;
                margin: 10px;
            }

            .register-header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-header">
            <h1>Daftar Akun</h1>
            <p>Bergabunglah dengan marketplace kami</p>
        </div>

        @if (session('message'))
            <div class="message-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="form-input" value="{{ old('name') }}"
                    required placeholder="Masukkan nama lengkap Anda">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-input" value="{{ old('email') }}"
                    required placeholder="contoh@email.com">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-input" required
                    placeholder="Minimal 8 karakter">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-input"
                    required placeholder="Ulangi password">
            </div>

            <div class="form-group">
                <label for="role">Daftar Sebagai</label>
                <select name="role" id="role" class="form-select" required>
                    <option value="">Pilih jenis akun</option>
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>👤 Pembeli</option>
                    <option value="seller" {{ old('role') == 'seller' ? 'selected' : '' }}>🏪 Penjual</option>
                </select>
            </div>

            <div id="seller_fields" class="seller-fields" style="display: none;">
                <h3>📋 Informasi Toko</h3>

                <div class="form-group">
                    <label for="store_name">Nama Toko</label>
                    <input type="text" name="store_name" id="store_name" class="form-input"
                        value="{{ old('store_name') }}" placeholder="Nama toko Anda">
                </div>

                <div class="form-group">
                    <label for="product_type">Jenis Produk</label>
                    <input type="text" name="product_type" id="product_type" class="form-input"
                        value="{{ old('product_type') }}" placeholder="Contoh: Fashion, Elektronik, Makanan">
                </div>

                <div class="form-group">
                    <label for="store_address">Alamat Toko</label>
                    <input type="text" name="store_address" id="store_address" class="form-input"
                        value="{{ old('store_address') }}" placeholder="Alamat lengkap toko">
                </div>

                <div class="form-group">
                    <label for="phone_number">Nomor Telepon</label>
                    <input type="tel" name="phone_number" id="phone_number" class="form-input"
                        value="{{ old('phone_number') }}" placeholder="08xxxxxxxxxx">
                </div>
            </div>

            <button type="submit" class="register-btn">🚀 Daftar Sekarang</button>
        </form>

        <div class="login-link">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
        </div>
    </div>

    <script>
        document.getElementById('role').addEventListener('change', function() {
            const sellerFields = document.getElementById('seller_fields');
            if (this.value === 'seller') {
                sellerFields.style.display = 'block';
                // Make seller fields required
                document.getElementById('store_name').required = true;
                document.getElementById('product_type').required = true;
                document.getElementById('store_address').required = true;
                document.getElementById('phone_number').required = true;
            } else {
                sellerFields.style.display = 'none';
                // Remove required attribute
                document.getElementById('store_name').required = false;
                document.getElementById('product_type').required = false;
                document.getElementById('store_address').required = false;
                document.getElementById('phone_number').required = false;
            }
        });

        // Check if seller was previously selected (for form validation errors)
        window.addEventListener('load', function() {
            const roleSelect = document.getElementById('role');
            if (roleSelect.value === 'seller') {
                document.getElementById('seller_fields').style.display = 'block';
            }
        });
    </script>
</body>

</html>
