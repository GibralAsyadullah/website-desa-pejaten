<section class="hero-carousel" id="beranda">
  <div class="hc-track" id="hcTrack">

    <!-- Slide 1 -- Sambutan & Pimpinan -->
    <div class="hc-slide hc-bg-a">
      <div class="hc-blob hc-blob-1"></div>
      <div class="hc-blob hc-blob-2"></div>
      <div class="hc-inner">
        <div>
          <span class="hc-badge">🌾 Selamat datang di Portal Resmi Desa</span>
          <h1>{{ $profile?->nama_desa }}<br><span class="accent">{{ $profile?->kecamatan }}, {{ $profile?->kabupaten }}</span></h1>
          <p>{{ $profile?->sambutan_kepala_desa ?? 'Placeholder sambutan resmi Kepala Desa' }}</p>
          <div class="hc-btnrow">
            <a href="#layanan" class="hc-btn-solid">📋 Jelajahi Layanan Desa</a>
            <a href="#pemerintahan" class="hc-btn-outline">Kenali Pemerintahan Desa</a>
          </div>
        </div>
        <div class="hc-avatar-group">
          <div class="hc-avatar-item lead">
            <div class="hc-avatar big">KD</div>
            <div class="hc-ribbon">Kepala Desa<span>Periode 20XX–20XX</span></div>
          </div>
          <div class="hc-avatar-item">
            <div class="hc-avatar small">SD</div>
            <div class="hc-ribbon">Sekretaris Desa<span>Perangkat Desa</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -- Edukasi Lingkungan -->
    <div class="hc-slide hc-bg-b">
      <div class="hc-blob hc-blob-1"></div>
      <div class="hc-blob hc-blob-2"></div>
      <div class="hc-inner">
        <div>
          <span class="hc-badge">♻️ Program Unggulan Desa</span>
          <h1>{{ $profile?->nama_desa }} <span class="accent">Peduli</span><br>Lingkungan &amp; Sampah</h1>
          <p>Melalui edukasi lingkungan, bank sampah, dan pengelolaan 3R bersama mahasiswa KKN, sampah rumah tangga diubah menjadi kompos, eco enzyme, dan produk bernilai ekonomi bagi warga.</p>
          <div class="hc-btnrow">
            <a href="#edukasi-lingkungan" class="hc-btn-solid">🔄 Lihat Edukasi Lingkungan</a>
            <a href="#layanan" class="hc-btn-outline">Bank Sampah Digital</a>
          </div>
        </div>
        <div class="hc-dial">
          <div class="hc-dial-circle">
            <div class="hc-dial-inner">
              <div class="hc-dial-num">[XXX] kg</div>
              <div class="hc-dial-cap">Estimasi sampah terkelola setiap bulan — data akan diperbarui</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -- KKN UBP Karawang 2026 -->
    <div class="hc-slide hc-bg-c">
      <div class="hc-blob hc-blob-1"></div>
      <div class="hc-blob hc-blob-2"></div>
      <div class="hc-inner">
        <div>
          <span class="hc-badge">🎓 Kolaborasi Perguruan Tinggi</span>
          <h1>KKN Universitas Buana<br>Perjuangan Karawang <span class="accent">2026</span></h1>
          <p>Mahasiswa Universitas Buana Perjuangan Karawang mendampingi warga {{ $profile?->nama_desa }} — mulai dari edukasi lingkungan, digitalisasi bank sampah, hingga pemberdayaan UMKM, sebagai bagian dari program kerja desa yang berkelanjutan.</p>
          <div class="hc-btnrow">
            <a href="#kkn" class="hc-btn-solid">🧑‍🎓 Lihat Kegiatan KKN</a>
            <a href="#berita" class="hc-btn-outline">Berita Terbaru</a>
          </div>
        </div>
        <div class="hc-avatar-group">
          <div class="hc-avatar-item lead">
            <div class="hc-avatar big">12</div>
            <div class="hc-ribbon">PROGRAM STUDI<span>Berkolaborasi Aktif</span></div>
          </div>
          <div class="hc-avatar-item">
            <div class="hc-avatar small">UBP</div>
            <div class="hc-ribbon">KKN 2026<span>Periode Berjalan</span></div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <button class="hc-arrow hc-prev" id="hcPrev" aria-label="Sebelumnya">‹</button>
  <button class="hc-arrow hc-next" id="hcNext" aria-label="Berikutnya">›</button>
  <div class="hc-dots" id="hcDots"></div>

  <svg class="hc-wave" viewBox="0 0 1440 64" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 32 C 240 64 480 0 720 20 C 960 40 1200 64 1440 24 L1440 64 L0 64 Z" fill="#F1F3EA"/>
  </svg>
</section>