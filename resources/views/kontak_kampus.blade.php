@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Kolom Kiri: Informasi Kontak Terperinci -->
    <div class="col-md-6 mb-4">
        <div class="p-4 bg-white rounded shadow-sm border h-100">
            <h2 class="fw-bold text-primary mb-4">Hubungi Kami</h2>
            <p class="text-muted">
                Jika ada pertanyaan mengenai alur pendaftaran mahasiswa baru, biaya kuliah, atau informasi akademik lainnya, jangan ragu untuk menghubungi layanan informasi kami di bawah ini.
            </p>
            
            <hr class="my-4 text-muted">
            
            <!-- Detail Alamat & Kontak -->
            <div class="mb-4">
                <h5 class="fw-bold text-secondary mb-2">📍 Alamat Kampus</h5>
                <p class="text-muted mb-0">
                    Jl. Raya Kampus Hijau No. 45, Kecamatan Kebumen,<br>
                    Kabupaten Kebumen, Jawa Tengah 54311
                </p>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold text-secondary mb-2">📧 Surat Elektronik (Email)</h5>
                <p class="text-muted mb-0">info@universitasunggul.ac.id</p>
            </div>

            <div class="mb-3">
                <h5 class="fw-bold text-secondary mb-2">📞 Telepon & Jam Operasional</h5>
                <p class="text-muted mb-1">Telepon: (0287) 123456</p>
                <small class="text-muted d-block">Senin - Jumat: 08.00 - 16.00 WIB</small>
                <small class="text-muted d-block">Sabtu: 08.00 - 12.00 WIB</small>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Formulir Kirim Pesan -->
    <div class="col-md-6 mb-4">
        <div class="p-4 bg-white rounded shadow-sm border h-100">
            <h4 class="fw-bold text-secondary mb-3">Kirim Pesan Langsung</h4>
            <p class="text-muted small">Silakan lengkapi formulir di bawah ini untuk mengirimkan umpan balik atau pertanyaan spesifik.</p>
            
            <!-- Menggunakan simulasi javascript alert untuk demonstrasi tugas tanpa reload -->
            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan Anda berhasil disimulasikan terkirim ke sistem kampus!');">
                @csrf
                <div class="mb-3">
                    <label class="form-label small fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" required placeholder="Masukkan nama lengkap Anda">
                </div>
                
                <div class="mb-3">
                    <label class="form-label small fw-bold">Alamat Email</label>
                    <input type="email" class="form-control" required placeholder="nama@email.com">
                </div>

                <div class="mb-3">
                    <label class="form-label small fw-bold">Subjek Pertanyaan</label>
                    <select class="form-select text-muted" required>
                        <option value="" selected disabled>Pilih kategori pertanyaan...</option>
                        <option value="pendaftaran">Pendaftaran Mahasiswa Baru</option>
                        <option value="akademik">Layanan Informasi Akademik</option>
                        <option value="fasilitas">Pengaduan & Fasilitas</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-label small fw-bold">Isi Pesan</label>
                    <textarea class="form-control" rows="4" required placeholder="Tuliskan detail pertanyaan Anda di sini..."></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 fw-bold">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection