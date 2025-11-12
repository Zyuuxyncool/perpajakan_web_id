@extends('user.layouts.app')

@section('title', 'Undang-Undang Pajak Daerah')

@section('content')
<div class="regulation-container">
    <div class="regulation-content">
        <div class="regulation-header">
            <h1>Undang-Undang Perpajakan</h1>
            <div class="divider"></div>
            <p class="lead text-white">Landasan hukum sistem perpajakan di Indonesia</p>
        </div>

        <!-- Materi Pengantar -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Pengantar Undang-Undang Pajak Daerah</h3>
            </div>
            <div class="sub-materi-body">
                <p class="text-justify">
                    Undang-undang perpajakan daerah merupakan landasan hukum yang mengatur tentang pemungutan, 
                    pengelolaan, dan pertanggungjawaban pajak daerah di Indonesia. Peraturan ini menjadi pedoman 
                    bagi pemerintah daerah dalam melaksanakan kewenangan di bidang perpajakan untuk mendukung 
                    pembangunan daerah dan kesejahteraan masyarakat.
                </p>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🏛</div>
                        <h4>Landasan Hukum</h4>
                        <p class="text-justify">
                            Memberikan dasar legalitas bagi pemerintah daerah dalam memungut pajak
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">⚖</div>
                        <h4>Kepastian Hukum</h4>
                        <p class="text-justify">
                            Menjamin kepastian hukum bagi wajib pajak dan pemerintah daerah
                        </p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💰</div>
                        <h4>Sumber Pendapatan</h4>
                        <p class="text-justify">
                            Mengatur mekanisme pengelolaan sumber pendapatan asli daerah
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Undang-Undang -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Daftar Undang-Undang Perpajakan</h3>
            </div>
            <div class="sub-materi-body">
                <div class="regulation-table-container">
                    <table class="regulation-table">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Undang-Undang</th>
                                <th width="25%">Tentang</th>
                                <th width="30%">Deskripsi</th>
                                <th width="20%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>UU Nomor 6 Tahun 1983</td>
                                <td>Ketentuan Umum dan Tata Cara Perpajakan</td>
                                <td>Undang-undang yang mengatur tentang ketentuan umum dan tata cara perpajakan yang berlaku di Indonesia, telah mengalami beberapa kali perubahan dan penyempurnaan.</td>
                                <td>stdtd UU Nomor 6 Tahun 2023</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>UU Nomor 7 Tahun 1983</td>
                                <td>Pajak Penghasilan</td>
                                <td>Mengatur tentang pengenaan pajak atas penghasilan yang diterima atau diperoleh wajib pajak dalam tahun pajak.</td>
                                <td>stdtd UU Nomor 6 Tahun 2023</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>UU Nomor 8 Tahun 1983</td>
                                <td>Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan Atas Barang Mewah</td>
                                <td>Mengatur tentang pengenaan pajak pertambahan nilai atas barang dan jasa serta pajak penjualan atas barang mewah.</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>UU Nomor 12 Tahun 1994</td>
                                <td>Pajak Bumi dan Bangunan (PBB)</td>
                                <td>Mengatur tentang pengenaan pajak atas bumi dan bangunan yang dimiliki, dikuasai, dan/atau dimanfaatkan oleh orang pribadi atau badan.</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>UU Nomor 28 Tahun 2009</td>
                                <td>Pajak Daerah dan Retribusi Daerah</td>
                                <td>Undang-undang yang menjadi dasar hukum utama dalam pengaturan pajak daerah dan retribusi daerah di Indonesia.</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>UU Nomor 1 Tahun 2022</td>
                                <td>Hubungan Keuangan antara Pemerintah Pusat dan Pemerintah Daerah (UU HKPD)</td>
                                <td>Mengatur tentang hubungan keuangan antara pemerintah pusat dan pemerintah daerah termasuk pengelolaan dana perimbangan.</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Informasi Penting -->
        <div class="sub-materi-card">
            <div class="sub-materi-header">
                <h3>Informasi Penting</h3>
            </div>
            <div class="sub-materi-body">
                <div class="regulation-info">
                    <div class="info-content">
                        <div class="info-item">
                            <h4><i class="fas fa-info-circle me-2"></i>Keterangan</h4>
                            <p>stdtd = telah diubah beberapa kali dengan undang-undang perubahan</p>
                        </div>
                        <div class="info-item">
                            <h4><i class="fas fa-source me-2"></i>Sumber</h4>
                            <p>Kementerian Keuangan Republik Indonesia</p>
                        </div>
                        <div class="info-item">
                            <h4><i class="fas fa-calendar-alt me-2"></i>Update Terakhir</h4>
                            <p>Peraturan perundang-undangan terbaru yang berlaku</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Styles untuk halaman Undang-Undang */
