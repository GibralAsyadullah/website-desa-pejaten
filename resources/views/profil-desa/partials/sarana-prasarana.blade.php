<div class="profil-block" id="sarana-prasarana">
  <div class="pb-head">
    <span class="label">07 — Profil Desa</span>
    <h2>Sarana dan Prasarana</h2>
    <p>Fasilitas umum yang tersedia untuk mendukung aktivitas warga {{ $profile?->nama_desa }}.</p>
  </div>
  <div class="sarana-grid">
    @forelse($sarana as $s)
    <div class="sarana-card reveal"><div class="sarana-icon">{{ $s->icon }}</div><div><h5>{{ $s->nama }}</h5><p>{{ $s->keterangan }}</p></div></div>
    @empty
    @endforelse
  </div>
</div>