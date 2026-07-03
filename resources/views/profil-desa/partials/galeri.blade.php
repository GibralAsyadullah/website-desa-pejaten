<section id="galeri" class="alt-bg">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Dokumentasi</span>
      <h2>Galeri {{ $profile?->nama_desa }}</h2>
      <p>Kumpulan foto kegiatan warga, pemerintahan desa, dan program KKN UBP Karawang 2026.</p>
    </div>
    <div class="masonry">
      @forelse($galeriUmum as $g)
      <div class="masonry-item reveal"><div class="mi-fill">{{ $g->judul }}</div><div class="mi-cap">{{ $g->judul }}</div></div>
      @empty
      @endforelse
    </div>
  </div>
</section>