@extends ('layouts.app')

@section('body')
        <h1 class="mb-0">Edit Book</h1>
    </div>
    <hr />
    <form action="{{ route('addnis.update', $nis->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
            <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{ $nis->nis }}">
            </div>
            <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="NIS Name" value="{{ $nis->name }}">
            </div>
            <div class="col mb-3">
            <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin" value="{{ $nis->jk }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
    @endsection