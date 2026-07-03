<div class="profil-block" id="sejarah-desa">
  <div class="pb-head">
    <span class="label">01 — Profil Desa</span>
    <h2>Sejarah {{ $profile?->nama_desa }}</h2>
    <p>Perjalanan panjang {{ $profile?->nama_desa }} dari masa awal berdirinya hingga menjadi desa yang kita kenal saat ini.</p>
  </div>

  <div class="artikel-shell">
    <article class="artikel-body">
      @forelse($sejarah as $index => $item)
      <h3><span class="artikel-num">{{ $index + 1 }}.</span>{{ $item->judul }}</h3>
      <p>{{ $item->konten }}</p>
      @empty
      <p class="placeholder-note">Belum ada data sejarah. Silahkan isi melalui admin panel.</p>
      @endforelse
    </article>

    <aside class="artikel-toc reveal">
      <span class="label">Daftar Isi</span>
      <ol>
        @forelse($sejarah as $index => $item)
        <li><a href="#sejarah-desa">{{ $item->judul }}</a></li>
        @empty
        @endforelse
      </ol>
    </aside>
  </div>
</div>