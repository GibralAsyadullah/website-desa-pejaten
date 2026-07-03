<section id="data-desa" class="alt-bg">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Transparansi</span>
      <h2>Data Desa</h2>
      <p>Ringkasan data resmi {{ $profile?->nama_desa }} untuk keperluan administrasi, penelitian, dan transparansi publik.</p>
    </div>
    <div class="datadesa-grid">
      @forelse($dataDesa as $d)
      <div class="dd-card reveal"><div class="dd-icon">{{ $d->icon }}</div><h4>{{ $d->judul }}</h4><p>{{ $d->deskripsi }}</p><a class="dd-link" href="{{ $d->link }}">Lihat detail →</a></div>
      @empty
      @endforelse
    </div>
  </div>
</section>