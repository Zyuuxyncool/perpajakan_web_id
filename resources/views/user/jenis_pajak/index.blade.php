@extends('user.layouts.app')

@section('title', 'Jenis-Jenis Pajak Daerah')

@section('content')
<div class="materi-container">
    <div class="materi-content">
        <div class="materi-header">
            <h2>Jenis-Jenis Pajak Daerah</h2>
            <div class="divider"></div>
            <p class="lead">Memahami berbagai jenis pajak yang dikelola pemerintah daerah</p>
        </div>

        <!-- Pengantar -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Pengantar Pajak Daerah</h3>
            </div>
            <div class="sub-materi-body">
                <p class="text-justify">
                    Pajak Daerah dipungut oleh pemerintah daerah (Provinsi atau Kabupaten/Kota) dan digunakan 
                    untuk membiayai Anggaran Pendapatan dan Belanja Daerah (APBD). Pajak daerah merupakan 
                    salah satu sumber Pendapatan Asli Daerah (PAD) yang penting untuk pembangunan dan 
                    pelayanan publik di daerah.
                </p>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🏛</div>
                        <h4>Pemerintah Daerah</h4>
                        <p class="text-justify">
                            Dipungut dan dikelola oleh pemerintah provinsi atau kabupaten/kota
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💰</div>
                        <h4>APBD</h4>
                        <p class="text-justify">
                            Digunakan untuk membiayai Anggaran Pendapatan dan Belanja Daerah
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🏘</div>
                        <h4>Pembangunan Daerah</h4>
                        <p class="text-justify">
                            Mendukung pembangunan infrastruktur dan pelayanan publik daerah
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pajak Kendaraan Bermotor -->
        <div class="sub-materi-card" id="pkb">
            <div class="sub-materi-header">
                <h3>Pajak Kendaraan Bermotor (PKB)</h3>
            </div>
            <div class="sub-materi-body">
                <div class="jenis-pajak-content">
                    <div class="pajak-image">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Pajak Kendaraan Bermotor">
                    </div>
                    <div class="pajak-description">
                        <h4>Deskripsi</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <h4>Objek Pajak</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4>Tarif</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bea Balik Nama Kendaraan Bermotor -->
        <div class="sub-materi-card" id="bbnkb">
            <div class="sub-materi-header">
                <h3>Bea Balik Nama Kendaraan Bermotor (BBNKB)</h3>
            </div>
            <div class="sub-materi-body">
                <div class="jenis-pajak-content">
                    <div class="pajak-image">
                        <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2025&q=80" 
                             alt="Bea Balik Nama Kendaraan Bermotor">
                    </div>
                    <div class="pajak-description">
                        <h4>Deskripsi</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <h4>Objek Pajak</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4>Tarif</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pajak Bumi dan Bangunan Perdesaan dan Perkotaan -->
        <div class="sub-materi-card" id="pbb-p2">
            <div class="sub-materi-header">
                <h3>Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBB-P2)</h3>
            </div>
            <div class="sub-materi-body">
                <div class="jenis-pajak-content">
                    <div class="pajak-image">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1973&q=80" 
                             alt="Pajak Bumi dan Bangunan">
                    </div>
                    <div class="pajak-description">
                        <h4>Deskripsi</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <h4>Objek Pajak</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4>Tarif</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pajak Hotel dan Restoran -->
        <div class="sub-materi-card" id="hotel-restoran">
            <div class="sub-materi-header">
                <h3>Pajak Hotel dan Pajak Restoran</h3>
            </div>
            <div class="sub-materi-body">
                <div class="jenis-pajak-content">
                    <div class="pajak-image">
                        <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" 
                             alt="Pajak Hotel dan Restoran">
                    </div>
                    <div class="pajak-description">
                        <h4>Deskripsi</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <h4>Objek Pajak</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4>Tarif</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pajak Air dan Tanah -->
        <div class="sub-materi-card" id="air-tanah">
            <div class="sub-materi-header">
                <h3>Pajak Air dan Tanah</h3>
            </div>
            <div class="sub-materi-body">
                <div class="jenis-pajak-content">
                    <div class="pajak-image">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80" 
                             alt="Pajak Air dan Tanah">
                    </div>
                    <div class="pajak-description">
                        <h4>Deskripsi</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <h4>Objek Pajak</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4>Tarif</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pajak Reklame -->
        <div class="sub-materi-card" id="reklame">
            <div class="sub-materi-header">
                <h3>Pajak Reklame</h3>
            </div>
            <div class="sub-materi-body">
                <div class="jenis-pajak-content">
                    <div class="pajak-image">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
                             alt="Pajak Reklame">
                    </div>
                    <div class="pajak-description">
                        <h4>Deskripsi</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <h4>Objek Pajak</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4>Tarif</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pajak Barang dan Jasa Tertentu -->
        <div class="sub-materi-card" id="pbjt">
            <div class="sub-materi-header">
                <h3>Pajak Barang dan Jasa Tertentu (PBJT)</h3>
            </div>
            <div class="sub-materi-body">
                <div class="jenis-pajak-content">
                    <div class="pajak-image">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Pajak Barang dan Jasa Tertentu">
                    </div>
                    <div class="pajak-description">
                        <h4>Deskripsi</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <h4>Objek Pajak</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <h4>Tarif</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Navigation -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Navigasi Cepat</h3>
            </div>
            <div class="sub-materi-body">
                <div class="quick-nav-grid">
                    <a href="#pkb" class="quick-nav-item">
                        <div class="nav-icon">🚗</div>
                        <span>PKB</span>
                    </a>
                    <a href="#bbnkb" class="quick-nav-item">
                        <div class="nav-icon">📝</div>
                        <span>BBNKB</span>
                    </a>
                    <a href="#pbb-p2" class="quick-nav-item">
                        <div class="nav-icon">🏠</div>
                        <span>PBB-P2</span>
                    </a>
                    <a href="#hotel-restoran" class="quick-nav-item">
                        <div class="nav-icon">🏨</div>
                        <span>Hotel & Restoran</span>
                    </a>
                    <a href="#air-tanah" class="quick-nav-item">
                        <div class="nav-icon">💧</div>
                        <span>Air & Tanah</span>
                    </a>
                    <a href="#reklame" class="quick-nav-item">
                        <div class="nav-icon">📢</div>
                        <span>Reklame</span>
                    </a>
                    <a href="#pbjt" class="quick-nav-item">
                        <div class="nav-icon">📦</div>
                        <span>PBJT</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll untuk navigasi cepat
    const quickNavLinks = document.querySelectorAll('.quick-nav-item');
    
    quickNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 100;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Animasi saat scroll
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

    // Observe semua sub-materi cards
    document.querySelectorAll('.sub-materi-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});
</script>
@endpush