<section id="kkn" class="alt-bg">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Integrasi Perguruan Tinggi</span>
      <h2>KKN Universitas Buana Perjuangan Karawang 2026</h2>
      <p>Seluruh kegiatan mahasiswa KKN UBP Karawang Tahun 2026 di {{ $profile?->nama_desa }} menjadi bagian dari program kerja pembangunan desa yang berkelanjutan.</p>
    </div>

    @if($kknPeriod)
    <div class="kkn-hero reveal">
      <div>
        <span class="hc-badge">🎓 Tentang KKN</span>
        <h2>Tentang {{ $kknPeriod->nama }}</h2>
        <p>{{ $kknPeriod->deskripsi }}</p>
        <div class="hc-btnrow" style="margin-top:20px;">
          <a href="#program-kelompok" class="hc-btn-solid">Lihat Program Kelompok</a>
          <a href="#program-individu" class="hc-btn-outline">Lihat Program Individu</a>
        </div>
      </div>
      <div class="kkn-hero-stats">
        <div class="khs-item"><div class="khs-num">{{ $kknPeriod->jumlah_mahasiswa }}</div><div class="khs-cap">Mahasiswa KKN</div></div>
        <div class="khs-item"><div class="khs-num">{{ $kknPeriod->jumlah_prodi }}</div><div class="khs-cap">Program Studi</div></div>
        <div class="khs-item"><div class="khs-num">{{ $kknPeriod->jumlah_minggu }}</div><div class="khs-cap">Minggu Pelaksanaan</div></div>
        <div class="khs-item"><div class="khs-num">{{ $kknIndividual?->count() ?? 0 }}</div><div class="khs-cap">Program Kerja</div></div>
      </div>
    </div>

    <div class="kkn-subnav reveal">
      <a href="#tim-kkn">Tim KKN</a>
      <a href="#program-kelompok">Program Kelompok</a>
      <a href="#program-individu">Program Individu</a>
      <a href="#dokumentasi-kkn">Dokumentasi</a>
      <a href="#artikel-kkn">Artikel</a>
      <a href="#luaran-kkn">Luaran</a>
    </div>

    <!-- TIM KKN -->
    <div id="tim-kkn" style="margin-bottom:72px; scroll-margin-top:110px;">
      <div class="section-head reveal">
        <span class="label">Tim Pelaksana</span>
        <h2 style="font-size:1.5rem;">Tim {{ $kknPeriod->nama }}</h2>
        <p>Mahasiswa dari berbagai program studi yang ditempatkan di {{ $profile?->nama_desa }}.</p>
      </div>
      <div class="tim-grid">
        @forelse($kknMembers as $member)
        <div class="tim-card reveal"><div class="tim-photo">{{ substr($member->nama, 0, 2) }}</div><div class="tim-body"><div class="t-name">{{ $member->nama }}</div><div class="t-role">{{ $member->peran }}{{ $member->prodi ? ' - ' . $member->prodi : '' }}</div></div></div>
        @empty
        @endforelse
      </div>
    </div>

    <!-- PROGRAM KELOMPOK -->
    <div id="program-kelompok" style="margin-bottom:72px; scroll-margin-top:110px;">
      <div class="section-head reveal">
        <span class="label">Rangkaian Kegiatan</span>
        <h2 style="font-size:1.5rem;">Program Kelompok</h2>
        <p>Tahapan pelaksanaan program kerja kelompok KKN UBP Karawang 2026 di {{ $profile?->nama_desa }}.</p>
      </div>
      <div class="timeline">
        @forelse($kknTimeline as $timeline)
        <div class="tl-item {{ $timeline->status === 'selesai' ? 'done' : '' }} reveal">
          <div class="tl-dot"></div>
          <span class="tl-week">{{ $timeline->label }}</span>
          <div class="tl-card">
            <h4>{{ $timeline->judul }}</h4>
            <ul>
              @foreach($timeline->items ?? [] as $item)
              <li>{{ $item->keterangan }}</li>
              @endforeach
            </ul>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>

    <!-- PROGRAM INDIVIDU -->
    <div id="program-individu" style="margin-bottom:72px; scroll-margin-top:110px;">
      <div class="section-head reveal">
        <span class="label">Karya Mahasiswa</span>
        <h2 style="font-size:1.5rem;">Program Individu</h2>
        <p>Program kerja individu mahasiswa berdasarkan program studi masing-masing.</p>
      </div>
      <div class="proker-grid" id="prokerGrid">
        @forelse($kknIndividual as $program)
        <div class="proker-card reveal" data-prodi="{{ $program->studyProgram->kode ?? 'all' }}">
          <div class="proker-top">
            <span class="proker-prodi">{{ $program->studyProgram->nama ?? 'N/A' }}</span>
            <span class="proker-status {{ $program->status }}">{{ ucfirst($program->status) }}</span>
          </div>
          <h4>{{ $program->judul }}</h4>
          <p class="proker-nama">{{ $program->nama_mahasiswa }}</p>
          <p>{{ $program->deskripsi }}</p>
        </div>
        @empty
        @endforelse
      </div>
    </div>

    <!-- DOKUMENTASI -->
    <div id="dokumentasi-kkn" style="margin-bottom:72px; scroll-margin-top:110px;">
      <div class="section-head reveal">
        <span class="label">Jejak Kegiatan</span>
        <h2 style="font-size:1.5rem;">Dokumentasi Kegiatan KKN</h2>
        <p>Dokumentasi foto dan video kegiatan mahasiswa KKN UBP Karawang 2026 di {{ $profile?->nama_desa }}.</p>
      </div>
      <div class="masonry">
        @forelse($galeriKkn as $g)
        <div class="masonry-item reveal"><div class="mi-fill">{{ $g->judul }}</div><div class="mi-cap">{{ $g->judul }}</div></div>
        @empty
        @endforelse
      </div>
    </div>

    <!-- ARTIKEL KKN -->
    <div id="artikel-kkn" style="margin-bottom:72px; scroll-margin-top:110px;">
      <div class="section-head reveal">
        <span class="label">Publikasi</span>
        <h2 style="font-size:1.5rem;">Artikel KKN</h2>
        <p>Tulisan dan liputan seputar pelaksanaan {{ $kknPeriod->nama }} di {{ $profile?->nama_desa }}.</p>
      </div>
      <div class="berita-grid">
        @forelse($kknArtikel as $artikel)
        <div class="berita-card reveal">
          <div class="berita-thumb">{{ $artikel->judul }}</div>
          <div class="berita-body">
            <span class="berita-date">{{ $artikel->tanggal_publish->format('d M Y') }}</span>
            <h4>{{ $artikel->judul }}</h4>
            <p>{{ Str::limit($artikel->ringkasan, 100) }}</p>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>

    <!-- LUARAN -->
    <div id="luaran-kkn" style="scroll-margin-top:110px;">
      <div class="section-head reveal">
        <span class="label">Hasil Akhir</span>
        <h2 style="font-size:1.5rem;">Luaran KKN</h2>
        <p>Produk dan hasil nyata yang diserahkan kepada Pemerintah {{ $profile?->nama_desa }} agar dapat dimanfaatkan berkelanjutan.</p>
      </div>
      <div class="luaran-grid">
        @forelse($kknOutput as $output)
        <div class="luaran-card reveal"><div class="lc-icon">{{ $output->icon }}</div><h5>{{ $output->judul }}</h5><p>{{ $output->deskripsi }}</p></div>
        @empty
        @endforelse
      </div>
    </div>
    @endif

  </div>
</section>