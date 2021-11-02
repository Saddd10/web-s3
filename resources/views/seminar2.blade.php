@extends('layouts.mhs_app')

@section('content')
<div class="card">
  <h5 class="card-header">Pendaftaran</h5>
  <div class="card-body">
    <form>
        <div class="mb-3">
            <label for="inputName" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="inputName">
        </div>
        <div class="mb-3">
            <label for="inputNRP" class="form-label">NRP</label>
            <input type="text" class="form-control" id="inputNRP">
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPromotor">Promotor</label>
            <select id="inputPromotor" class="select2bs4 form-control ">
                <option>--Pilih Promotor--</option>
                <option>DOsen 1</option>
                <option>Dosen 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputCopromotor">Co-Promotor</label>
            <select id="inputCopromotor" class="select2bs4 form-control ">
                <option>--Pilih Co-Promotor--</option>
                <option>DOsen 1</option>
                <option>Dosen 2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="syarat">File Persyaratan (.zip)</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="syarat">
                    <label class="custom-file-label" for="foto">Pilih file</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
  </div>
</div>
@endsection