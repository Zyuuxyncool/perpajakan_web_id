@extends('user.layouts.app')

@section('title', 'Kewajiban Perpajakan')

@section('content')
<div class="materi-container">
    <div class="materi-content">
        <div class="materi-header">
            <h2>Kewajiban Perpajakan</h2>
            <div class="divider"></div>
            <p class="lead">Memahami kewajiban perpajakan daerah di Kabupaten Sidoarjo</p>
        </div>

        <!-- Konten Utama -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3><i class="fas fa-handshake me-2"></i>Kewajiban Perpajakan Daerah Sidoarjo</h3>
            </div>
            <div class="sub-materi-body">
                <div class="kewajiban-content">
                    <div class="kewajiban-text">
                        <p class="text-justify">
                            <strong>Kewajiban perpajakan daerah di Sidoarjo didasarkan pada peraturan daerah, yang utama adalah Peraturan Daerah Kabupaten Sidoarjo Nomor 1 Tahun 2024 tentang Pajak Daerah dan Retribusi Daerah.</strong>
                        </p>
                        
                        <p class="text-justify">
                            <strong>Kewajiban ini mencakup pendaftaran objek pajak, pelaporan, dan pembayaran berbagai jenis pajak yang dikelola oleh Badan Pelayanan Pajak Daerah (BPPD) Kabupaten Sidoarjo.</strong>
                        </p>
                    </div>
                    
                    <div class="kewajiban-image">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1911&q=80" 
                             alt="Pelayanan Pajak Daerah Sidoarjo" class="img-fluid rounded">
                        <p class="image-caption">Badan Pelayanan Pajak Daerah (BPPD) Kabupaten Sidoarjo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles khusus untuk halaman Kewajiban Perpajakan */
.kewajiban-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: start;
}

.kewajiban-text {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.kewajiban-text p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #34495e;
    margin: 0;
}

.kewajiban-image {
    text-align: center;
}

.kewajiban-image img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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

/* Responsive Design */
@media (max-width: 768px) {
    .kewajiban-content {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .kewajiban-image img {
        height: 200px;
    }
}

@media (max-width: 480px) {
    .kewajiban-content {
        gap: 1rem;
    }
    
    .kewajiban-image img {
        height: 180px;
    }
}
</style>
@endsection