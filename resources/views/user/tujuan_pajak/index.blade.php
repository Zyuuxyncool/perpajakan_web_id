@extends('user.layouts.app')

@section('title', 'Tujuan Pajak Daerah')

@section('content')
<div class="materi-container">
    <div class="materi-content">
        <div class="materi-header">
            <h2>Tujuan Pajak Daerah</h2>
            <div class="divider"></div>
            <p class="lead">Mewujudkan pembangunan dan kesejahteraan masyarakat Sidoarjo melalui kontribusi pajak daerah</p>
        </div>

        <!-- Konten Utama -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3><i class="fas fa-bullseye me-2"></i>Tujuan Pajak Daerah Sidoarjo</h3>
            </div>
            <div class="sub-materi-body">
                <div class="tujuan-content">
                    <div class="tujuan-text">
                        <p class="text-justify">
                            <strong>Tujuan adanya pajak di daerah Sidoarjo adalah untuk membiayai pembangunan infrastruktur, 
                            pendidikan, dan kesehatan, serta meningkatkan kualitas pelayanan publik di Kabupaten Sidoarjo.</strong>
                        </p>
                        
                        <p class="text-justify">
                            <strong>Serta dengan adanya pajak di daerah Sidoarjo, berguna untuk menjaga stabilitas ekonomi, 
                            menekan inflasi serta mendorong perekonomian di daerah Sidoarjo.</strong>
                        </p>
                    </div>
                    
                    <div class="tujuan-image">
                        <img src="https://images.unsplash.com/photo-1542744095-291d1f67b221?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Pembangunan Infrastruktur Sidoarjo" class="img-fluid rounded">
                        <p class="image-caption">Pembangunan infrastruktur di Kabupaten Sidoarjo didanai dari pajak daerah</p>
                    </div>
                </div>

                <div class="highlight-section">
                    <div class="highlight-item">
                        <div class="highlight-icon">🏗️</div>
                        <div class="highlight-text">
                            <h5>Pembangunan Infrastruktur</h5>
                            <p class="text-justify">Membangun dan memperbaiki jalan, jembatan, dan fasilitas publik lainnya</p>
                        </div>
                    </div>
                    
                    <div class="highlight-item">
                        <div class="highlight-icon">🎓</div>
                        <div class="highlight-text">
                            <h5>Peningkatan Pendidikan</h5>
                            <p class="text-justify">Meningkatkan kualitas pendidikan melalui pembangunan sekolah dan fasilitas belajar</p>
                        </div>
                    </div>
                    
                    <div class="highlight-item">
                        <div class="highlight-icon">🏥</div>
                        <div class="highlight-text">
                            <h5>Pelayanan Kesehatan</h5>
                            <p class="text-justify">Memperbaiki fasilitas kesehatan dan pelayanan medis untuk masyarakat</p>
                        </div>
                    </div>
                    
                    <div class="highlight-item">
                        <div class="highlight-icon">💼</div>
                        <div class="highlight-text">
                            <h5>Stabilitas Ekonomi</h5>
                            <p class="text-justify">Menjaga stabilitas ekonomi daerah dan mendorong pertumbuhan usaha</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dampak Positif -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3><i class="fas fa-chart-line me-2"></i>Dampak Positif Pajak Daerah</h3>
            </div>
            <div class="sub-materi-body">
                <div class="dampak-content">
                    <div class="dampak-image">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1973&q=80" 
                             alt="Pertumbuhan Ekonomi Sidoarjo" class="img-fluid rounded">
                        <p class="image-caption">Pertumbuhan ekonomi yang stabil melalui kontribusi pajak daerah</p>
                    </div>
                    
                    <div class="dampak-text">
                        <h5>Manfaat bagi Masyarakat Sidoarjo</h5>
                        <ul class="benefits-list">
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Infrastruktur yang lebih baik dan terpelihara</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Pelayanan kesehatan yang lebih berkualitas</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Fasilitas pendidikan yang memadai</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Stabilitas harga dan ekonomi daerah</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Lapangan kerja yang semakin luas</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Pelayanan publik yang lebih efisien</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles khusus untuk halaman Tujuan Pajak */
.tujuan-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: start;
    margin-bottom: 2rem;
}

.tujuan-text {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.tujuan-text p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #34495e;
    margin: 0;
}

.tujuan-image {
    text-align: center;
}

.tujuan-image img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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
    margin-top: 2rem;
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
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
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

.highlight-text p {
    color: #34495e;
    line-height: 1.5;
    margin: 0;
    font-size: 0.9rem;
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
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.dampak-text h5 {
    color: #2c3e50;
    margin-bottom: 1.5rem;
    font-weight: 600;
    font-size: 1.3rem;
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

.benefits-list li i {
    margin-top: 0.2rem;
    flex-shrink: 0;
}

.benefits-list li span {
    color: #34495e;
    line-height: 1.5;
}

/* Responsive Design */
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

@media (max-width: 480px) {
    .tujuan-content,
    .dampak-content {
        gap: 1rem;
    }
    
    .highlight-item {
        padding: 1rem;
    }
    
    .tujuan-image img,
    .dampak-image img {
        height: 180px;
    }
}
</style>
@endsection