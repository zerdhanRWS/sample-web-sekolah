@extends('_layout.with-sidebar')

@section('content')
  <h1>Daftar Guru</h1>
  <div class="row g-3">
    @foreach ($items as $item)
      <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="{{ asset($item->foto) }}" alt="{{ $item->nama }}" class="img-fluid">
          </div>
          <div class="text-center">{{ $item->nama }}</div>
          <div class="text-muted small text-center">{{ $item->jabatan }}</div>
        </div>
      </div>
    @endforeach

  </div>
@endsection

@push('sidebar')
  ini sidebar, bisa ditambahkan artikel terbaru, galeri
  @foreach ($berita->skip(15) as $berita)
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset($berita->foto) }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $berita->judul }}</h5>
          <p class="card-text">{{ $berita->sinopsis }}</p>
          <div>
            <p class="card-text"><small class="text-muted"></small></p>
            <a href="{{ route('berita.show', [
                'beritum' => $berita->id,
            ]) }}"
              class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endpush
