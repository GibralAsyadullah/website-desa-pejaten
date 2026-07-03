<section id="data-desa" class="alt-bg">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Transparansi</span>
      <h2>Data Desa</h2>
      <p>Ringkasan data resmi {{ $profile?->nama_desa }} untuk keperluan administrasi, penelitian, dan transparansi publik.</p>
    </div>
    <div class="datadesa-grid">
      @forelse($dataDesa as $data)
      <div class="dd-card reveal"><div class="dd-icon">{{ $data->icon }}</div><h4>{{ $data->judul }}</h4><p>{{ $data->deskripsi }}</p><a class="dd-link" href="{{ $data->link }}">Lihat detail →</a></div>
      @empty
      @endforelse
    </div>
  </div>
</section>