<footer id="kontak">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <h3>{{ $profile?->nama_desa }}</h3>
        <p>Kantor {{ $profile?->nama_desa }}, Kecamatan {{ $profile?->kecamatan }}, Kabupaten {{ $profile?->kabupaten }}, Provinsi {{ $profile?->provinsi }}, Kode Pos {{ $profile?->kode_pos }}.</p>
        <div class="foot-social">
          @if($profile?->sosial_media['facebook'])
          <a href="{{ $profile->sosial_media['facebook'] }}" title="Facebook">FB</a>
          @endif
          @if($profile?->sosial_media['instagram'])
          <a href="{{ $profile->sosial_media['instagram'] }}" title="Instagram">IG</a>
          @endif
          @if($profile?->sosial_media['whatsapp'])
          <a href="{{ $profile->sosial_media['whatsapp'] }}" title="WhatsApp">WA</a>
          @endif
        </div>
        <div class="foot-map">
          <iframe loading="lazy" src="{{ $profile?->embed_maps }}" title="Lokasi Kantor {{ $profile?->nama_desa }}"></iframe>
        </div>
      </div>
      <div class="foot-col">
        <span class="label">Navigasi</span>
        <a href="#profil-desa">Profil Desa</a>
        <a href="#pemerintahan">Pemerintahan</a>
        <a href="#layanan">Layanan</a>
        <a href="#edukasi-lingkungan">Edukasi Lingkungan</a>
        <a href="#kkn">KKN UBP 2026</a>
        <a href="#berita">Berita</a>
        <a href="#galeri">Galeri</a>
      </div>
      <div class="foot-col">
        <span class="label">Kontak</span>
        <a href="mailto:{{ $profile?->email }}">{{ $profile?->email }}</a>
        <a href="tel:{{ $profile?->telepon }}">{{ $profile?->telepon }}</a>
        <a href="#">{{ $profile?->alamat_kantor }}</a>
        <span class="label" style="margin-top:16px;">Jam Pelayanan</span>
        <div class="jam-list">
          @forelse($profile?->jam_pelayanan as $jam)
          <div class="jam-row"><span>{{ $jam['hari'] }}</span><span>{{ $jam['jam'] }}</span></div>
          @empty
          @endforelse
        </div>
      </div>
      <div class="foot-col">
        <span class="label">Pemerintah Terkait</span>
        <a href="#">Kabupaten {{ $profile?->kabupaten }}</a>
        <a href="#">Kecamatan {{ $profile?->kecamatan }}</a>
        <a href="#">Universitas Buana Perjuangan Karawang</a>
        <a href="#">Portal Desa Nasional</a>
      </div>
    </div>
    <div class="bottom-bar">
      <span>© {{ now()->year }} Pemerintah {{ $profile?->nama_desa }}, Kecamatan {{ $profile?->kecamatan }}, Kabupaten {{ $profile?->kabupaten }}.</span>
      <span>Website dikembangkan bersama Mahasiswa KKN Universitas Buana Perjuangan Karawang 2026.</span>
    </div>
  </div>
</footer>