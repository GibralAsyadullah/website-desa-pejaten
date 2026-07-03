<header>
  <nav class="wrap">
    <div class="brand">
      <div class="mark">{{ substr($profile?->nama_desa, 0, 2) }}</div>
      <div>
        {{ $profile?->nama_desa }}
        <span class="sub">Portal Resmi Pemerintah Desa</span>
      </div>
    </div>
    <div class="nav-links" id="navLinks">
      <a href="#beranda">Beranda</a>
      <a href="#profil-desa">Profil Desa</a>
      <a href="#pemerintahan">Pemerintahan</a>
      <a href="#layanan">Layanan</a>
      <a href="#edukasi-lingkungan">Edukasi Lingkungan</a>
      <a href="#kkn">KKN UBP 2026</a>
      <a href="#berita">Berita</a>
      <a href="#galeri">Galeri</a>
      <a href="#kontak" class="nav-cta">Kontak</a>
    </div>
    <button class="nav-toggle" id="navToggle" aria-label="Menu"><span></span><span></span><span></span></button>
  </nav>
</header>