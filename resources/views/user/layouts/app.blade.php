<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Edukasi Pajak Daerah')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* PENAMBAHAN CSS UNTUK MENGHILANGKAN CELAH PUTIH */
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }

        /* AKHIR PENAMBAHAN CSS */

        .navbar-custom {
            background-color: #2c3e50;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand {
            color: #ecf0f1;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar-custom .nav-link {
            color: #ecf0f1;
            padding: 10px 15px;
            margin: 0 2px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .navbar-custom .nav-link:hover {
            background-color: #34495e;
            color: white;
        }

        .navbar-custom .nav-link.active {
            background-color: #3498db;
            color: white;
        }

        .content {
            background-color: #ecf0f1;
            min-height: 100vh;
            padding: 0;
        }

        .main-container {
            margin-top: 0;
        }

        /* Auth Styles */
        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 450px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .auth-header h2 {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .auth-header p {
            color: #7f8c8d;
            margin-bottom: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .btn-auth {
            background: linear-gradient(135deg, #3498db, #2980b9);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }

        .auth-links {
            text-align: center;
            margin-top: 1.5rem;
        }

        .auth-links a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .auth-links a:hover {
            color: #2980b9;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .form-check {
            margin-bottom: 0;
        }

        .forgot-password {
            color: #3498db;
            text-decoration: none;
        }

        .forgot-password:hover {
            color: #2980b9;
        }

        /* User dropdown */
        .user-menu {
            position: relative;
        }

        .user-dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background: white;
            min-width: 200px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 0.5rem 0;
            z-index: 1000;
        }

        .user-dropdown.show {
            display: block;
        }

        .user-dropdown a {
            display: block;
            padding: 0.75rem 1.5rem;
            color: #2c3e50;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .user-dropdown a:hover {
            background: #f8f9fa;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .user-info:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #3498db;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .user-avatar-large {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3498db, #2980b9);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 2rem;
            margin: 0 auto;
        }

        /* Hero Slider */
        .hero-slider {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-content {
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Materi Section Styles dengan Background Full */
        .materi-container {
            position: relative;
            background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1911&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .materi-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .materi-content {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            max-width: 1200px;
            margin: 2rem auto;
            position: relative;
            z-index: 2;
            border: 1px solid rgba(255, 255, 255, 0.3);
            width: 90%;
        }

        .materi-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .materi-header h2 {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .materi-header .divider {
            width: 80px;
            height: 4px;
            background: #3498db;
            margin: 0 auto;
            border-radius: 2px;
        }

        .materi-item {
            margin-bottom: 2.5rem;
            padding-bottom: 2.5rem;
            border-bottom: 2px solid rgba(236, 240, 241, 0.7);
        }

        .materi-item:last-of-type {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .materi-item h4 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-weight: 600;
            font-size: 1.5rem;
        }

        .materi-item p {
            color: #34495e;
            line-height: 1.8;
            font-size: 1.1rem;
            text-align: justify;
            margin-bottom: 0;
        }

        .divider-custom {
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(52, 152, 219, 0.5), transparent);
            margin: 2rem 0;
            border: none;
        }

        .ahli-section {
            background: rgba(248, 249, 250, 0.7);
            border-radius: 10px;
            padding: 2rem;
            margin-top: 2rem;
            border-left: 4px solid #3498db;
            backdrop-filter: blur(5px);
        }

        .ahli-section h5 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .ahli-content {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .ahli-photo img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .ahli-text {
            flex: 1;
        }

        .ahli-text p {
            margin-bottom: 0.5rem;
        }

        .ahli-name {
            font-weight: 600;
            color: #2c3e50;
            font-size: 1.1rem;
        }

        .text-justify {
            text-align: justify;
        }

        /* Sub Materi Card Styles */
        .sub-materi-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
            border: 1px solid #e9ecef;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sub-materi-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .sub-materi-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            padding: 1.5rem 2rem;
            border-bottom: 1px solid #e9ecef;
        }

        .sub-materi-header h3 {
            color: white;
            margin: 0;
            font-weight: 600;
            font-size: 1.4rem;
        }

        .sub-materi-body {
            padding: 2rem;
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .feature-card {
            padding: 2rem;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 12px;
            text-align: center;
            border: 1px solid #e9ecef;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-card h4 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* Jenis Pajak Styles */
        .jenis-pajak-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            align-items: start;
        }

        .pajak-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .pajak-image img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .pajak-image img:hover {
            transform: scale(1.05);
        }

        .pajak-description h4 {
            color: #2c3e50;
            margin: 1.5rem 0 0.5rem 0;
            font-weight: 600;
            border-left: 3px solid #3498db;
            padding-left: 0.8rem;
        }

        .pajak-description h4:first-child {
            margin-top: 0;
        }

        .quick-nav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
        }

        .quick-nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1.5rem 1rem;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 10px;
            text-decoration: none;
            color: #2c3e50;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .quick-nav-item:hover {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
            border-color: #3498db;
        }

        .nav-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .quick-nav-item span {
            font-weight: 600;
            text-align: center;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .materi-content {
                padding: 2rem 1.5rem;
                margin: 1rem auto;
                width: 95%;
            }

            .materi-header h2 {
                font-size: 2rem;
            }

            .materi-item h4 {
                font-size: 1.3rem;
            }

            .ahli-content {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .ahli-photo img {
                width: 100px;
                height: 100px;
            }

            .materi-container {
                background-attachment: scroll;
                min-height: auto;
            }

            .hero-slider {
                height: 50vh;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .sub-materi-header {
                padding: 1rem 1.5rem;
            }

            .sub-materi-header h3 {
                font-size: 1.2rem;
            }

            .sub-materi-body {
                padding: 1.5rem;
            }

            .jenis-pajak-content {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .pajak-image img {
                height: 250px;
            }

            .quick-nav-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .auth-card {
                padding: 2rem 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .materi-content {
                padding: 1rem;
            }

            .sub-materi-body {
                padding: 1rem;
            }

            .feature-card,
            .quick-nav-item {
                padding: 1rem;
            }

            .quick-nav-grid {
                grid-template-columns: 1fr;
            }

            .nav-icon {
                font-size: 1.5rem;
            }

            .auth-card {
                padding: 1.5rem 1rem;
            }

            .form-options {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
        }

        /* Manfaat Pajak Styles */
        .manfaat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 2rem;
        }

        .manfaat-item {
            display: flex;
            gap: 1.5rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 12px;
            border-left: 4px solid #3498db;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .manfaat-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .manfaat-icon {
            font-size: 2.5rem;
            flex-shrink: 0;
        }

        .manfaat-content h4 {
            color: #2c3e50;
            margin-bottom: 0.8rem;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .highlight-box {
            display: flex;
            gap: 1.5rem;
            padding: 2rem;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            border-radius: 12px;
            border: 2px solid #2196f3;
        }

        .highlight-icon {
            font-size: 3rem;
            flex-shrink: 0;
        }

        .highlight-text h5 {
            color: #1976d2;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .benefit-card {
            padding: 1.5rem;
            background: white;
            border-radius: 10px;
            border: 1px solid #e9ecef;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .benefit-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Responsive untuk Manfaat Pajak */
        @media (max-width: 768px) {
            .manfaat-grid {
                grid-template-columns: 1fr;
            }

            .manfaat-item {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .highlight-box {
                flex-direction: column;
                text-align: center;
                padding: 1.5rem;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .manfaat-icon,
            .highlight-icon {
                font-size: 2rem;
            }
        }

        /* Tujuan Pajak Styles */
        .tujuan-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: start;
        }

        .tujuan-text p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #34495e;
        }

        .tujuan-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .tujuan-image img:hover {
            transform: scale(1.02);
        }

        .image-caption {
            font-size: 0.9rem;
            color: #7f8c8d;
            margin-top: 0.5rem;
            font-style: italic;
        }

        .highlight-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .highlight-item {
            display: flex;
            gap: 1rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 10px;
            border-left: 4px solid #3498db;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .highlight-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .highlight-icon {
            font-size: 2rem;
            flex-shrink: 0;
        }

        .highlight-text h5 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .dampak-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: start;
        }

        .dampak-image img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .benefits-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .benefits-list li {
            padding: 0.8rem 0;
            border-bottom: 1px solid #ecf0f1;
            display: flex;
            align-items: flex-start;
        }

        .benefits-list li:last-child {
            border-bottom: none;
        }

        /* Responsive untuk Tujuan Pajak */
        @media (max-width: 768px) {

            .tujuan-content,
            .dampak-content {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .highlight-section {
                grid-template-columns: 1fr;
            }

            .tujuan-image img,
            .dampak-image img {
                height: 200px;
            }

            .highlight-item {
                flex-direction: column;
                text-align: center;
                gap: 0.8rem;
            }
        }

        .bg-navy {
            background-color: #001f3f;
            /* contoh navy */
            color: white;
        }

        .btn-navy {
            background-color: #001f3f;
            color: white;
            border: none;
        }

        .btn-navy:hover {
            background-color: #003366;
            /* versi lebih gelap saat hover */
        }


        /* Kewajiban Perpajakan Styles */
        .kewajiban-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: start;
        }

        .kewajiban-text p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #34495e;
        }

        .kewajiban-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .kewajiban-image img:hover {
            transform: scale(1.02);
        }

        .image-caption {
            font-size: 0.9rem;
            color: #7f8c8d;
            margin-top: 0.5rem;
            font-style: italic;
        }

        /* Responsive untuk Kewajiban Perpajakan */
        @media (max-width: 768px) {
            .kewajiban-content {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .kewajiban-image img {
                height: 200px;
            }
        }
    </style>

    <!-- Additional assets (plugins, theme CSS) copied from main layout -->
    <base href="{{ url('/') }}" />
    <meta name="token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    @stack('css_plugins')
    <link href="{{ asset('assets_admin/plugins/custom/bootstrap-datepicker/bootstrap-datepicker.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets_admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_landing/css/landing.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="{{ asset('assets_admin/css/custom.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('beranda') }}">
                <i class="fas fa-landmark me-2"></i>
                PerPajakaan
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="color: white;">☰</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('beranda') }}">
                            <i class="fas fa-home me-1"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('regulation') ? 'active' : '' }}"
                            href="{{ route('user.regulation.index') }}">
                            <i class="fas fa-gavel me-1"></i>
                            Undang-Undang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('jenis_pajak') ? 'active' : '' }}"
                            href="{{ route('user.jenis_pajak.index') }}">
                            <i class="fas fa-list me-1"></i>
                            Jenis Pajak Daerah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('manfaat_pajak') ? 'active' : '' }}"
                            href="{{ route('user.manfaat_pajak.index') }}">
                            <i class="fas fa-chart-line me-1"></i>
                            Manfaat Pajak Daerah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tujuan_pajak') ? 'active' : '' }}"
                            href="{{ route('user.tujuan_pajak.index') }}">
                            <i class="fas fa-bullseye me-1"></i>
                            Tujuan Pajak
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kewajiban_pajak') ? 'active' : '' }}"
                            href="{{ route('user.kewajiban_pajak.index') }}">
                            <i class="fas fa-handshake me-1"></i>
                            Kewajiban Perpajakan
                        </a>
                    </li>
                </ul>

                <!-- User Menu -->
                <ul class="navbar-nav">
                    @auth
                        @php
                            $user = auth()->user() ?? [];
                            $user_menus = $user_menus ?? [];
                        @endphp
                        @if (!empty($user))
                            <li class="nav-item user-menu">
                                @php
                                    $foto = '';
                                    if (!empty($user->user)) {
                                        $foto = $user->user->photo;
                                    }

                                    $photoUrl = null;
                                    if (!empty($foto)) {
                                        if (\Illuminate\Support\Str::startsWith($foto, ['http://', 'https://'])) {
                                            $photoUrl = $foto;
                                        } elseif (\Illuminate\Support\Str::startsWith($foto, 'public/')) {
                                            $photoUrl = \Illuminate\Support\Facades\Storage::url($foto);
                                        } elseif (file_exists(public_path($foto))) {
                                            $photoUrl = asset($foto);
                                        } else {
                                            $photoUrl = \Illuminate\Support\Facades\Storage::url($foto);
                                        }
                                    }
                                @endphp

                                <div class="user-info" onclick="toggleDropdown()">
                                    <div class="user-avatar">
                                        @if (!empty($photoUrl))
                                            <img src="{{ $photoUrl }}" alt="Avatar"
                                                style="width:32px;height:32px;object-fit:cover;border-radius:50%;" />
                                        @else
                                            {{ strtoupper(substr($user->name ?? '', 0, 1)) }}
                                        @endif
                                    </div>
                                    <span class="text-white"
                                        title="{{ $user->name ?? '' }}">{{ \Illuminate\Support\Str::limit($user->name ?? '', 20, '...') }}</span>
                                    <i class="fas fa-chevron-down text-white ms-1"></i>
                                </div>
                                <div class="user-dropdown" id="userDropdown">
                                    <a href="{{ route('user.profil.index') }}">
                                        <i class="fas fa-user me-2"></i>Profile
                                    </a>
                                    <a href="{{ route('logout') }}">
                                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                                    </a>
                                </div>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt me-1"></i>
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register', ['role' => 'User']) }}">
                                <i class="fas fa-user-plus me-1"></i>
                                Register
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('hero-section')

        <div class="container-fluid main-container">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleDropdown() {
            document.getElementById('userDropdown').classList.toggle('show');
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', function(e) {
            if (!e.target.closest('.user-menu')) {
                document.getElementById('userDropdown').classList.remove('show');
            }
        });
    </script>

    <!-- Shared scripts and plugin initializers copied from main layout -->
    <script>
        const hostUrl = "{{ asset('assets') }}/";
    </script>
    <script>
        const baseUrl = "{{ url('/') }}";
    </script>
    <script src="{{ asset('assets_admin/plugins/global/plugins.bundle.js') }}"></script>
    @stack('js_plugins')
    <!-- Ionicons CDN -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('assets_admin/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/custom/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/auto-numeric.js') }}"></script>
    <script src="{{ asset('assets_landing/js/landing.js') }}"></script>
    <script src="{{ asset('assets_admin/js/io.js') }}"></script>

    <!-- jQuery UI (needed by autocomplete) -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <!-- Autocomplete initialization and helpers (from main layout) -->
    {{-- <script>
        $(function() {
            const autocompleteOptions = {
                source: "{{ route('search.autocomplete') }}",
                minLength: 3,
                delay: 300,
                select: function(event, ui) {
                    $(this).val(ui.item.value);
                    const form = $(this).closest('form');
                    form.submit();
                    if ($(this).attr('id') === 'mobile_search_input_modal') {
                        $('#mobileSearchModal').modal('hide');
                    }
                    return false;
                }
            };

            // Init autocomplete on desktop and mobile inputs if present
            if (typeof $ !== 'undefined' && $.ui && $('#search_input').length) {
                $("#search_input").autocomplete(autocompleteOptions);
            }
            if (typeof $ !== 'undefined' && $.ui && $('#mobile_search_input_modal').length) {
                $("#mobile_search_input_modal").autocomplete(autocompleteOptions);
            }
        });
    </script> --}}

    <script>
        @if (session()->has('success'))
            swal.fire('{{ session('success') }}');
        @endif
        @if (session()->has('error'))
            Swal.fire({
                icon: "error",
                title: "{{ session('error') }}",
            });
        @endif

        // scroll header effect
        document.addEventListener('scroll', function() {
            if (window.scrollY > 20) {
                document.body.classList.add('scrolled');
            } else {
                document.body.classList.remove('scrolled');
            }
        });

        // dynamic padding for sticky header
        function updateBodyPadding() {
            const header = document.getElementById('kt_header');
            if (header) {
                document.body.style.paddingTop = header.getBoundingClientRect().height + 'px';
            }
        }

        window.addEventListener('load', updateBodyPadding);
        window.addEventListener('resize', updateBodyPadding);
        document.addEventListener('DOMContentLoaded', updateBodyPadding);
        setTimeout(updateBodyPadding, 100);
    </script>

    @stack('scripts')
</body>

</html>
