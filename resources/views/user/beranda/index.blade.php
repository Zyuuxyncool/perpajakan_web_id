@extends('user.layouts.app')

@section('title', 'Beranda - Edukasi Pajak Daerah')
@section('page-title', 'Beranda Edukasi Pajak Daerah')

@section('hero-section')
<!-- Hero Slider Section -->
<div class="hero-slider">
    <!-- Slide 1 - Taxation Concept -->
    <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1911&q=80');">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>Edukasi Pajak Daerah</h1>
                <p>Memahami pentingnya kontribusi pajak untuk pembangunan daerah</p>
            </div>
        </div>
    </div>
    
    <!-- Slide 2 - Financial Growth -->
    <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2015&q=80');">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>Pembangunan Daerah</h1>
                <p>Pajak daerah mendukung pembangunan infrastruktur dan fasilitas publik</p>
            </div>
        </div>
    </div>
    
    <!-- Slide 3 - Community Development -->
    <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1973&q=80');">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>Kesejahteraan Masyarakat</h1>
                <p>Kontribusi pajak meningkatkan kualitas hidup masyarakat</p>
            </div>
        </div>
    </div>
    
    <!-- Slide 4 - Government Service -->
    <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>Pelayanan Publik</h1>
                <p>Pajak daerah mendukung pelayanan publik yang lebih baik</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Materi Definisi Pajak -->
<div class="materi-container">
    <div class="materi-content">
        <div class="materi-header">
            <h2>Definisi Pajak</h2>
            <div class="divider"></div>
        </div>
        
        <!-- Definisi Pajak Umum -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Definisi Pajak Secara Umum</h3>
            </div>
            <div class="sub-materi-body">
                <p class="text-justify">
                    Pajak adalah suatu kontribusi yang bersifat memaksa dari individu atau badan usaha 
                    berdasarkan undang-undang, dengan tidak mendapatkan imbalan langsung dan digunakan 
                    bagi keperluan negara bagi kemakmuran rakyat.
                </p>
            </div>
        </div>

        <!-- Definisi Pajak Daerah -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Definisi Pajak Daerah</h3>
            </div>
            <div class="sub-materi-body">
                <p class="text-justify">
                    Pajak daerah adalah sumbangan dengan sifat memaksa yang dibayarkan oleh individu 
                    ataupun badan usaha kepada pemerintah daerah (provinsi, kabupaten, atau kota) tanpa 
                    hasil langsung yang spesifik. Dana dari pajak daerah menjadi salah satu sumber 
                    Pendapatan Asli Daerah (PAD) yang digunakan untuk membiayai pembangunan dan 
                    penyediaan layanan umum di daerah.
                </p>
            </div>
        </div>

        <!-- Definisi Menurut Ahli -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Definisi Pajak Menurut Ahli</h3>
            </div>
            <div class="sub-materi-body">
                <!-- Ahli 1 -->
                <div class="ahli-section mb-4">
                    <div class="ahli-content">
                        <div class="ahli-photo">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                                 alt="Dr. Soeparman Soemahamidjaja">
                        </div>
                        <div class="ahli-text">
                            <h5 class="ahli-name">Dr. Soeparman Soemahamidjaja</h5>
                            <p class="text-justify">
                                "Pajak adalah iuran wajib, berupa uang atau barang yang dipungut oleh penguasa 
                                berdasarkan norma-norma hukum, guna menutup biaya produksi barang-barang dan 
                                jasa-jasa kolektif dalam mencapai kesejahteraan umum."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ahli 2 -->
                <div class="ahli-section mb-4">
                    <div class="ahli-content">
                        <div class="ahli-photo">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                                 alt="Prof. Dr. MJH. Smeeths">
                        </div>
                        <div class="ahli-text">
                            <h5 class="ahli-name">Prof. Dr. MJH. Smeeths</h5>
                            <p class="text-justify">
                                "Menyatakan bahwa pajak adalah prestasi kepada Pemerintah yang terutang melalui norma umum, 
                                dapat dipaksakan tanpa kontra prestasi individual, dan untuk menutup pengeluaran negara."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ahli 3 -->
                <div class="ahli-section">
                    <div class="ahli-content">
                        <div class="ahli-photo">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                                 alt="Prof. Dr. H. Rochmat Soemitro SH">
                        </div>
                        <div class="ahli-text">
                            <h5 class="ahli-name">Prof. Dr. H. Rochmat Soemitro SH</h5>
                            <p class="text-justify">
                                "Pajak adalah iuran rakyat kepada Kas Negara berdasarkan undang-undang (yang dapat dipaksakan) 
                                dengan tiada mendapatkan jasa timbal (kontra prestasi) yang langsung dapat ditunjukan dan yang 
                                digunakan untuk membayar pengeluaran umum."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Karakteristik Pajak -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Karakteristik Pajak</h3>
            </div>
            <div class="sub-materi-body">
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">📋</div>
                        <h4>Bersifat Memaksa</h4>
                        <p class="text-justify">
                            Pajak dipungut berdasarkan undang-undang dan bersifat wajib bagi setiap warga negara 
                            yang memenuhi kriteria sebagai wajib pajak.
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">⚖️</div>
                        <h4>Tidak Ada Imbalan Langsung</h4>
                        <p class="text-justify">
                            Pembayaran pajak tidak memberikan imbalan langsung secara individual, namun manfaatnya 
                            dinikmati secara kolektif oleh masyarakat.
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🏛️</div>
                        <h4>Untuk Kepentingan Umum</h4>
                        <p class="text-justify">
                            Dana pajak digunakan untuk membiayai pembangunan, pelayanan publik, dan kesejahteraan 
                            masyarakat secara keseluruhan.
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📚</div>
                        <h4>Berdasarkan Undang-Undang</h4>
                        <p class="text-justify">
                            Pemungutan pajak diatur dalam peraturan perundang-undangan yang berlaku, baik di tingkat 
                            nasional maupun daerah.
                        </p>
                    </div>
                </div>
            </div>
        </div>

