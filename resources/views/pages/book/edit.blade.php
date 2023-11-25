@extends ('layouts.app')

@section('body')
        <h1 class="mb-0">Edit Book</h1>
    </div>
    <hr />
    <form action="{{ route('book.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{ $book->nis }}">
            </div>
            <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Book Name" value="{{ $book->name }}">
            </div>
            <div class="col mb-3">
            <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{ $book->kelas }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $book->jurusan}}">
            </div>
            <div class="col mb-3">
            <label class="form-label">Angkatan</label>
            <textarea class="form-control" name="angkatan" placeholder="Angkatan">{{ $book->angkatan}}</textarea>
            </div>
        </div>
        <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin" value="{{ $book->jk }}">
            </div>
            <label class="form-label">Sakit</label>
                <input type="text" name="sakit" class="form-control" placeholder="Sakit" value="{{ $book->sakit }}">
            </div>
            <label class="form-label">Penanganan</label>
                <input type="text" name="penanganan" class="form-control" placeholder="Penanganan" value="{{ $book->penanganan }}">
            </div>
            <label class="form-label">Petugas</label>
                <input type="text" name="petugas" class="form-control" placeholder="Petugas" value="{{ $book->petugas }}">
            </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
    @endsection