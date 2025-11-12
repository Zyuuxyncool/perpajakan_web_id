@extends('user.layouts.app')

@section('title', 'Manfaat Pajak Daerah')

@section('content')
<div class="materi-container">
    <div class="materi-content">
        <div class="materi-header">
            <h2>Manfaat Pajak Daerah</h2>
            <div class="divider"></div>
            <p class="lead">Berbagai manfaat yang diperoleh dari kontribusi pajak daerah bagi pembangunan dan kesejahteraan masyarakat</p>
        </div>

        <!-- Pengantar Manfaat Pajak -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3><i class="fas fa-lightbulb me-2"></i>Pengantar Manfaat Pajak Daerah</h3>
            </div>
            <div class="sub-materi-body">
                <p class="text-justify">
                    Pajak daerah merupakan sumber pendapatan utama yang digunakan pemerintah daerah untuk membiayai 
                    berbagai program pembangunan dan pelayanan publik. Kontribusi masyarakat melalui pembayaran pajak 
                    secara rutin memberikan manfaat yang sangat besar bagi kemajuan daerah dan kesejahteraan bersama.
                </p>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🏗️</div>
                        <h4>Pembangunan Infrastruktur</h4>
                        <p class="text-justify">
                            Dana pajak digunakan untuk membangun dan memelihara berbagai fasilitas publik
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🏥</div>
                        <h4>Pelayanan Kesehatan</h4>
                        <p class="text-justify">
                            Membiayai layanan kesehatan masyarakat melalui puskesmas dan rumah sakit
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🎓</div>
                        <h4>Pendidikan Berkualitas</h4>
                        <p class="text-justify">
                            Menyediakan akses pendidikan yang lebih baik melalui sekolah dan fasilitas pendidikan
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manfaat Utama Pajak Daerah -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3><i class="fas fa-star me-2"></i>Manfaat Utama Pajak Daerah</h3>
            </div>
            <div class="sub-materi-body">
                <div class="manfaat-grid">
                    <div class="manfaat-item">
                        <div class="manfaat-icon">🛣️</div>
                        <div class="manfaat-content">
                            <h4>Pembangunan Infrastruktur</h4>
                            <p class="text-justify">
                                Untuk pembangunan berbagai infrastruktur yang meliputi jalanan, rumah sakit, 
                                sekolah, dan lain sebagainya. Pembangunan sarana umum seperti jalan, jembatan, 
                                sekolah, rumah sakit/puskesmas, dan kantor polisi dibiayai dari pajak.
                            </p>
                        </div>
                    </div>

                    <div class="manfaat-item">
                        <div class="manfaat-icon">⛽</div>
                        <div class="manfaat-content">
                            <h4>Subsidi Pangan dan BBM</h4>
                            <p class="text-justify">
                                Bermanfaat sebagai subsidi pangan dan bahan bakar minyak. Subsidi ini membantu 
                                menjaga stabilitas harga kebutuhan pokok masyarakat dan bahan bakar untuk 
                                transportasi dan industri.
                            </p>
                        </div>
                    </div>

                    <div class="manfaat-item">
                        <div class="manfaat-icon">🗳️</div>
                        <div class="manfaat-content">
                            <h4>Penyelenggaraan Demokrasi</h4>
                            <p class="text-justify">
                                Untuk melaksanakan demokrasi seperti pemilu. Dana pajak digunakan untuk 
                                menyelenggarakan pemilihan umum yang demokratis dan berkualitas, termasuk 
                                biaya logistik dan honor petugas pemilu.
                            </p>
                        </div>
                    </div>

                    <div class="manfaat-item">
                        <div class="manfaat-icon">🚌</div>
                        <div class="manfaat-content">
                            <h4>Transportasi Umum</h4>
                            <p class="text-justify">
                                Pajak untuk pelayanan transportasi umum bagi masyarakat. Membiayai operasional 
                                angkutan umum, pembangunan halte, dan subsidi transportasi untuk masyarakat 
                                kurang mampu.
                            </p>
                        </div>
                    </div>

                    <div class="manfaat-item">
                        <div class="manfaat-icon">💼</div>
                        <div class="manfaat-content">
                            <h4>Gaji Pegawai Negeri</h4>
                            <p class="text-justify">
                                Pembayaran gaji pegawai negeri sipil yang memberikan pelayanan publik kepada 
                                masyarakat. Termasuk guru, dokter, perawat, dan tenaga administrasi di 
                                instansi pemerintah.
                            </p>
                        </div>
                    </div>

                    <div class="manfaat-item">
                        <div class="manfaat-icon">🏪</div>
                        <div class="manfaat-content">
                            <h4>Dukungan UMKM</h4>
                            <p class="text-justify">
                                Selain itu, pajak juga digunakan untuk membantu Usaha Mikro, Kecil, dan Menengah 
                                (UMKM) baik dalam hal pembinaan dan modal. Program pelatihan, bantuan modal, 
                                dan pendampingan bisnis dibiayai dari pajak.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dampak Positif Pajak -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3><i class="fas fa-chart-line me-2"></i>Dampak Positif bagi Masyarakat</h3>
            </div>
            <div class="sub-materi-body">
                <div class="dampak-content">
                    <p class="text-justify">
                        <strong>Penggunaan pajak mulai dari pembangunan sarana umum, seperti: jalan, jembatan, sekolah, 
                        rumah sakit/puskesmas, dan kantor polisi dibiayai dari pajak. Pembangunan infrastruktur, 
                        biaya pendidikan, biaya kesehatan, subsidi bahan bakar minyak (BBM), gaji pegawai negeri, 
                        dan pembangunan fasilitas publik semua dibiayai dari pajak.</strong>
                    </p>
                    
                    <div class="highlight-box">
                        <div class="highlight-icon">📈</div>
                        <div class="highlight-text">
                            <h5>Semakin Banyak Pajak, Semakin Banyak Fasilitas</h5>
                            <p class="text-justify">
                                Semakin banyak pajak yang dipungut, maka semakin banyak fasilitas dan infrastruktur 
                                yang dibangun. Hal ini menciptakan siklus positif dimana pembayaran pajak yang 
                                tertib akan menghasilkan pelayanan publik yang lebih baik, yang pada akhirnya 
                                meningkatkan kesejahteraan masyarakat.
                            </p>
                        </div>
                    </div>

                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <h5><i class="fas fa-check-circle text-success me-2"></i>Kesejahteraan Meningkat</h5>
                            <p class="text-justify">Akses terhadap fasilitas publik yang lebih baik meningkatkan kualitas hidup</p>
                        </div>
                        <div class="benefit-card">
                            <h5><i class="fas fa-check-circle text-success me-2"></i>Ekonomi Tumbuh</h5>
                            <p class="text-justify">Infrastruktur yang memadai mendukung pertumbuhan ekonomi daerah</p>
                        </div>
                        <div class="benefit-card">
                            <h5><i class="fas fa-check-circle text-success me-2"></i>Lapangan Kerja</h5>
                            <p class="text-justify">Pembangunan infrastruktur menciptakan lapangan kerja baru</p>
                        </div>
                        <div class="benefit-card">
                            <h5><i class="fas fa-check-circle text-success me-2"></i>Investasi Masuk</h5>
                            <p class="text-justify">Daerah dengan infrastruktur baik menarik lebih banyak investasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles khusus untuk halaman Manfaat Pajak */
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
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.manfaat-icon {
    font-size: 2.5rem;
    flex-shrink: 0;
}

.manfaat-content {
    flex: 1;
}

.manfaat-content h4 {
    color: #2c3e50;
    margin-bottom: 0.8rem;
    font-weight: 600;
    font-size: 1.2rem;
}

.manfaat-content p {
    color: #34495e;
    line-height: 1.6;
    margin: 0;
}

.dampak-content {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
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

.highlight-text p {
    color: #34495e;
    line-height: 1.6;
    margin: 0;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}

.benefit-card {
    padding: 1.5rem;
    background: white;
    border-radius: 10px;
    border: 1px solid #e9ecef;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.benefit-card h5 {
    color: #2c3e50;
    margin-bottom: 0.8rem;
    font-weight: 600;
    font-size: 1rem;
}

.benefit-card p {
    color: #34495e;
    line-height: 1.5;
    margin: 0;
    font-size: 0.9rem;
}

/* Responsive Design */
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

@media (max-width: 480px) {
    .manfaat-item {
        padding: 1rem;
    }
    
    .highlight-box {
        padding: 1rem;
    }
    
    .benefit-card {
        padding: 1rem;
    }
}
</style>
@endsection