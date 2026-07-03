<section id="layanan">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Untuk Warga</span>
      <h2>Berbagai Layanan Desa untuk Publik</h2>
      <p>Akses informasi dan layanan {{ $profile?->nama_desa }} dalam satu portal — mulai dari profil, administrasi, hingga program lingkungan dan kegiatan KKN.</p>
    </div>
    <div class="layanan-grid">
      @forelse($layanan as $service)
      <a class="layanan-card reveal" href="{{ $service->link_tujuan }}">
        <div class="layanan-icon">{{ $service->icon }}</div>
        <h4>{{ $service->judul }}</h4>
        <p>{{ $service->deskripsi }}</p>
        <span class="go">Lihat layanan →</span>
      </a>
      @empty
      @endforelse
    </div>
  </div>
</section>