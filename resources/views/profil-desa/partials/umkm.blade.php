<div class="profil-block" id="umkm">
  <div class="pb-head">
    <span class="label">06 — Profil Desa</span>
    <h2>UMKM {{ $profile?->nama_desa }}</h2>
    <p>Galeri usaha mikro kecil menengah milik warga {{ $profile?->nama_desa }}.</p>
  </div>
  <div class="umkm-grid">
    @forelse($umkm as $u)
    <div class="umkm-card reveal">
      <div class="umkm-photo">Foto Produk UMKM</div>
      <div class="umkm-body"><span class="umkm-tag">{{ $u->kategori }}</span><h4>{{ $u->nama }}</h4><p>{{ $u->deskripsi }}</p></div>
    </div>
    @empty
    @endforelse
  </div>
</div>