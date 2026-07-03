<section style="padding-top:0;">
  <div class="wrap">
    <div class="kilas reveal">
      <div class="kilas-intro">
        <span class="label">Kilas Data {{ $profile?->nama_desa }}</span>
        <p>{{ $profile?->nama_desa }} berada di wilayah pesisir utara Kabupaten {{ $profile?->kabupaten }}, Kecamatan {{ $profile?->kecamatan }}, Provinsi {{ $profile?->provinsi }}, kode pos {{ $profile?->kode_pos }}.</p>
      </div>
      <div class="kilas-item"><div class="kilas-num">{{ $profile?->luas_wilayah }}</div><div class="kilas-cap">Luas Wilayah</div></div>
      <div class="kilas-item"><div class="kilas-num">{{ $dusun->count() }}</div><div class="kilas-cap">Dusun</div></div>
      <div class="kilas-item"><div class="kilas-num">{{ number_format($demografi?->total_penduduk ?? 0) }}</div><div class="kilas-cap">Jiwa Penduduk</div></div>
      <div class="kilas-item"><div class="kilas-num">{{ $profile?->kode_pos }}</div><div class="kilas-cap">Kode Pos</div></div>
    </div>
  </div>
</section>