@endsection

@push('styles')
<style>
    /* Main Container Styles */
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
    
    /* Header Styles */
    .materi-header {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .materi-header h2 {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 1rem;
        font-size: 2.5rem;
    }
    
    .divider {
        height: 4px;
        background: linear-gradient(90deg, #007bff, #28a745);
        width: 120px;
        margin: 0 auto;
        border-radius: 2px;
    }
    
    /* Sub Materi Card Styles */
    .sub-materi-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        margin-bottom: 2rem;
        border: 1px solid #e9ecef;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .sub-materi-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
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
    
    .text-justify {
        text-align: justify;
        line-height: 1.7;
        color: #555;
        font-size: 1rem;
        margin: 0;
    }
    
    /* Ahli Section Styles - PERUBAHAN UTAMA */
    .ahli-section {
        background: rgba(248, 249, 250, 0.7);
        border-radius: 10px;
        padding: 2rem;
        margin-bottom: 2rem;
        border-left: 4px solid #3498db;
        backdrop-filter: blur(5px);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .ahli-section:last-child {
        margin-bottom: 0;
    }

    .ahli-section:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    
    .ahli-content {
        display: flex;
        align-items: flex-start;
        gap: 2rem;
    }
    
    .ahli-photo img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        flex-shrink: 0;
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
        font-size: 1.3rem;
        margin-bottom: 1rem;
        border-bottom: 2px solid #3498db;
        padding-bottom: 0.5rem;
    }
    
    /* Features Grid Styles */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
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
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
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
    
    /* Functions Grid Styles */
    .functions-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .function-card {
        padding: 2rem;
        background: white;
        border-radius: 12px;
        border-top: 4px solid #28a745;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s ease;
    }
    
    .function-card:hover {
        transform: translateY(-3px);
    }
    
    .function-card h4 {
        color: #28a745;
        margin-bottom: 1rem;
        font-weight: 600;
        font-size: 1.1rem;
    }
    
    /* Hero Slider Styles */
    .hero-slider {
        position: relative;
        height: 500px;
        overflow: hidden;
        border-radius: 0 0 20px 20px;
    }
    
    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
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
        background: rgba(0,0,0,0.6);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hero-content {
        text-align: center;
        color: white;
        max-width: 800px;
        padding: 0 2rem;
    }
    
    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    
    .hero-content p {
        font-size: 1.3rem;
        opacity: 0.9;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .materi-content {
            padding: 1.5rem;
            margin: 1rem auto;
            width: 95%;
        }
        
        .materi-header h2 {
            font-size: 2rem;
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
        
        .ahli-content {
            flex-direction: column;
            text-align: center;
            gap: 1.5rem;
        }
        
        .ahli-photo img {
            width: 100px;
            height: 100px;
            margin: 0 auto;
        }
        
        .features-grid,
        .functions-grid {
            grid-template-columns: 1fr;
        }
        
        .hero-content h1 {
            font-size: 2.5rem;
        }
        
        .hero-content p {
            font-size: 1.1rem;
        }

        .materi-container {
            background-attachment: scroll;
            min-height: auto;
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
        .function-card {
            padding: 1.5rem;
        }
        
        .ahli-section {
            padding: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Slider functionality
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;
        
        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }
        
        function nextSlide() {
            showSlide(currentSlide + 1);
        }
        
        // Auto slide every 5 seconds
        setInterval(nextSlide, 5000);
        showSlide(0);
        
        // Add smooth scroll behavior
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add animation on scroll for sub-materi cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe all sub-materi cards
        document.querySelectorAll('.sub-materi-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    });
</script>
@endpush