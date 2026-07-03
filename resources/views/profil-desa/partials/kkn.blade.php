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
        <div class="tim-card reveal"><div class="tim-photo">{{ substr($member->nama, 0, 2) }}</div><div class="tim-body"><div class="t-name">{{ $member->nama }}</div><div class="t-role">{{ $member->peran }}</div></div></div>
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
              @foreach($timeline->items as $item)
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
        @forelse($kknIndividual as $proki)
        <div class="proker-card reveal">
          <div class="proker-top"><span class="proker-prodi">{{ $proki->studyProgram->nama }}</span><span class="proker-status {{ $proki->status }}">{{ ucfirst($proki->status) }}</span></div>
          <h4>{{ $proki->judul }}</h4>
          <p class="proker-nama">{{ $proki->nama_mahasiswa }}</p>
          <p>{{ $proki->deskripsi }}</p>
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
        @forelse($kknOutput as $luaran)
        <div class="luaran-card reveal"><div class="lc-icon">{{ $luaran->icon }}</div><h5>{{ $luaran->judul }}</h5><p>{{ $luaran->deskripsi }}</p></div>
        @empty
        @endforelse
      </div>
    </div>
    @endif
  </div>
</section>