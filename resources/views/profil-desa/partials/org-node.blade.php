@php
  $children = $node->children ?? [];
@endphp

<div class="org-node {{ $level === 0 ? 'top' : '' }}">
  <div class="on-role">{{ $node->jabatan }}</div>
  <div class="on-name">{{ $node->nama_pejabat }}</div>
</div>

@if($children->count() > 0)
  <div class="org-line"></div>
  <div class="org-row">
    @foreach($children as $child)
      <div class="org-branch">
        @include('profil-desa.partials.org-node', ['node' => $child, 'level' => $level + 1])
      </div>
    @endforeach
  </div>
@endif