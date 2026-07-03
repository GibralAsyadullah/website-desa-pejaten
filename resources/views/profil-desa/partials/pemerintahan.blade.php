<section id="pemerintahan">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Kepala Pemerintahan</span>
      <h2>Pemerintahan {{ $profile?->nama_desa }}</h2>
      <p>Penyelenggaraan pemerintahan desa dijalankan oleh Kepala Desa dan perangkat, didampingi lembaga kemasyarakatan desa.</p>
    </div>

    <div class="section-head reveal" style="margin-top: 48px;">
      <span class="label">Struktur Inti</span>
      <h2 style="font-size:1.5rem;">Kepala Desa &amp; Sekretaris Desa</h2>
    </div>
    <div class="gov-grid" style="margin-bottom:56px;">
      @forelse($perangkat->take(4) as $p)
      <div class="gov-card reveal"><div class="gov-photo">{{ substr($p->jabatan, 0, 2) }}</div><div class="gov-body"><div class="g-name">{{ $p->nama }}</div><div class="g-role">{{ $p->jabatan }}</div></div></div>
      @empty
      @endforelse
    </div>

    <div class="section-head reveal">
      <span class="label">Lembaga Desa</span>
      <h2 style="font-size:1.5rem;">Lembaga Kemasyarakatan Desa</h2>
      <p>Mitra pemerintah desa dalam menjalankan program pembangunan dan pemberdayaan masyarakat.</p>
    </div>
    <div class="lembaga-grid">
      @forelse($lembaga as $l)
      <div class="lembaga-card reveal"><div class="lg-icon">{{ $l->icon }}</div><h5>{{ $l->nama }}</h5><p>{{ $l->deskripsi }}</p></div>
      @empty
      @endforelse
    </div>
  </div>
</section>