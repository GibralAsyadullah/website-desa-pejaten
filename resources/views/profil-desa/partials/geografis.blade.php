<div class="profil-block" id="kondisi-geografis">
  <div class="pb-head">
    <span class="label">03 — Profil Desa</span>
    <h2>Kondisi Geografis</h2>
    <p>Letak, luas, dan batas administratif wilayah {{ $profile?->nama_desa }}.</p>
  </div>
  <div class="geo-grid">
    <div class="reveal">
      <div class="geo-map-holder">
        <iframe loading="lazy" src="{{ $profile?->embed_maps }}" title="Peta {{ $profile?->nama_desa }}"></iframe>
      </div>
      <div class="dusun-chips">
        @forelse($dusun as $d)
        <span class="dusun-chip">{{ $d->nama }}</span>
        @empty
        @endforelse
      </div>
    </div>
    <div class="reveal">
      <div class="geo-facts">
        <div class="geo-fact"><div class="gf-label">Luas Wilayah</div><div class="gf-value">{{ $profile?->luas_wilayah }}</div></div>
        <div class="geo-fact"><div class="gf-label">Ketinggian</div><div class="gf-value">{{ $profile?->ketinggian }}</div></div>
        <div class="geo-fact"><div class="gf-label">Jumlah RW</div><div class="gf-value">{{ $profile?->jumlah_rw }}</div></div>
        <div class="geo-fact"><div class="gf-label">Jumlah RT</div><div class="gf-value">{{ $profile?->jumlah_rt }}</div></div>
      </div>
      <table class="batas-table">
        @forelse($batas as $b)
        <tr><td>{{ $b->arah }}</td><td>{{ $b->keterangan }}</td></tr>
        @empty
        @endforelse
      </table>
    </div>
  </div>
</div>