.regulation-container {
    background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1911&q=80');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    min-height: 100vh;
    padding: 0;
    margin: 0;
    width: 100%;
    position: relative;
}

.regulation-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.regulation-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    position: relative;
    z-index: 2;
}

.regulation-header {
    text-align: center;
    margin-bottom: 3rem;
    color: white;
}

.regulation-header h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.regulation-header .divider {
    width: 100px;
    height: 4px;
    background: #3498db;
    margin: 0 auto;
    border-radius: 2px;
}

.regulation-header p {
    margin-top: 1rem;
    font-size: 1.2rem;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
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

/* Tabel Styles */
.regulation-table-container {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    margin-bottom: 0;
    border: 1px solid rgba(255, 255, 255, 0.3);
    overflow-x: auto;
}

.regulation-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 1rem;
}

.regulation-table th {
    background-color: #2c3e50;
    color: white;
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    border-bottom: 2px solid #3498db;
}

.regulation-table td {
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
    vertical-align: top;
}

.regulation-table tbody tr {
    transition: background-color 0.3s;
}

.regulation-table tbody tr:hover {
    background-color: rgba(52, 152, 219, 0.1);
}

.regulation-table tbody tr:last-child td {
    border-bottom: none;
}

/* UU Detail Styles */
.uu-detail h4 {
    color: #2c3e50;
    margin: 1.5rem 0 1rem 0;
    font-weight: 600;
    border-left: 4px solid #007bff;
    padding-left: 1rem;
}

.uu-detail h4:first-child {
    margin-top: 0;
}

.scope-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 1rem;
}

.scope-item {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #28a745;
}

.scope-item h5 {
    color: #2c3e50;
    margin-bottom: 1rem;
    font-weight: 600;
}

.scope-item ul {
    margin: 0;
    padding-left: 1.5rem;
}

.scope-item li {
    margin-bottom: 0.5rem;
    color: #555;
}

.components-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}

.component-item {
    background: #e3f2fd;
    padding: 1.5rem;
    border-radius: 8px;
    border-top: 4px solid #2196f3;
}

.component-item h5 {
    color: #1976d2;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

/* Info Box Styles */
.regulation-info {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.info-content {
    display: grid;
    gap: 1.5rem;
}

.info-item h4 {
    color: #2c3e50;
    margin-bottom: 0.5rem;
    font-weight: 600;
    font-size: 1.1rem;
}

.info-item p {
    margin: 0;
    color: #34495e;
    line-height: 1.6;
}

/* Responsive */
@media (max-width: 768px) {
    .regulation-content {
        padding: 1rem;
    }
    
    .regulation-header h1 {
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
    
    .regulation-table-container,
    .regulation-info {
        padding: 1.5rem;
    }
    
    .regulation-table {
        font-size: 0.9rem;
    }
    
    .regulation-table th,
    .regulation-table td {
        padding: 0.8rem 0.5rem;
    }
    
    .regulation-container {
        background-attachment: scroll;
    }
    
    .features-grid,
    .scope-grid,
    .components-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 480px) {
    .regulation-content {
        padding: 0.5rem;
    }
    
    .sub-materi-body {
        padding: 1rem;
    }
    
    .feature-card,
    .scope-item,
    .component-item {
        padding: 1rem;
    }
    
    .regulation-table-container,
    .regulation-info {
        padding: 1rem;
    }
}
</style>
@endsection