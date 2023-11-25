@extends ('layouts.app')

@section('body')
        <h1 class="mb-0">Add Book</h1>
    </div>
    <hr />
    <form action="{{ route('addkelas.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="idkelas" class="form-control" placeholder="ID Kelas" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            </div>
            <div class="col">
                <input type="text" name="nis" class="form-control" placeholder="NIS" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            </div>
            <div class="col">
                <input type="text" name="ta" class="form-control" placeholder="Tahun Ajaran">
            </div>
            <div class="col">
                <input type="text" name="kelas" class="form-control" placeholder="Kelas">
            </div>
            <div class="col">
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @endsection