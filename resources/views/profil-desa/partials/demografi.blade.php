<div class="profil-block" id="demografi">
  <div class="pb-head">
    <span class="label">04 — Profil Desa</span>
    <h2>Demografi</h2>
    <p>Data kependudukan {{ $profile?->nama_desa }}. Data diperbarui sesuai monografi resmi.</p>
  </div>
  <div class="demo-grid">
    <div class="demo-stat reveal"><div class="ds-num counter" data-target="{{ $demografi?->total_penduduk ?? 0 }}">0</div><div class="ds-cap">Jumlah Penduduk</div></div>
    <div class="demo-stat reveal"><div class="ds-num counter" data-target="{{ $demografi?->laki_laki ?? 0 }}">0</div><div class="ds-cap">Laki-laki</div></div>
    <div class="demo-stat reveal"><div class="ds-num counter" data-target="{{ $demografi?->perempuan ?? 0 }}">0</div><div class="ds-cap">Perempuan</div></div>
    <div class="demo-stat reveal"><div class="ds-num counter" data-target="{{ $demografi?->kepala_keluarga ?? 0 }}">0</div><div class="ds-cap">Kepala Keluarga</div></div>
  </div>
  <div class="demo-breakdown">
    @php
      $breakdown_grouped = $demografiBreakdown->groupBy('kategori');
    @endphp
    @forelse($breakdown_grouped as $category => $items)
    <div class="db-card reveal">
      <h5>Berdasarkan {{ ucfirst($category) }}</h5>
      @foreach($items as $item)
      <div class="db-row">
        <span>{{ $item->label }}</span>
        <div class="db-bar"><span style="width:{{ $item->persentase }}%"></span></div>
        <span>{{ $item->persentase }}%</span>
      </div>
      @endforeach
    </div>
    @empty
    @endforelse
  </div>
  <p style="font-size:0.78rem; color:var(--ink-soft); margin-top:16px; font-style:italic;">*Data berdasarkan monografi desa tahun {{ now()->year }}.</p>
</div>