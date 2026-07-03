<section id="berita">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Kabar Terbaru</span>
      <h2>Berita &amp; Pengumuman</h2>
      <p>Informasi terkini seputai {{ $profile?->nama_desa }}, kegiatan KKN, pengumuman resmi, dan agenda desa.</p>
    </div>
    <div class="berita-grid" id="beritaGrid">
      @forelse($berita as $post)
      <div class="berita-card reveal">
        <div class="berita-thumb">{{ $post->category }}</div>
        <div class="berita-body">
          <span class="berita-cat">{{ ucfirst($post->category) }}</span>
          <span class="berita-date">{{ $post->tanggal_publish->format('d M Y') }}</span>
          <h4>{{ $post->judul }}</h4>
          <p>{{ $post->ringkasan }}</p>
        </div>
      </div>
      @empty
      @endforelse
    </div>
  </div>
</section>