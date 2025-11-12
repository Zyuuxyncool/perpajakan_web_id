@extends('admin.layouts.layout')

@section('title', 'Register - Nusantara Store')

@section('body-class', 'auth-bg')

@push('styles')
    <style>
        /* PerPajakaan themed register styles */
        body {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            color: #2c3e50;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(20, 34, 56, 0.35);
            width: 100%;
            max-width: 520px;
            padding: 38px 36px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            border: 1px solid rgba(52, 73, 94, 0.06);
        }

        .register-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 26px 80px rgba(20, 34, 56, 0.45);
        }

        .register-subtitle {
            font-size: 15px;
            color: #6b7280;
            margin-top: 6px;
        }

        .register-logo {
            max-height: 82px;
            width: auto;
            display: block;
            margin: 0 auto 6px auto;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 14px;
            border: 1px solid #e6eef8;
            transition: box-shadow 0.15s ease, border-color 0.15s ease;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.12);
        }

        .btn-primary {
            background: linear-gradient(90deg, #3498db 0%, #2c3e50 100%);
            border: none;
            border-radius: 10px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.6px;
            padding: 12px 18px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(20, 34, 56, 0.18);
        }

        .login-links a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.15s ease;
        }

        .login-links a:hover {
            color: #0b67b0;
        }

        @media (max-width: 576px) {
            .register-card {
                padding: 28px 20px;
                max-width: 92%;
            }
        }
    </style>
@endpush

@section('body')
    <div class="register-card">
        <div class="text-center mb-4">
            <img src="{{ asset('images/Tax-Icon-Transparent-File.png') }}" alt="Logo"
                class="img-fluid mx-auto d-block register-logo">
            <p class="register-subtitle">Buat akun untuk mulai</p>
        </div>

        <form action="{{ route('register.proses', ['role' => 'User']) }}" method="post">
            @csrf
            <div class="mb-3">
                <x-metronic-input name="name" type="text" caption="Nama Lengkap" placeholder="Masukkan Nama Lengkap"
                    :value="old('name')" :viewtype="2" />
            </div>

            <div class="mb-3">
                <x-metronic-input name="email" type="text" caption="Email" placeholder="Masukkan Email"
                    :value="old('email')" :viewtype="2" />
            </div>

            <div class="mb-3">
                <x-metronic-input name="password" type="password" caption="Password" placeholder="Masukkan Password"
                    :viewtype="2" />
            </div>

            <div class="mb-4">
                <x-metronic-input name="password_confirmation" type="password" caption="Konfirmasi Password"
                    placeholder="Ulangi Password" :viewtype="2" />
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 mb-3">DAFTAR</button>

            <div class="login-links text-center">
                <a href="{{ route('login') }}" class="fw-semibold">Sudah Punya Akun? Masuk Disini</a>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        init_form_element()
    </script>
@endpush
