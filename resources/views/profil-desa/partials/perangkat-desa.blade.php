<div class="profil-block" id="perangkat-desa">
  <div class="pb-head">
    <span class="label">09 — Profil Desa</span>
    <h2>Perangkat Desa</h2>
    <p>Jajaran perangkat yang menjalankan roda pemerintahan {{ $profile?->nama_desa }} sehari-hari.</p>
  </div>
  <div class="gov-grid">
    @forelse($perangkat as $p)
    <div class="gov-card reveal"><div class="gov-photo">{{ substr($p->jabatan, 0, 2) }}</div><div class="gov-body"><div class="g-name">{{ $p->nama }}</div><div class="g-role">{{ $p->jabatan }}</div></div></div>
    @empty
    @endforelse
  </div>
</div>