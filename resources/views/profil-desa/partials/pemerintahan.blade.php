<section id="pemerintahan">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Kepala Pemerintahan</span>
      <h2>Pemerintahan {{ $profile?->nama_desa }}</h2>
      <p>Penyelenggaraan pemerintahan desa dijalankan oleh Kepala Desa dan perangkat, didampingi lembaga kemasyarakatan desa.</p>
    </div>

    <div class="pimpinan-grid" style="display:grid; grid-template-columns:0.85fr 1.15fr; gap:50px; align-items:center; margin-bottom:64px;">
      <div class="pimpinan-photo reveal" style="aspect-ratio:4/5; border-radius:22px; background:linear-gradient(160deg, var(--forest-light), var(--forest-dark)); display:flex; align-items:flex-end; padding:26px; color:var(--white); box-shadow:var(--shadow);">
        <div>
          <div class="p-name" style="font-family:'Space Grotesk'; font-weight:700; font-size:0.9rem;">Kepala Desa</div>
          <div class="p-role" style="font-size:0.76rem; opacity:0.8;">Periode 20XX–20XX</div>
        </div>
      </div>
      <div class="pimpinan-text reveal">
        <h3 style="font-size:1.5rem; margin-bottom:16px;">Sambutan Kepala Desa</h3>
        <p style="color:var(--ink-soft); margin-bottom:26px;">"{{ $profile?->sambutan_kepala_desa ?? '[Placeholder sambutan]' }}"</p>
        <div class="perangkat-links" style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
          <div class="pl-card"><h5>Struktur Pemerintahan</h5><p>Susunan lengkap perangkat dan lembaga desa.</p></div>
          <div class="pl-card"><h5>Perangkat Desa</h5><p>Sekretaris, kaur, kasi, dan kepala dusun.</p></div>
          <div class="pl-card"><h5>Visi Misi</h5><p>Arah pembangunan desa periode berjalan.</p></div>
          <div class="pl-card"><h5>Layanan Publik</h5><p>Jenis layanan administrasi bagi warga.</p></div>
        </div>
      </div>
    </div>

    <div class="section-head reveal">
      <span class="label">Struktur Inti</span>
      <h2 style="font-size:1.5rem;">Kepala Desa &amp; Sekretaris Desa</h2>
    </div>
    <div class="gov-grid" style="margin-bottom:56px;">
      @forelse($perangkat->take(4) as $p)
      <div class="gov-card reveal"><div class="gov-photo">{{ substr($p->nama, 0, 2) }}</div><div class="gov-body"><div class="g-name">{{ $p->nama }}</div><div class="g-role">{{ $p->jabatan }}</div></div></div>
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