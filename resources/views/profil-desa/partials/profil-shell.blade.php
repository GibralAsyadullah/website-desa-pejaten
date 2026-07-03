<section id="profil-desa" class="alt-bg">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Portal Informasi</span>
      <h2>Profil {{ $profile?->nama_desa }}</h2>
      <p>Sejarah, visi misi, kondisi wilayah, hingga potensi {{ $profile?->nama_desa }}, Kecamatan {{ $profile?->kecamatan }}, Kabupaten {{ $profile?->kabupaten }}, Provinsi {{ $profile?->provinsi }}.</p>
    </div>

    <div class="profil-shell">
      <!-- SIDEBAR NAVIGATION -->
      <aside class="profil-sidebar" id="profilSidebar">
        <div class="ps-title">Navigasi Profil Desa</div>
        <a class="ps-link" href="#sejarah-desa"><span class="ps-dot"></span>Sejarah Desa</a>
        <a class="ps-link" href="#visi-misi"><span class="ps-dot"></span>Visi dan Misi</a>
        <a class="ps-link" href="#kondisi-geografis"><span class="ps-dot"></span>Kondisi Geografis</a>
        <a class="ps-link" href="#demografi"><span class="ps-dot"></span>Demografi</a>
        <a class="ps-link" href="#potensi-desa"><span class="ps-dot"></span>Potensi Desa</a>
        <a class="ps-link" href="#umkm"><span class="ps-dot"></span>UMKM</a>
        <a class="ps-link" href="#sarana-prasarana"><span class="ps-dot"></span>Sarana dan Prasarana</a>
        <a class="ps-link" href="#struktur-organisasi"><span class="ps-dot"></span>Struktur Organisasi</a>
        <a class="ps-link" href="#perangkat-desa"><span class="ps-dot"></span>Perangkat Desa</a>
        <a class="ps-link" href="#peta-desa"><span class="ps-dot"></span>Peta Desa</a>
      </aside>

      <!-- CONTENT -->
      <div class="profil-content">
        @include('profil-desa.partials.sejarah')
        @include('profil-desa.partials.visi-misi')
        @include('profil-desa.partials.geografis')
        @include('profil-desa.partials.demografi')
        @include('profil-desa.partials.potensi')
        @include('profil-desa.partials.umkm')
        @include('profil-desa.partials.sarana-prasarana')
        @include('profil-desa.partials.struktur-organisasi')
        @include('profil-desa.partials.perangkat-desa')
        @include('profil-desa.partials.peta-desa')
      </div>
    </div>
  </div>
</section>