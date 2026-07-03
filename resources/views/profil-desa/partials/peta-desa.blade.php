<div class="profil-block" id="peta-desa">
  <div class="pb-head">
    <span class="label">10 — Profil Desa</span>
    <h2>Peta Desa</h2>
    <p>Peta wilayah administratif {{ $profile?->nama_desa }}, Kecamatan {{ $profile?->kecamatan }}, Kabupaten {{ $profile?->kabupaten }}.</p>
  </div>
  <div class="geo-map-holder reveal">
    <iframe loading="lazy" src="{{ $profile?->embed_maps }}" title="Peta Administrasi {{ $profile?->nama_desa }}"></iframe>
  </div>
</div>