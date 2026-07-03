<div class="profil-block" id="visi-misi">
  <div class="pb-head">
    <span class="label">02 — Profil Desa</span>
    <h2>Visi dan Misi</h2>
    <p>Arah pembangunan {{ $profile?->nama_desa }} yang menjadi acuan seluruh program kerja pemerintah desa.</p>
  </div>
  <div class="visimisi-grid">
    <div class="vm-card reveal">
      <div class="vm-icon">V</div>
      <h4>Visi {{ $profile?->nama_desa }}</h4>
      <p>"{{ $visi?->konten ?? '[Placeholder visi desa]' }}"</p>
    </div>
    <div class="vm-card reveal">
      <div class="vm-icon">M</div>
      <h4>Misi {{ $profile?->nama_desa }}</h4>
      <ul class="misi-list">
        @forelse($misi as $index => $m)
        <li><span class="misi-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>{{ $m->konten }}</li>
        @empty
        <li><span class="misi-num">--</span>[Belum ada data misi]</li>
        @endforelse
      </ul>
    </div>
  </div>
</div>