<div class="profil-block" id="potensi-desa">
  <div class="pb-head">
    <span class="label">05 — Profil Desa</span>
    <h2>Potensi Desa</h2>
    <p>Sektor-sektor unggulan yang menjadi tumpuan perekonomian warga {{ $profile?->nama_desa }}.</p>
  </div>
  <div class="potensi-grid">
    @forelse($potensi as $p)
    <div class="potensi-card reveal"><div class="potensi-top">{{ $p->icon }}</div><div class="potensi-body"><h4>{{ $p->judul }}</h4><p>{{ $p->deskripsi }}</p></div></div>
    @empty
    @endforelse
  </div>
</div>