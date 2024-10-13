@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Resep Obat</h1>
    <p class="mb-4">Manajemen Resep Obat</p>

    <div class="card shadow">
        <div class="card-header">
            <h4>Edit</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('resep-obat.update', $edit->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="berobat_id">Sakit</label>
                            <select name="berobat_id" id="berobat_id" class="form-control">
                                @foreach ($berobat as $item)
                                    <option value="{{ $item->id }}" {{ $edit->berobat_id == $item->id ? 'selected' : '' }}>{{ $item->hasil_diagnosa }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="obat_id">Nama Obat</label>
                            <select name="obat_id" id="obat_id" class="form-control">
                                @foreach ($obat as $item)
                                    <option value="{{ $item->id }}" {{ $edit->obat_id == $item->id ? 'selected' : '' }}>{{ $item->nama_obat }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
