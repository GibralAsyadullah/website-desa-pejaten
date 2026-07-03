<div class="profil-block" id="struktur-organisasi">
  <div class="pb-head">
    <span class="label">08 — Profil Desa</span>
    <h2>Struktur Organisasi Pemerintah Desa</h2>
    <p>Susunan organisasi pemerintahan {{ $profile?->nama_desa }}.</p>
  </div>
  <div class="orgchart reveal">
    @if($orgChart)
      @include('profil-desa.partials.org-node', ['node' => $orgChart, 'level' => 0])
    @endif
  </div>
</div>