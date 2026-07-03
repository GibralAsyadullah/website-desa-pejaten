<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $profile?->nama_desa ?? 'Desa' }} — Portal Resmi Pemerintah {{ $profile?->nama_desa ?? 'Desa' }}, Kecamatan {{ $profile?->kecamatan }}, Kabupaten {{ $profile?->kabupaten }}</title>
<meta name="description" content="Portal resmi Pemerintah {{ $profile?->nama_desa }}, Kecamatan {{ $profile?->kecamatan }}, Kabupaten {{ $profile?->kabupaten }}, Provinsi {{ $profile?->provinsi }}. Informasi profil desa, pemerintahan, layanan publik, edukasi lingkungan, dan kegiatan KKN UBP Karawang 2026.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700;9..144,900&family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/profil-desa.css') }}">
</head>
<body>

@include('profil-desa.partials.topbar')
@include('profil-desa.partials.header')
@include('profil-desa.partials.hero-carousel')
@include('profil-desa.partials.layanan')
@include('profil-desa.partials.kilas-data')
@include('profil-desa.partials.profil-shell')
@include('profil-desa.partials.pemerintahan')
@include('profil-desa.partials.data-desa')
@include('profil-desa.partials.edukasi-lingkungan')
@include('profil-desa.partials.kkn')
@include('profil-desa.partials.berita')
@include('profil-desa.partials.galeri')
@include('profil-desa.partials.footer')

<div class="fab-wrap">
  <button class="fab fab-top" id="fabTop" title="Kembali ke atas">↑</button>
  <a class="fab fab-wa" href="https://wa.me/{{ str_replace(['(', ')', ' ', '-'], '', $profile?->telepon ?? '6281234567890') }}" target="_blank" title="Chat WhatsApp">💬 Chat</a>
</div>

<script src="{{ asset('js/profil-desa.js') }}"></script>
</body>
</html>