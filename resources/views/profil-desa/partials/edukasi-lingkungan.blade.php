<section id="edukasi-lingkungan">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="label">Program Unggulan Desa</span>
      <h2>Edukasi Lingkungan</h2>
      <p>Materi edukasi pengelolaan sampah untuk warga {{ $profile?->nama_desa }}, dikembangkan bersama mahasiswa KKN Universitas Buana Perjuangan Karawang 2026.</p>
    </div>

    <div class="infografik-strip">
      @forelse($edukasi->take(4) as $e)
      <div class="info-r reveal"><div class="ir-icon">📚</div><h5>{{ $e->judul }}</h5><p>{{ Str::limit($e->konten, 30) }}</p></div>
      @empty
      @endforelse
    </div>

    <div class="accordion" id="edukAccordion">
      @forelse($edukasi as $index => $topic)
      <div class="acc-item {{ $index === 0 ? 'open' : '' }}">
        <div class="acc-head" onclick="toggleAcc(this)">
          <h4>{{ $index + 1 }}. {{ $topic->judul }}</h4>
          <div class="acc-plus">+</div>
        </div>
        <div class="acc-body">
          <div class="acc-body-in">
            <p>{{ $topic->konten }}</p>
          </div>
        </div>
      </div>
      @empty
      @endforelse
    </div>

    @if($faq->count() > 0)
    <div class="accordion" style="margin-top:32px;">
      @foreach($faq as $index => $f)
      <div class="acc-item">
        <div class="acc-head" onclick="toggleAcc(this)">
          <h4>{{ $f->pertanyaan }}</h4>
          <div class="acc-plus">+</div>
        </div>
        <div class="acc-body">
          <div class="acc-body-in">
            <p>{{ $f->jawaban }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endif

    <div class="eduk-download reveal" style="margin-top:36px;">
      <div>
        <h4>Unduh Poster Edukasi Lingkungan</h4>
        <p>Materi cetak untuk disebarkan di balai dusun, sekolah, dan tempat ibadah.</p>
      </div>
      <a href="#" class="hc-btn-solid">⬇️ Download Poster</a>
    </div>
  </div>
</section>