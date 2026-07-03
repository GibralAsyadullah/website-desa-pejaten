<section id="edukasi-lingkungan">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Program Unggulan Desa</span>
      <h2>Edukasi Lingkungan</h2>
      <p>Materi edukasi pengelolaan sampah untuk warga {{ $profile?->nama_desa }}, dikembangkan bersama mahasiswa KKN Universitas Buana Perjuangan Karawang 2026.</p>
    </div>

    <div class="infografik-strip">
      <div class="info-r reveal"><div class="ir-icon">🗑️</div><h5>Apa itu Sampah</h5><p>Pengertian dasar</p></div>
      <div class="info-r reveal"><div class="ir-icon">🧴</div><h5>Jenis Sampah</h5><p>Organik &amp; anorganik</p></div>
      <div class="info-r reveal"><div class="ir-icon">♻️</div><h5>3R</h5><p>Reduce, Reuse, Recycle</p></div>
      <div class="info-r reveal"><div class="ir-icon">🏦</div><h5>Bank Sampah</h5><p>Tabungan sampah warga</p></div>
    </div>

    <div class="accordion" id="edukAccordion">
      @forelse($edukasi as $index => $topik)
      <div class="acc-item {{ $index === 0 ? 'open' : '' }}">
        <div class="acc-head" onclick="toggleAcc(this)">
          <h4>{{ $index + 1 }}. {{ $topik->judul }}</h4>
          <div class="acc-plus">+</div>
        </div>
        <div class="acc-body">
          <div class="acc-body-in">
            <p>{{ $topik->konten }}</p>
          </div>
        </div>
      </div>
      @empty
      @endforelse

      <div class="acc-item">
        <div class="acc-head" onclick="toggleAcc(this)">
          <h4>FAQ Seputar Pengelolaan Sampah</h4>
          <div class="acc-plus">+</div>
        </div>
        <div class="acc-body">
          <div class="acc-body-in">
            @forelse($faq as $f)
            <p><strong>{{ $f->pertanyaan }}</strong><br>{{ $f->jawaban }}</p>
            @empty
            @endforelse
          </div>
        </div>
      </div>
    </div>

    <div class="eduk-download reveal">
      <div>
        <h4>Unduh Poster Edukasi Lingkungan</h4>
        <p>Materi cetak untuk disebarkan di balai dusun, sekolah, dan tempat ibadah.</p>
      </div>
      <a href="#" class="hc-btn-solid">⬇️ Download Poster</a>
    </div>
  </div>
</section>