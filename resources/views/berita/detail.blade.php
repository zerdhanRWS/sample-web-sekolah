@extends('_layout.with-sidebar')

@section('content')
  <div class="card">
    <div class="card-body">
      <h1>{{ $item->judul }}</h1>

      <div>{!! $item->isi !!}</div>
    </div>
  </div>

  <div class="alert alert-info">ditambah banyak hal seperti komentar, berita terkait, ... juga boleh</div>
@endsection

@push('sidebar')
  ini sidebar, bisa ditambahkan artikel terbaru, galeri
  @foreach ($berita as $berita)
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
