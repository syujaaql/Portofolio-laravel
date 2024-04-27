@extends('dashboard.layout')

@section('Konten')
    <div class="pb-3"><a href="{{ route('halaman.index') }}" class="btn btn-secondary">
            << Kembali</a>
    </div>
    <form action="{{ route('halaman.update',$data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="judul"
                value="{{ $data->judul }}"
            />
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">isi</label>
            <textarea 
                name="isi" 
                id="isi" 
                rows="5" 
                class="form-control summernote"
            >{{ $data->isi }}</textarea>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
    </form>
@endsection

