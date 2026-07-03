<section id="berita">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Kabar Terbaru</span>
      <h2>Berita &amp; Pengumuman</h2>
      <p>Informasi terkini seputar {{ $profile?->nama_desa }}, kegiatan KKN, pengumuman resmi, dan agenda desa.</p>
    </div>
    <div class="berita-grid" id="beritaGrid">
      @forelse($berita as $post)
      <div class="berita-card reveal" data-cat="{{ $post->category }}">
        <div class="berita-thumb">{{ Str::limit($post->judul, 30) }}</div>
        <div class="berita-body">
          <span class="berita-cat">{{ ucfirst(str_replace('_', ' ', $post->category)) }}</span>
          <span class="berita-date">{{ $post->tanggal_publish->format('d M Y') }}</span>
          <h4>{{ $post->judul }}</h4>
          <p>{{ Str::limit($post->ringkasan, 100) }}</p>
        </div>
      </div>
      @empty
      @endforelse
    </div>
  </div>
</section>