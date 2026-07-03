<div class="topbar">
  <div class="wrap">
    <div class="tb-left">
      <span>{{ $profile?->kecamatan }}, {{ $profile?->kabupaten }}, {{ $profile?->provinsi }}</span>
      <span>Senin–Jumat, 08.00–15.00 WIB</span>
    </div>
    <div class="tb-right">
      <a href="#kontak">Kontak</a>
      @if($profile?->sosial_media['facebook'])
        <a href="{{ $profile->sosial_media['facebook'] }}">Facebook</a>
      @endif
      @if($profile?->sosial_media['instagram'])
        <a href="{{ $profile->sosial_media['instagram'] }}">Instagram</a>
      @endif
    </div>
  </div>
</div>